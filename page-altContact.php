<?php
/*
Template Name: Contact Page - Full-width
*/
?>

<?php get_header(); ?>

<div class="container main">
	<div class="row">
			<h1 class="text-center top">Contact Us</h1>
						<hr class="style-two">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php the_content(); ?>
	
<?php endwhile; else: ?>
	
	<p>There are no posts or pages here</p>
	
<?php endif; ?>

	<hr class="style-two">
	</div>
</div>

<?php get_footer(); ?>