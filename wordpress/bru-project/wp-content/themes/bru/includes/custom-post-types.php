<?php
    /**
     * Creating Post Type Miembros
     */
    function miembros_cpt_create() {
        $cpt_name = 'Miembros';
        $singular_name = 'miembro';
        $slug_name = 'miembros';
        $menu_icon = 'dashicons-groups';

        $labels = array(
            'name' => __( $cpt_name ),
            'singular_name' => __( $singular_name),
            'menu_name' => __($cpt_name,'admin_menu'),
            'view_item' => __( 'ver miembros'),
            'search_items' => __( 'buscar miembros'),
        );

        $args = array(
            'label' => __( $cpt_name ),
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'show_in_menu' => true,
            'show_ui' => true,
            'has_archive' => true,
            'hierarchical' => false,
            'capability_type' => 'post',
            'rewrite' => array( 'slug' => $slug_name),
            'supports'=> array('title' ,'thumbnail'),
            'show_in_nav_menus' => true,
            'menu_icon' => $menu_icon,
            'map_meta_cap' => true
        );

        register_post_type( $cpt_name, $args );
    }
    add_action( 'init', 'miembros_cpt_create' );
    /**
     * Creating Taxonomy Miembros
     */
    function register_taxonomy_members() {
        $taxonomy_name = 'jerarquia';
        $taxonomy_slug = 'jerarquia';
        $singular_name = 'jerarquia';
        $plural_name = 'jerarquias';
        $cpt_name = 'miembros'; //singular name
    
        $args = array(
            'labels' => array(
                'name' => $plural_name,
                'singular_name' => $singular_name,
            ),
            'public' => true,
            'hierarchical' => true,
            'rewrite' => array('slug' => $taxonomy_slug),
        );
    
        register_taxonomy($taxonomy_name, $cpt_name, $args);
    }
    add_action('init', 'register_taxonomy_members');