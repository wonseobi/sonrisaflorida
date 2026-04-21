<?php
require_once __DIR__ . '/config.php';

function normalizePhone(string $phone): string {
    $digits = preg_replace('/[^\d]/', '', $phone);
    if (strlen($digits) === 10) {
        return '+1' . $digits;
    }
    if (strlen($digits) === 11 && $digits[0] === '1') {
        return '+' . $digits;
    }
    return '+' . $digits;
}

function sendLeadToGHL(array $payload): array {
    $token   = ACCESS_TOKEN;
    $version = API_VERSION;

    if (!empty($payload['phone'])) {
        $payload['phone'] = normalizePhone($payload['phone']);
    }

    $payload['locationId'] = LOCATION_ID;

    // 1. Attempt to create contact
    $ch = curl_init('https://services.leadconnectorhq.com/contacts/');
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => json_encode($payload),
        CURLOPT_HTTPHEADER     => [
            'Authorization: Bearer ' . $token,
            'Version: ' . $version,
            'Content-Type: application/json',
            'Accept: application/json',
        ],
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode === 200 || $httpCode === 201) {
        return ['success' => true, 'message' => 'Thank you! We\'ll be in touch soon.'];
    }

    // 2. On 400 try to find and update the existing contact
    if ($httpCode === 400) {
        $responseData = json_decode($response, true);
        $errorMsg     = strtolower($responseData['message'] ?? '');
        $isDuplicate  = strpos($errorMsg, 'duplicat') !== false;

        // Try search + update so custom fields are refreshed
        $contactId = searchGHLContact(
            $payload['email'] ?? '',
            $payload['phone'] ?? '',
            $token,
            $version
        );

        if ($contactId) {
            $result = updateGHLContact($contactId, $payload, $token, $version);
            // Prepend contact ID to whatever debug the update returns
            $result['debug'] = "Contact {$contactId}: " . ($result['debug'] ?? ($result['success'] ? 'updated OK' : 'update failed'));
            return $result;
        }

        // If the API confirmed the contact already exists, treat as success.
        if ($isDuplicate) {
            return [
                'success' => true,
                'message' => 'Thank you! We\'ll be in touch soon.',
                'debug'   => 'Duplicate detected but search returned no ID — contact exists in GHL',
            ];
        }
    }

    $ghlError = json_decode($response, true);
    $ghlMsg   = $ghlError['message'] ?? $ghlError['msg'] ?? 'Unknown GHL error';
    return [
        'success' => false,
        'message' => 'Submission failed. Please try again.',
        'debug'   => "HTTP {$httpCode}: {$ghlMsg}",
    ];
}

function searchGHLContact(string $email, string $phone, string $token, string $version): ?string {
    // GHL v2 contacts list endpoint with query param (not /contacts/search)
    $base = 'https://services.leadconnectorhq.com/contacts/?locationId=' . LOCATION_ID . '&query=';

    if ($email) {
        $id = doGHLSearch($base . urlencode($email), $token, $version);
        if ($id) return $id;
    }

    if ($phone) {
        $digits = preg_replace('/[^\d]/', '', $phone);
        $id = doGHLSearch($base . urlencode($digits), $token, $version);
        if ($id) return $id;
    }

    return null;
}

function doGHLSearch(string $url, string $token, string $version): ?string {
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER     => [
            'Authorization: Bearer ' . $token,
            'Version: ' . $version,
            'Accept: application/json',
        ],
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode !== 200) {
        return null;
    }

    $data = json_decode($response, true);

    $contacts = $data['contacts']
        ?? $data['data']['contacts']
        ?? [];

    return !empty($contacts) ? ($contacts[0]['id'] ?? null) : null;
}

function updateGHLContact(string $id, array $payload, string $token, string $version): array {
    // Only send fields GHL accepts on PUT (strip locationId to avoid conflicts)
    $updatePayload = array_diff_key($payload, ['locationId' => true]);

    $ch = curl_init('https://services.leadconnectorhq.com/contacts/' . $id);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST  => 'PUT',
        CURLOPT_POSTFIELDS     => json_encode($updatePayload),
        CURLOPT_HTTPHEADER     => [
            'Authorization: Bearer ' . $token,
            'Version: ' . $version,
            'Content-Type: application/json',
            'Accept: application/json',
        ],
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // Accept 200, 201, and 204 (No Content) as success
    if (in_array($httpCode, [200, 201, 204], true)) {
        return ['success' => true, 'message' => 'Thank you! We\'ll be in touch soon.'];
    }

    $ghlError = json_decode($response, true);
    $ghlMsg   = $ghlError['message'] ?? $ghlError['msg'] ?? ($response ?: 'No response body');
    return [
        'success' => false,
        'message' => 'Submission failed. Please try again.',
        'debug'   => "PUT HTTP {$httpCode}: {$ghlMsg}",
    ];
}
