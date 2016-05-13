<?php
/**
 * @package Planum
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="headline">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
			<p class="text-center" style="color:#000 !important;">
			<hr>
				<?php echo types_render_field("company", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); ?>, <?php echo types_render_field("launchdate", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); ?>
			<hr>
			</p>
		<div class="row">
			<div class="col-md-6">
				<?php if ( has_post_thumbnail()) {
    				the_post_thumbnail('full', array('class' => ' img-responsive center-block'));
				} 
				?>
				<hr>
				<p class="text-center"><a href="<?php echo types_render_field("live", array("target"=>"_blank","output"=>"raw","argument2"=>"value2")); ?>" class="btn btn-default btn-lg" role="button">Live Site</a></button></p>
				<hr>


			</div>
			<div class="col-md-6">
				<p class="text-left"><?php the_content(); ?></p>
			
			</div>


		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'planum' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .row -->
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->