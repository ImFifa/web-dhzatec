<?php

// adding the CSS and JS files

function gt_setup(){
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:300,700|Open+Sans+Condensed:300,400,700&display=swap&subset=latin-ext');
    wp_enqueue_style( 'fontawesome', '//use.fontawesome.com/releases/v5.6.3/css/all.css');

    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
    wp_enqueue_script( 'modernizr', get_theme_file_uri('/js/modernizr-custom.js'), NULL, microtime(), true);
    wp_enqueue_script('main', get_theme_file_uri('/js/javascript.js'), NULL, microtime(), true);
}

add_action( 'wp_enqueue_scripts', 'gt_setup');

// adding Theme Support

function gt_init() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'html5',
        array('comment-list', 'comment-form', 'search-form')
    );
}

add_action( 'after_setup_theme', 'gt_init');

// add featured image support
function addFeaturedImage() {
    add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'addFeaturedImage' );

// renaming default post type
function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Novinky';
    $submenu['edit.php'][5][0] = 'Novinky';
    $submenu['edit.php'][10][0] = 'Vytvořit příspěvek';
    $submenu['edit.php'][16][0] = 'Štítky';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Novinky';
    $labels->singular_name = 'Novinky';
    $labels->add_new = 'Vytvořit příspěvek';
    $labels->add_new_item = 'Vytvořit příspěvek';
    $labels->edit_item = 'Upravit';
    $labels->new_item = 'Novinky';
    $labels->view_item = 'Zobrazit příspěvek';
    $labels->search_items = 'Hledat příspěvky';
    $labels->not_found = 'Příspěvek nenalezen';
    $labels->not_found_in_trash = 'Příspěvek nenalezen v koši';
    $labels->all_items = 'Všechny příspěvky';
    $labels->menu_name = 'Novinky';
    $labels->name_admin_bar = 'Novinky';
}

add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );
