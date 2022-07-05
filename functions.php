<?php 
function add_files(){
    wp_enqueue_style('google-font','https://fonts.googleapis.com/css2?family=Libre+Caslon+Text&display=swap');
    wp_enqueue_style('main',get_stylesheet_uri());
    wp_enqueue_script('main-script',get_theme_file_uri().'/js/main.js',array(),'',true);
}
add_action('wp_enqueue_scripts','add_files');
function theme_setup(){
    //自分で関数名はつけれる
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','theme_setup');