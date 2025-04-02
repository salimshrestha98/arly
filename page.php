<?php get_header(); ?>

<h1 style="text-align: center;color: white; margin: 20px auto;"><?php the_title(); ?></h1>
<?php the_post_thumbnail(); ?>
<div style="color: white"><?php the_content(); ?></div>

<?php get_footer(); ?>
