<?php
function theme_cpts() {
    $labels = array(
        'name'                  => _x( 'Services', 'Post type general name', 'services' ),
        'singular_name'         => _x( 'Services', 'Post type singular name', 'services' ),
        'menu_name'             => _x( 'services', 'Admin Menu text', 'services' ),
        'name_admin_bar'        => _x( 'services', 'Add New on Toolbar', 'services' ),
        'add_new'               => __( 'Add New', 'services' ),
        'add_new_item'          => __( 'Add New services', 'services' ),
        'new_item'              => __( 'New services', 'services' ),
        'edit_item'             => __( 'Edit services', 'services' ),
        'view_item'             => __( 'View services', 'services' ),
        'all_items'             => __( 'All servicess', 'services' ),
        'search_items'          => __( 'Search servicess', 'services' )
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'services custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'services' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
       'show_in_rest'       => true
    );
     
    register_post_type( 'services', $args );
}
add_action( 'init', 'theme_cpts' );

