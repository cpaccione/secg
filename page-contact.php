<?php
/*
Template Name: Contact - Right Sidebar
*/
?>

<?php get_header(); ?>
<div class="top">
	<h1 class="text-center">Contact</h1>
	<hr class="style-two">
</div>

<div class="container blog">


	<div class="row">
		<div class="col-lg-12">

	<div class="col-md-8">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php the_content(); ?>
	
<?php endwhile; else: ?>
	
	<p>There are no posts or pages here</p>
	
<?php endif; ?>
	</div>

    <div class="col-md-4">
    	
			<?php if( dynamic_sidebar( 'contact_side' ) ): ?>

			<?php else: ?>

			<p>Please install a widget in the Contact Sidebar</p>

		<?php endif; ?>

    </div>

</div>

</div>
<hr class="style-two">
</div>



<?php get_footer(); ?>