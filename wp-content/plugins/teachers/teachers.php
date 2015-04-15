<?php
/*
Plugin Name: Graduates post type
Plugin URI:
Description: A simple wordpress plugin
Version: 1.0
Author: Paliy Roman
License: GPL2
*/
/*
Copyright 2014  Paliy Roman  (email : myzfann@mail.ru)
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
*/


if ( ! function_exists('graduates_post_type') ) {

// Register Custom Post Type
    function graduates_post_type() {

        $labels = array(
            'name'                => _x( 'Graduates', 'Post Type General Name', 'text_domain' ),
            'singular_name'       => _x( 'Graduates', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'           => __( 'Graduates', 'text_domain' ),
            'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
            'all_items'           => __( 'All Items', 'text_domain' ),
            'view_item'           => __( 'View Item', 'text_domain' ),
            'add_new_item'        => __( 'Add New Item', 'text_domain' ),
            'add_new'             => __( 'Add New', 'text_domain' ),
            'edit_item'           => __( 'Edit Item', 'text_domain' ),
            'update_item'         => __( 'Update Item', 'text_domain' ),
            'search_items'        => __( 'Search Item', 'text_domain' ),
            'not_found'           => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
        );
        $rewrite = array(
            'slug'                => 'graduates',
            'with_front'          => true,
            'pages'               => true,
            'feeds'               => true,
        );
        $args = array(
            'label'               => __( 'Graduates', 'text_domain' ),
            'description'         => __( 'Graduates Post Type ', 'text_domain' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'excerpt'),
            'taxonomies'          => array( 'category', 'post_tag' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 10,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => true,
            'publicly_queryable'  => true,
            'rewrite'             => $rewrite,
            'capability_type'     => 'post',
        );
        register_post_type( 'graduates', $args );

    }

// Hook into the 'init' action
    add_action( 'init', 'graduates_post_type', 0 );

}

if ( ! function_exists('students_post_type') ) {

// Register Custom Post Type
    function students_post_type() {

        $labels = array(
            'name'                => _x( 'Portfolio', 'Post Type General Name', 'text_domain' ),
            'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'           => __( 'Portfolio', 'text_domain' ),
            'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
            'all_items'           => __( 'All Items', 'text_domain' ),
            'view_item'           => __( 'View Item', 'text_domain' ),
            'add_new_item'        => __( 'Add New Item', 'text_domain' ),
            'add_new'             => __( 'Add New', 'text_domain' ),
            'edit_item'           => __( 'Edit Item', 'text_domain' ),
            'update_item'         => __( 'Update Item', 'text_domain' ),
            'search_items'        => __( 'Search Item', 'text_domain' ),
            'not_found'           => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
        );
        $rewrite = array(
            'slug'                => 'students',
            'with_front'          => true,
            'pages'               => true,
            'feeds'               => true,
        );
        $args = array(
            'label'               => __( 'Students', 'text_domain' ),
            'description'         => __( 'Students Post Type ', 'text_domain' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'thumbnail', 'page-attributes', 'excerpt', 'editor'),
            'taxonomies'          => array( 'category', 'post_tag' ),
            'hierarchical'        => true,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 10,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => true,
            'publicly_queryable'  => true,
            'rewrite'             => $rewrite,
            'capability_type'     => 'post',
        );
        register_post_type( 'students', $args );

    }

// Hook into the 'init' action
    add_action( 'init', 'students_post_type', 0 );

}

if ( ! function_exists('teachers_post_type') ) {

// Register Custom Post Type
    function teachers_post_type() {

        $labels = array(
            'name'                => _x( 'Teachers', 'Post Type General Name', 'text_domain' ),
            'singular_name'       => _x( 'Teachers', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'           => __( 'Teachers', 'text_domain' ),
            'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
            'all_items'           => __( 'All Items', 'text_domain' ),
            'view_item'           => __( 'View Item', 'text_domain' ),
            'add_new_item'        => __( 'Add New Item', 'text_domain' ),
            'add_new'             => __( 'Add New', 'text_domain' ),
            'edit_item'           => __( 'Edit Item', 'text_domain' ),
            'update_item'         => __( 'Update Item', 'text_domain' ),
            'search_items'        => __( 'Search Item', 'text_domain' ),
            'not_found'           => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
        );
        $rewrite = array(
            'slug'                => 'teachers',
            'with_front'          => true,
            'pages'               => true,
            'feeds'               => true,
        );
        $args = array(
            'label'               => __( 'Teachers', 'text_domain' ),
            'description'         => __( 'Teachers Post Type ', 'text_domain' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'thumbnail', 'page-attributes', 'excerpt', 'editor'),
            'taxonomies'          => array( 'category', 'post_tag' ),
            'hierarchical'        => true,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 10,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => true,
            'publicly_queryable'  => true,
            'rewrite'             => $rewrite,
            'capability_type'     => 'post',
        );
        register_post_type( 'teachers', $args );

    }

// Hook into the 'init' action
    add_action( 'init', 'teachers_post_type', 0 );

}

if ( ! function_exists('student_post_type') ) {

// Register Custom Post Type
    function student_post_type() {

        $labels = array(
            'name'                => _x( 'Students', 'Post Type General Name', 'text_domain' ),
            'singular_name'       => _x( 'Students', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'           => __( 'Students', 'text_domain' ),
            'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
            'all_items'           => __( 'All Items', 'text_domain' ),
            'view_item'           => __( 'View Item', 'text_domain' ),
            'add_new_item'        => __( 'Add New Item', 'text_domain' ),
            'add_new'             => __( 'Add New', 'text_domain' ),
            'edit_item'           => __( 'Edit Item', 'text_domain' ),
            'update_item'         => __( 'Update Item', 'text_domain' ),
            'search_items'        => __( 'Search Item', 'text_domain' ),
            'not_found'           => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
        );
        $rewrite = array(
            'slug'                => 'student',
            'with_front'          => true,
            'pages'               => true,
            'feeds'               => true,
        );
        $args = array(
            'label'               => __( 'Students', 'text_domain' ),
            'description'         => __( 'Students Post Type ', 'text_domain' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'thumbnail', 'page-attributes', 'excerpt', 'editor'),
            'taxonomies'          => array( 'category', 'post_tag' ),
            'hierarchical'        => true,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 10,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => true,
            'publicly_queryable'  => true,
            'rewrite'             => $rewrite,
            'capability_type'     => 'post',
        );
        register_post_type( 'student', $args );

    }

// Hook into the 'init' action
    add_action( 'init', 'student_post_type', 0 );

}