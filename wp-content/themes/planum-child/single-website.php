<?php
/**
 * @package Planum
 */

get_header(); ?>

	<div id="content" class="site-content clearfix" style="background: #<?php echo get_theme_mod( 'background_color','FFF' ); ?> url(<?php echo get_theme_mod( 'background_image' ); ?>);">

		<div class="content-full" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'website' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- .content-full -->

	</div><!-- #content -->

<?php get_footer(); ?>