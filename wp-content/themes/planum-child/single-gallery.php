<?php
/**
 * @package Planum
 */

get_header(); ?>

	<header class="headline">

	<h1 class="entry-title"><?php the_title(); ?></h1>

	<?php if ( has_excerpt() ) : ?>
		<?php the_excerpt(); ?>
	<?php endif; //has_excerpt() ?>	

	</header><!-- .entry-header -->

	<div id="content" class="site-content clearfix" style="background: #<?php echo esc_attr( get_theme_mod( 'background_color','FFF' ) ); ?> url(<?php echo esc_url( get_theme_mod( 'background_image' ) ); ?>);">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="content-right" role="main">
					
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="entry-content">
							
					<p class="text-center"><span><?php echo types_render_field("location", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2"));?>,</span>
					<span><em><?php echo types_render_field("date", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); ?>
					</em></p></span>
					
							
							<?php the_content(); ?>
							<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . __( 'Pages:', 'planum' ),
								'after'  => '</div>',
								) );
								?>

								<span><p class="text-left">Shot with:<em> <?php echo types_render_field("equipment", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); ?></em></p>
					</span>
							</div><!-- .entry-content -->
						</article><!-- #post-## -->
						<?php planum_content_nav( 'nav-below' ); ?>
						<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() )
							comments_template();
						?>
					</div><!-- .content-right -->

			<?php endwhile; // end of the loop. ?>

			<?php get_sidebar(); ?>

	</div><!-- #content -->


<?php get_footer(); ?>