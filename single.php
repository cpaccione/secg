<?php get_header(); ?>

<div class="container blog">
	<div class="row">
		<div class="col-md-8">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
<?php get_template_part( 'content', 'post' ); ?>

<?php endwhile; else: ?>
	
	<p>There are no posts or pages here</p>
	
<?php endif; ?>
</div>
<div class="col-md-4">

			<?php if( dynamic_sidebar( 'blog_side' ) ): ?>

			<?php else: ?>

			<p>Please install a widget in the right side bar</p>

			<?php endif; ?>


</div>
	</div>
</div>

<?php get_footer(); ?>