<?php 

    function wpb_customize_register($wp_customize) {
        // Adding showcase section
        $wp_customize->add_section('showcase', [
            'title' => __('Showcase', 'Mount Everest Travel Blog'), 
            'description' => sprintf(__('Options for showcase'), 'Mount Everest Travel Blog'), 
            'priority' => 130
        ]);

        $wp_customize->add_setting('showcase_image', [
            'default' => get_bloginfo('template_directory') . '/img/showcase.jpg',  
            'type' => 'theme_mod'
        ]);

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', [
            'label' => __('Showcase Image', 'Mount Everest Travel Blog'), 
            'section' => 'showcase', 
            'settings' => 'showcase_image',
            'priority' => 1
        ]));

        $wp_customize->add_setting('showcase_heading', [
            'default' => _x('Mount Everest Travel Blog Wordpress Theme', 'Mount Everest Travel Blog'), 
            'type' => 'theme_mod'

        ]);

        $wp_customize->add_control('showcase_heading', [
            'label' => __('Heading', 'Mount Everest Travel Blog'), 
            'section' => 'showcase', 
            'priority' => 2
        ]);

        $wp_customize->add_setting('showcase_text', [
            'default' => _x('Walk on keyboard hunt by meowing loudly at 5am next to human slave food dispenser chase red laser dot so mrow miaow then turn around and show you my bum pose purrfectly to show my beauty', 'Mount Everest Travel Blog'), 
            'type' => 'theme_mod'

        ]);

        $wp_customize->add_control('showcase_text', [
            'label' => __('Text', 'Mount Everest Travel Blog'), 
            'section' => 'showcase', 
            'priority' => 3
        ]);

        $wp_customize->add_setting('btn_url', [
            'default' => _x('blog', 'Mount Everest Travel Blog'), 
            'type' => 'theme_mod'

        ]);

        $wp_customize->add_control('btn_url', [
            'label' => __('Button URL', 'Mount Everest Travel Blog'), 
            'section' => 'showcase', 
            'priority' => 4
        ]);

        $wp_customize->add_setting('btn_text', [
            'default' => _x('Read More', 'Mount Everest Travel Blog'), 
            'type' => 'theme_mod'

        ]);

        $wp_customize->add_control('btn_text', [
            'label' => __('Button Text', 'Mount Everest Travel Blog'), 
            'section' => 'showcase', 
            'priority' => 5
        ]);

    };

    add_action('customize_register', 'wpb_customize_register');

?>