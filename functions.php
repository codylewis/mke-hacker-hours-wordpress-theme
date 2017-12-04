<?php

add_theme_support('post-thumbnails');

function add_theme_scripts()
{
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css');
    wp_enqueue_style('font', 'https://fonts.googleapis.com/css?family=Lato');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('style', get_stylesheet_uri(), ['bootstrap', 'font']);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

function my_login_stylesheet()
{
    wp_enqueue_style('custom-login', get_stylesheet_directory_uri() . '/style-login.css');
}

add_action('login_enqueue_scripts', 'my_login_stylesheet');

function remove_admin_login_header()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('get_header', 'remove_admin_login_header');
