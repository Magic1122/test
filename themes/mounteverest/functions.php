<?php

    // Load stylesheets

    function load_css() {

        wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', [], false, 'all');
        wp_register_style('fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', [], false, 'all');
        wp_register_style('main', get_template_directory_uri() . '/style.css', [], false, 'all');

        wp_enqueue_style('bootstrap');
        wp_enqueue_style('fontawesome');
        wp_enqueue_style('main');
    }

    add_action('wp_enqueue_scripts', 'load_css');

    // Loads js

    function load_js() {

        wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', ['jquery'], false, true);

        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap');
    }

    add_action('wp_enqueue_scripts', 'load_js');


    // Register Nav Walker class_alias
    require_once('wp-bootstrap-navwalker.php');

    // Registering Theme Setup
    function theme_setup() {
        // Image upload option for posts
        add_theme_support('post-thumbnails');
        // Nav Menus
        register_nav_menus([
            'primary' => __('Primary Menu')
        ]);
        // Post Formats
        add_theme_support('post-formats', ['aside', 'gallery']);
    }

    add_action('after_setup_theme', 'theme_setup');

    // Controlling excerpt length
    function set_excerpt_length() {
        return 45;
    }

    add_filter('excerpt_length', 'set_excerpt_length');

    // Widget Locations
    function init_widgets($id) {

        register_sidebar([
            'name' => 'Sidebar', 
            'id' => 'sidebar', 
            'before_widget' => '<div class="sidebar-module">', 
            'after_widget' => '</div>', 
            'before_title' => '<h4>', 
            'after_title' => '</h4>'
        ]);

        register_sidebar([
            'name' => 'Box1', 
            'id' => 'box1', 
            'before_widget' => '<div class="box">', 
            'after_widget' => '</div>', 
            'before_title' => '<h3>', 
            'after_title' => '</h3>'
        ]);

        register_sidebar([
            'name' => 'Box2', 
            'id' => 'box2', 
            'before_widget' => '<div class="box">', 
            'after_widget' => '</div>', 
            'before_title' => '<h3>', 
            'after_title' => '</h3>'
        ]);

        register_sidebar([
            'name' => 'Box3', 
            'id' => 'box3', 
            'before_widget' => '<div class="box">', 
            'after_widget' => '</div>', 
            'before_title' => '<h3>', 
            'after_title' => '</h3>'
        ]);
    }

    add_action('widgets_init', 'init_widgets');

    
    // Customizer file
    require get_template_directory(). '/includes/customizer.php';
    