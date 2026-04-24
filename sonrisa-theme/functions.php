<?php
/**
 * Sonrisa Dental Specialists — WordPress Theme Functions
 *
 * Asset strategy: CSS, JS, and images live at the WordPress ROOT under /assets/
 * (uploaded alongside wp-content/, wp-admin/, etc.). This means every absolute
 * path in page HTML ("/assets/images/…") continues to resolve correctly without
 * any changes to page content.
 *
 * GHL submission handler lives at the WordPress ROOT under /ghl/ for the same
 * reason — survey forms fetch('/ghl/submit_handler.php') must stay accessible.
 */

// ─── 1. Theme Setup ──────────────────────────────────────────────────────────
function sonrisa_setup() {
    // Let WordPress / Yoast manage <title> — we filter it below
    add_theme_support( 'title-tag' );

    // HTML5 markup
    add_theme_support( 'html5', [
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
    ] );

    // Register a nav menu slot (optional — nav is hard-coded in header.php)
    register_nav_menus( [ 'primary' => __( 'Primary Navigation', 'sonrisa' ) ] );
}
add_action( 'after_setup_theme', 'sonrisa_setup' );


// ─── 2. Enqueue Assets ───────────────────────────────────────────────────────
function sonrisa_enqueue_assets() {
    // Main stylesheet — served from WP root /assets/css/style.css
    wp_enqueue_style(
        'sonrisa-main-style',
        site_url( '/assets/css/style.css' ),
        [],
        '1.0.0'
    );

    // Main JS — served from WP root /assets/js/main.js
    wp_enqueue_script(
        'sonrisa-main-js',
        site_url( '/assets/js/main.js' ),
        [],
        '1.0.0',
        true  // load in footer
    );
}
add_action( 'wp_enqueue_scripts', 'sonrisa_enqueue_assets' );


// ─── 3. Page Data Global ─────────────────────────────────────────────────────
// Every page template sets $sonrisa_page BEFORE calling get_header().
// Recognised keys:
//   title        (string)  — document title, overrides WP default
//   description  (string)  — meta description (Yoast overrides this when active)
//   class        (string)  — extra CSS class added to <body>
//   nav_type     (string)  — 'dental-implants' | 'orthodontics' | '' (default)
//   hide_top_bar (bool)    — suppress the top bar
//   hide_header  (bool)    — suppress the entire site header
//   hide_nav_links (bool)  — suppress nav links (shows logo only)
global $sonrisa_page;
$sonrisa_page = [];


// ─── 4. Document Title (Yoast-compatible) ────────────────────────────────────
// Yoast SEO will override this filter with its own higher-priority hook.
// Until Yoast is configured this provides the correct per-page title.
add_filter( 'pre_get_document_title', function ( $title ) {
    global $sonrisa_page;
    if ( ! empty( $sonrisa_page['title'] ) ) {
        return esc_html( $sonrisa_page['title'] );
    }
    return $title;
}, 5 );


// ─── 5. Meta Description (Yoast-compatible) ──────────────────────────────────
// Output early in wp_head (priority 1). Yoast will output its own and suppress
// duplicates automatically once configured.
add_action( 'wp_head', function () {
    global $sonrisa_page;
    if ( ! empty( $sonrisa_page['description'] ) ) {
        echo '<meta name="description" content="' . esc_attr( $sonrisa_page['description'] ) . '">' . "\n";
    }
}, 1 );


// ─── 6. Body Classes ─────────────────────────────────────────────────────────
add_filter( 'body_class', function ( $classes ) {
    global $sonrisa_page;
    if ( ! empty( $sonrisa_page['class'] ) ) {
        // Support space-separated multiple classes
        foreach ( explode( ' ', $sonrisa_page['class'] ) as $cls ) {
            $cls = trim( $cls );
            if ( $cls ) {
                $classes[] = sanitize_html_class( $cls );
            }
        }
    }
    return array_unique( $classes );
} );


// ─── 7. Nav Active-State Helpers ─────────────────────────────────────────────
// Replicates the logic from the original includes/header.php.
// Used inside header.php template for highlighting the active nav item.
function sonrisa_nav_active( string $prefix ): bool {
    static $path = null;
    if ( $path === null ) {
        $path = parse_url( $_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH );
    }
    if ( $prefix === '/' ) {
        return $path === '/';
    }
    return strpos( $path, $prefix ) === 0;
}

function sonrisa_nav_cls( string $prefix ): string {
    return sonrisa_nav_active( $prefix ) ? ' nav-item-active' : '';
}


// ─── 8. Clean Up WP Head Bloat ───────────────────────────────────────────────
add_action( 'init', function () {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'wp_generator' );          // hides WP version
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wp_shortlink_wp_head' );
} );

// Remove Gutenberg block styles (not used in this theme)
add_action( 'wp_enqueue_scripts', function () {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'global-styles' );
}, 100 );


// ─── 9. Disable XML-RPC & Feeds (optional hardening) ────────────────────────
add_filter( 'xmlrpc_enabled', '__return_false' );
