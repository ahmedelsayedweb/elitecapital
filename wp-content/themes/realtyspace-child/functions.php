<?php

spl_autoload_register(function ($class) {

    // project-specific namespace prefix
    $prefix = 'cf47\\theme\\realtyspace\\child';

    // base directory for the namespace prefix
    $base_dir = __DIR__ . '/lib';

    // does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // no, move to the next registered autoloader
        return;
    }

    // get the relative class name
    $relative_class = substr($class, $len);

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});

add_action('cf47_app_callback', function (\cf47\themecore\Application $app) {
    $app->register_module(new cf47\theme\realtyspace\child\Init());
});

// Override secondary styles and scripts
add_action('wp_enqueue_scripts', function () {
    $version = filemtime(get_stylesheet_directory() . '/' . 'script.js');
    wp_enqueue_script('cf47rs-script', get_stylesheet_directory_uri() . '/script.js', ['jquery'], $version);
});

// Load child theme translation files
add_action('after_setup_theme', function () {
    load_child_theme_textdomain('realtyspace', get_stylesheet_directory() . '/languages');
});

// Override main theme style
add_action('wp_enqueue_scripts', function () {
//     Please uncomment which you need
//    wp_deregister_style('cf47rs-theme');
//    wp_enqueue_style(
//        'cf47rs-theme', get_stylesheet_directory_uri() . '/theme-default.css',
//        [
//            'cf47rs-vendors',
//            'cf47rs-standartwp',
//        ],
//        filemtime(get_stylesheet_directory() . '/theme-default.css')
//    );
}, 20);

// Override secondary styles and scripts
add_action('wp_enqueue_scripts', function () {
//    wp_enqueue_style( 'cf47rs-standartwp', get_stylesheet_directory_uri() . '/wordpress.css' );
//    wp_enqueue_style( 'cf47rs-vendors', get_stylesheet_directory_uri() . '/vendors.css' );
//    wp_enqueue_script( 'cf47rs-vendors', get_stylesheet_directory_uri() . '/vendor.js' );
//    wp_enqueue_script( 'cf47rs-app', get_stylesheet_directory_uri() . '/app.js' );
});

add_filter('posts_join', 'segnalazioni_search_join' );
function segnalazioni_search_join ($join){
    global $pagenow, $wpdb;
    // I want the filter only when performing a search on edit page of Custom Post Type named "segnalazioni"
    if ( is_admin() && $pagenow=='edit.php' && $_GET['post_type']=='cf47rs_property' && $_GET['s'] != '') {
        $join .='LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }
    return $join;
}

add_filter( 'posts_where', 'segnalazioni_search_where' );
function segnalazioni_search_where( $where ){
    global $pagenow, $wpdb;
    // I want the filter only when performing a search on edit page of Custom Post Type named "segnalazioni"
    if ( is_admin() && $pagenow=='edit.php' && $_GET['post_type']=='cf47rs_property' && $_GET['s'] != '') {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }
    return $where;
}

add_filter( 'posts_groupby', 'my_post_limits' );
function my_post_limits($groupby) {
    global $pagenow, $wpdb;
    if ( is_admin() && $pagenow == 'edit.php' && $_GET['post_type']=='cf47rs_property' && $_GET['s'] != '' ) {
        $groupby = "$wpdb->posts.ID";
    }
    return $groupby;
}