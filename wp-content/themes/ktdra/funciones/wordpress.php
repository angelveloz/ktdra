<?php

    if ( ! function_exists( 'ktdra_setup' ) ){
        function ktdra_setup() {
            add_theme_support('menus');
            add_theme_support('post-thumbnails');
            add_theme_support( 'woocommerce' );
            add_theme_support( 'html5', array(
                'search-form', 'comment-form', 'comment-list',
            ) );
            register_nav_menus(array( 
                'ktdra_setup-main-menu' => esc_html__('K-T-DRAL Menu Principal', 'ktdra')
            ));
        }
    };
    add_action('after_setup_theme', 'ktdra_setup');


   add_filter( 'show_admin_bar', '__return_false' );

    add_action( 'admin_init', 'disable_autosave' );
    function disable_autosave() {
        wp_deregister_script( 'autosave' );
    }

    remove_action ('wp_head', 'rsd_link');
    remove_action( 'wp_head', 'wlwmanifest_link');
    remove_action( 'wp_head', 'wp_shortlink_wp_head');
    remove_action( 'wp_head', 'wp_generator');
    remove_action( 'wp_head','rest_output_link_wp_head');
    remove_action( 'wp_head','wp_oembed_add_discovery_links');
    remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
    remove_action('wp_head', 'rel_canonical');
    remove_action('wp_head', 'rel_canonical', 47);

    remove_action ('wp_head', 'wp_site_icon', 99);

    function move_scripts_from_head_to_footer() {
        remove_action( 'wp_head', 'wp_print_scripts' );
        remove_action( 'wp_head', 'wp_print_head_scripts', 9 );
        remove_action( 'wp_head', 'wp_enqueue_scripts', 1 );
        add_action( 'wp_footer', 'wp_print_scripts', 5);
        add_action( 'wp_footer', 'wp_enqueue_scripts', 5);
        add_action( 'wp_footer', 'wp_print_head_scripts', 5);
    }
    add_action('wp_enqueue_scripts', 'move_scripts_from_head_to_footer');

    function _remove_script_version( $src ){
        $parts = explode( '?ver', $src );
        return $parts[0]."?ver=".time();
        // return $parts[0];
    }
    add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
    add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );

    add_filter('widget_text', 'do_shortcode'); 
    add_filter('the_excerpt', 'do_shortcode'); 

    function disable_all_feeds() {
        
    }

    add_action('do_feed', 'wpb_disable_feed', 1);
    add_action('do_feed_rdf', 'wpb_disable_feed', 1);
    add_action('do_feed_rss', 'wpb_disable_feed', 1);
    add_action('do_feed_rss2', 'wpb_disable_feed', 1);
    add_action('do_feed_atom', 'wpb_disable_feed', 1);
    add_action('do_feed_rss2_comments', 'wpb_disable_feed', 1);
    add_action('do_feed_atom_comments', 'wpb_disable_feed', 1);

    remove_action( 'wp_head', 'feed_links_extra', 3 );
    remove_action( 'wp_head', 'feed_links', 2 );

    function head_cleanup() {
        remove_action( 'wp_head', 'rel_canonical' ); //quita el rel canonical
        remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );//quita rel next y rel prev
        remove_action( 'wp_head', 'wp_shortlink_wp_head' );
    }
    add_action( 'init', 'head_cleanup' ); 

?>