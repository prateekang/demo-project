<?php get_header(); ?>
<div class="h1">
<h1><?php the_title(); ?>
</div>
<?php $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large'); ?>
<div class="singlepage-content">
<img src ="<?php echo $imagepath[0]; ?>">
<?php the_content(); ?>
</div>

<?php get_footer(); ?>