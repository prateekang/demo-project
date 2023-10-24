<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog project</title>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="container">
    <?php wp_nav_menu(array('theme-location'=>'primary-menu','menu_class'=>'prateek')); ?>
    
</div>
</header>