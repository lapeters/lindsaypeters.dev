<?php
/**
 * Template Name: Data
 *
 * @package Planum
 */

get_header(); ?>

	<div id="content" class="site-content clearfix" style="background: #<?php echo get_theme_mod( 'background_color','FFF' ); ?> url(<?php echo get_theme_mod( 'background_image' ); ?>);">

	<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail( 'planum-featured' );
	} ?>

	<?php if ( has_excerpt() ) : ?>
		<div class="topexcerpt"><?php the_excerpt(); ?></div>
	<?php endif; //has_excerpt() ?>	

		<div class="content-full" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="headline">
					<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

				<div class="entry-content">
					<div class="row">
				<?php $args = array( 'post_type' => 'data', 'posts_per_page' => 5 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();?>
  						<div class="col-md-3">
  							<a href="<?php the_permalink(); ?>">
  							<?php the_post_thumbnail('full', array('class' => ' img-responsive center-block')); ?> </a>
 							<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
 						</div><!-- .col-md-3 -->

				<?php endwhile; ?>
				<?php
					wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'planum' ),
					'after'  => '</div>',
					) );
					?>
				</div><!-- . row -->
				</div><!-- .entry-content -->
			</article><!-- #post-<?php the_ID(); ?> -->

			<?php endwhile; // end of the loop. ?>

		</div><!-- .content-full -->

	</div><!-- #content -->

<?php get_footer(); ?>