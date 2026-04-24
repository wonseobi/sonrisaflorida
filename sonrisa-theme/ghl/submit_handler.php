<?php
// Buffer all output so PHP warnings/notices never corrupt the JSON response
ob_start();

// Suppress display of errors to the client
error_reporting(0);
ini_set('display_errors', '0');

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    ob_end_clean();
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

$raw  = file_get_contents('php://input');
$data = json_decode($raw, true);

if (!$data || !is_array($data)) {
    ob_end_clean();
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid payload']);
    exit;
}

$firstName = trim($data['firstName'] ?? '');
$lastName  = trim($data['lastName']  ?? '');
$email     = trim($data['email']     ?? '');
$phone     = trim($data['phone']     ?? '');

if (!$firstName || !$lastName || !$email || !$phone) {
    ob_end_clean();
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'All fields are required']);
    exit;
}

require_once __DIR__ . '/functions.php';

try {
    $result = sendLeadToGHL($data);
} catch (Throwable $e) {
    $result = ['success' => false, 'message' => 'Server error. Please try again.'];
}

ob_end_clean();
echo json_encode($result);
