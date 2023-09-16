<?php
    /**
     * Creating Post Type Miembros
     */
    function miembros_cpt_create() {
        $labels = array(
            'name' => __( 'Miembros Bru'),
            'singular_name' => __( 'Miembro'),
            'menu_name' => __('Miembros','admin_menu'),
            'view_item' => __( 'ver miembros'),
            'search_items' => __( 'buscar miembros'),
        );

        $args = array(
            'label' => __('Miembros Bru'),
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'show_in_menu' => true,
            'show_ui' => true,
            'has_archive' => true,
            'hierarchical' => false,
            'capability_type' => 'post',
            'rewrite' => array( 'slug' => 'companies'),
            'supports'=> array('title' ,'thumbnail','editor'),
            'show_in_nav_menus' => true,
            'menu_icon' => 'dashicons-groups',
            'map_meta_cap' => true
        );

        register_post_type( 'miembro', $args );
    }

    add_action( 'init', 'miembros_cpt_create' );


    // function companies_taxonomies() {

    //     register_taxonomy('company-category', array('company'), array(
    //         'labels' => array(
    //             'name' => __('Categories'),
    //             'singular_name' => __('Category'),
    //             'all_items' => __( 'All Categories' ),
    //             'parent_item' => null,
    //             'parent_item_colon' => null
    //         ),
    //         'hierarchical' => true,
    //         'show_ui' => true,
    //         'show_admin_column' => true,
    //         'query_var' => true
    //     ));
    // }

    // add_action( 'init', 'companies_taxonomies' );