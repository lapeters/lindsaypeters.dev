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
		<div class="row">
			<div class="col-md-6">
				<?php if ( has_post_thumbnail()) {
    				the_post_thumbnail('full', array('class' => 'img-thumbnail img-responsive center-block'));
				} 
				?>
				<p class="text-left">
				<?php echo types_render_field("company", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); ?>, <?php echo types_render_field("launchdate", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); ?>
				</p>
			</div>
			<div class="col-md-6">
				<p><?php the_content(); ?></p>
				<p class="text-center"><?php echo types_render_field("keywords", array("separator"=>", ","argument2"=>"value2","argument2"=>"value2")); ?></p>
				<p><a href="<?php echo types_render_field("live", array("target"=>"_blank","output"=>"raw","argument2"=>"value2")); ?>" class="btn btn-default" role="button">Live Site</a></button></p>
				
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