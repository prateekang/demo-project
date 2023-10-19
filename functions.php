<?php
add_action('wp_enqueue_scripts',function(){

wp_enqueue_style('bootstrap',"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css", false,null );
 wp_enqueue_style('theme-css',get_stylesheet_directory_uri() . '/css/main.css',array(),time() );
 
 wp_enqueue_script('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', array('jquery'), null, true );
});
?>