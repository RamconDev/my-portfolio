<?php
    function enqueue() {
        //SCRIPTS
        wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.2.3', true);

        //STYLES
        wp_enqueue_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', array(), '5.2.3', 'all');
        wp_enqueue_style('style-min', get_template_directory_uri() . '/assets/css/style.min.css', array(), filemtime(get_theme_file_path('/assets/css/style.min.css')), 'all');
    }

    add_action( 'wp_enqueue_scripts', 'enqueue' ); // Add Theme Stylesheet
