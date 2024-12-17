<?php
/*
Template Name: Publications
Template Post Type: post
*/
get_header();
?>
<div id="treads-single-post">
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
		<?php get_template_part("partials/post/publications-post-header"); ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="post-content">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; endif; ?>
</div>
<?php get_footer();?>
