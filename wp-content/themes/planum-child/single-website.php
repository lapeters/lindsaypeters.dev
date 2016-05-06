<?php
/**
 * Template Name: Full Width
 *
 * @package Planum
 */

get_header(); ?>

	<header class="headline">

	<h1 class="entry-title"><?php the_title(); ?></h1>

	<?php if ( has_excerpt() ) : ?>
		<?php the_excerpt(); ?>
	<?php endif; //has_excerpt() ?>	

	</header><!-- .entry-header -->

	<div id="content" class="site-content clearfix" style="background: #<?php echo get_theme_mod( 'background_color','FFF' ); ?> url(<?php echo get_theme_mod( 'background_image' ); ?>);">



		<div class="content-full" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



			<div class="entry-content">
				<span><? echo types_render_field("company", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); ?></span>
				<span><? echo types_render_field("keyword", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); ?></span>
				<span><? echo types_render_field("launchdate", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); ?></span>
				<span><? echo types_render_field("palatte", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); ?></span>
				<span><? echo types_render_field("site", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); ?></span>
			<?php the_content(); ?>
			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'planum' ),
				'after'  => '</div>',
			) );
		?>
		</div><!-- .entry-content -->
		</article><!-- #post-<?php the_ID(); ?> -->

		<?php endwhile; // end of the loop. ?>

		</div><!-- .content-full -->

	</div><!-- #content -->

<?php get_footer(); ?>