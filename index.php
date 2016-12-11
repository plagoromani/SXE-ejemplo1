
	<link rel="stylesheet" type="text/css" href="wp-content/themes/TEMAZO/style.css">
<div id= "cabecera">
<?php get_header(); 
wp_nav_menu();?>
</div>

<div id= "centro">
<?php get_sidebar(); ?>
<div id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h2><?php echo the_title() ?></h2>
<?php the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
</div>
</div>

<div id="abajo">
<?php get_footer(); ?>
</div>
