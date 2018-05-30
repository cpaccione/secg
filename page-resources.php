<?php
/*
Template Name: Resources Template - Full-width
*/
?>

<?php get_header(); ?>

<div class="container main">
	<div class="row">
			<h1 class="text-center top">Resources</h1>
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