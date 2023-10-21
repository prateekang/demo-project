<?php
add_action('wp_enqueue_scripts',function(){

wp_enqueue_style('bootstrap',"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css", false,null );
 wp_enqueue_style('theme-css',get_stylesheet_directory_uri() . '/css/main.css',array(),time() );
 
 wp_enqueue_script('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', array('jquery'), null, true );
});
 function setup_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo',[
        'header-text' => ['site-title','site-description'],
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true
    ]);
    add_theme_support('custom-background',[
        'default-color' =>'#fff',
        'default-repeat' => 'no-repeat',
    ]);
    add_theme_support('post-thumbnails');
    add_theme_support('align-wide');
    add_theme_support('automatic-feed-link');
    add_theme_support('html5',[
        'comment-form',
        'comment-list',
        'search-form',
        'gallery',
        'caption',
    ]);
    
}
 add_action('after_setup_theme','setup_support');
 ?>