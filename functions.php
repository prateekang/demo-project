<?php function add_demo_project() {
    wp_enqueue_style('theme-css',get_directory_template_uri() .'/css/main.css',time(),array());
}
add_action('wp_enequeue_scripts','add_demo_project');
?>