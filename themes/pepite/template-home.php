 <?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
<div id='container'>
	<div id='slider'>
		<?php echo do_shortcode("[metaslider id=80]"); ?>
	</div>
	<?php if(function_exists( 'dynamic_sidebar' ) && dynamic_sidebar('widg_center_up'))?>
	<div id='content'>
	<?php
	while ( have_posts() ) : the_post();
	    the_content();
	endwhile;
	?>
	</div>
</div>
<?php get_footer('home'); ?>
