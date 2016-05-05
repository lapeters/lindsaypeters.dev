<?php
/**
 * Theme Contextual Help
 * @package Planum
 */
add_filter( 'contextual_help', 'planum_admin_contextual_help', 10 );

function planum_admin_contextual_help() {

	$screen = get_current_screen();

if ( $screen->id == 'post' ) {

	$screen->add_help_tab( array(
		'id'      => 'planum-post-fimg',
		'title'   => __( 'Featured image', 'planum' ),
		'content' => '<p><strong>' . __( 'Use Featured image', 'planum' ) . '</strong></p><p>' . __( 'Upload the image that will be displayed posts tiles and header background image on single post. Better to use image of height 900 pixels and more.', 'planum' ) . '</p>',
  ) );
}

if ( $screen->id == 'page' ) {

  $screen->add_help_tab( array(
      'id' => 'planum_page_tab',
      'title' => __('Feature', 'planum'),
	'content' => __('<h2>Features</h2><p>Featured Image is used as background image of the title page. For pages actively Excerpt field. The text that is entered in the Excerpt will be displayed under the page title.</p><p>For Featured Image upload the large image width: 1200 pixels and more. If you do not upload Feautered Image, as the background of the title page image Header Image.</p>', 'planum' ),
  ) );

	$screen->add_help_tab( array(
		'id'      => 'planum-page-templates',
		'title'   => __( 'Templates', 'planum' ),
		'content' => __('<h2>Page templates</h2><p>You can choose a page template in Page Attributes using dropdown menu Template.</p><p>The theme offers several templates:</p><ol><li><strong>Full Width</strong>. Page without sidebars full width.</li><li><strong>Child Grid</strong>. Page displaying its content and header background featured image and below the grid featured image and titles child pages in two columns.</li><li><strong>Blog Tiles</strong>. The template displays blog posts as grid square tile.</li></ol>', 'planum' ),
	) );

}

if ( $screen->id == 'appearance_page_custom-header' ) {

	$screen->add_help_tab( array(
		'id'      => 'planum-header',
		'title'   => __( 'Feature', 'planum' ),
		'content' => __('<h2>Header Image</h2><p>Header Image is a background image section of Home Tagline. If you Remove Image, the background of Home Tagline will be the fill color. The background color of Home Tagline is configured Customizer. New background image Home Tagline can also be uploaded using Customizer.</p><p>If you upload multiple images, you can display different background images in random order.</p>', 'planum' ),
	) );
}

if ( $screen->id == 'appearance_page_custom-background' ) {

	$screen->add_help_tab( array(
		'id'      => 'planum-background',
		'title'   => __( 'Feature', 'planum' ),
		'content' => __('<h2>Background</h2><p>You can customize your background for the main content.</p><p>You can specify the fill color for the background or upload a background image. This can be done by Customizer in the live preview.</p>', 'planum' ),
	) );
}

if ( $screen->id == 'nav-menus' ) {

	$screen->add_help_tab( array(
		'id'      => 'planum-top-menus',
		'title'   => __( 'Top Menu', 'planum' ),
		'content' => __('<h2>Top Menu</h2><p>The theme has an additional top bar, which shows/hides the Plus button. The top panel has a Theme locations for Top menu.</p><p>If you create a menu item using Links tab (Edit Menus) and links will be http://tel: OR http://mailto: OR https://goo.gl (short link google map) it will be displayed icons Font Awesome.</p><p>Example:<br />tab <strong>Links</strong><br /><em>URL</em> http://tel+74956627390<br /><em>Navigation Label</em> +7 495 662-73-90</p>', 'planum' ),
	) );
	$screen->add_help_tab( array(
		'id'      => 'planum-social-menus',
		'title'   => __( 'Social Menu', 'planum' ),
		'content' => __('<h2>Social Media icons Menu</h2><p>Menu icons social media is displayed in the footer. Built all popular icons of social media, and including Feedburner.</p><p>To create a menu item, use the tab Links (Edit Menus).</p><p>Example:<br />tab <strong>Links</strong><br /><em>URL</em> http://twitter.com/your<br /><em>Navigation Label</em> Twitter</p>', 'planum' ),
	) );
}

/**
*else
*/
      return;
}
?>