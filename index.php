
<?php
get_header();
?>

<div class="middle-container">
    <h1>Blog:</h1>
</div>
<?php 
while(have_posts()){
    the_post();
    $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
   
    ?>
<div class ="blog-item">
 <img src="<?php echo $imagepath[0] ?>">

<div class="content-item">
<h1><?php the_title();?>
</div> 
<div class="button-read">
    <a href="<?php the_permalink(); ?>"><input type="button" value="Read more"> </a>
<?php } ?>
<?php get_footer(); ?>