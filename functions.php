<?php function add_demo_project() {
    wp_enqueue_style('theme-css',get_directory_template_uri() . "style.css",time(),array());
wp_enqueue_style('stylesheet', get_stylesheet_uri() , ['theme-css']);
}
add_action('wp_enequeue_scripts','add_demo_project');
?>