<?php
/**
 * Template Name: Full Width
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
				<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				</header><!-- .entry-header -->

			<div class="entry-content">
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

	<script>
        $("[rel='tooltip']").tooltip();    
 
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
</script>

<?php get_footer(); ?>
