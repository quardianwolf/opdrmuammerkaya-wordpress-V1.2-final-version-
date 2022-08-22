<?php

    // Defining Theme Constants
define("VOOBI_THEME_PATH", get_template_directory() . "/");
define("VOOBI_THEME_URL", get_template_directory_uri() . "/");
define("VOOBI_PREFIX", "voobi");
define("VOOBI_ASSETS", VOOBI_THEME_URL . "public/assets/");
define("VOOBI_ASSETS_PATH", VOOBI_THEME_PATH . "public/assets/");

define('ALLOW_UNFILTERED_UPLOADS', true);

    function theme_support(){
         //Adds dynamic title tag support
        add_theme_support('title-tag');
    }
   
    add_action('after_theme_setup', 'theme_support');






    function addCss()
    {



        wp_enqueue_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1', 'all');
        

        wp_enqueue_style('owlcarousel', '/wp-content/themes/OPDRMUAMMERKAYA/OwlCarousel/dist/assets/owl.carousel.min.css', array(), '1.0', 'all');
        

        wp_enqueue_style('datepicker', '/wp-content/themes/OPDRMUAMMERKAYA/datepicker/dist/css/bootstrap-datepicker.min.css', array(), '1.0', 'all');
        

        wp_enqueue_style('style', '/wp-content/themes/OPDRMUAMMERKAYA/assets/css/style.min.css', array(), '1.0', 'all');


        wp_enqueue_style('style1', '/wp-content/themes/OPDRMUAMMERKAYA/assets/style.min.css', array(), '1.0', 'all');

        
        

        wp_enqueue_style('all', '/wp-content/themes/OPDRMUAMMERKAYA/assets/vendor/css/all.min.css', array(), '1.0', 'all');
        

    }
    add_action('wp_enqueue_scripts', 'addCss');

   

    function addJs()
    {
        wp_enqueue_script('my-jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
        wp_enqueue_script('bootstrap-bundle', '/wp-content/themes/OPDRMUAMMERKAYA/js/bootstrap.bundle.min.js', array(), '1', true);
        wp_enqueue_script('my-jquery-waypoint', '/wp-content/themes/OPDRMUAMMERKAYA/js/jquery.waypoints.min.js', array(), '1', true);
        wp_enqueue_script('owl-carousel', '/wp-content/themes/OPDRMUAMMERKAYA/OwlCarousel/dist/owl.carousel.min.js', array(), '1', true);
        wp_enqueue_script('datepicker', '/wp-content/themes/OPDRMUAMMERKAYA/datepicker/dist/js/bootstrap-datepicker.min.js', array(), '1', true);
        wp_enqueue_script('imagesloaded', '/wp-content/themes/OPDRMUAMMERKAYA/js/plugins/imagesloaded.pkgd.min.js', array(), '1', true);
        wp_enqueue_script('isotope', '/wp-content/themes/OPDRMUAMMERKAYA/js/plugins/isotope.pkgd.min.js', array(), '1', true);
        wp_enqueue_script('main', '/wp-content/themes/OPDRMUAMMERKAYA/js/main.min.js', array(), '1', true);
        wp_enqueue_script('custom', '/wp-content/themes/OPDRMUAMMERKAYA/js/custom.js', array(), '1', true);
    }
    add_action('wp_enqueue_scripts', 'addJs');


    //appearance -> menu 

    add_theme_support('menus');

    register_nav_menus(array(

        'Navbar' => __('Navbar','theme')



    ));

    add_action('acf/init', 'voobi_acf_op_init');

    function voobi_acf_op_init()
    {

        // Check function exists.
        if (function_exists('acf_add_options_page')) {

            // Add parent.
            $parent = acf_add_options_page(array(
                'page_title'  => 'Theme Options',
                'menu_title'  => 'Theme Options',
                'menu_slug'   => 'voobi-theme-options',
                'capability'  => 'manage_options',
                'icon_url'    => 'dashicons-admin-home',
                'post_id'     => 'voobi_options',
                'redirect'    => false
            ));
        }
    }

    add_filter('upload_mimes', 'cod_mime_types');
    function cod_mime_types($mimes)
    {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }

    add_action('init', 'custom_theme_setup');
    function custom_theme_setup()
    {
        add_theme_support('post-formats', array('link', 'gallery'));
        add_theme_support('post-thumbnails');
        add_theme_support('custom-background');
        add_theme_support('custom-header');
        add_theme_support('custom-logo');
        add_theme_support('automatic-feed-links');
        // add_theme_support( 'html5');
        add_theme_support('title-tag');
    }
    pll_register_string( 'randevu', 'randevu', 'WordPress', true);
    pll_register_string( 'tedavi', 'tedavi', 'WordPress', true);
    pll_register_string( 'tedavi-link', 'tedavi-link', 'WordPress', true);
?>

 