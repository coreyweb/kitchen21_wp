<?php
// image manipulation
require( get_template_directory() . '/inc/functions/vt_resize.php' );

// custom post thumbnail sizes
// add_theme_support( 'post-thumbnails' );
//
// add_filter( 'image_size_names_choose', 'my_custom_sizes' );
//
// function my_custom_sizes( $sizes ) {
//   return array_merge( $sizes, array(
//     'hero' => __('Hero Image'),
//   ) );
// }
//
// add_image_size( 'hero', 1100, 446, true );


// Remove width from inserted images
add_shortcode( 'wp_caption', 'fixed_img_caption_shortcode' );
add_shortcode( 'caption', 'fixed_img_caption_shortcode' );

function fixed_img_caption_shortcode($attr, $content = null) {
	 if ( ! isset( $attr['caption'] ) ) {
		 if ( preg_match( '#((?:<a [^>]+>s*)?<img [^>]+>(?:s*</a>)?)(.*)#is', $content, $matches ) ) {
		   $content = $matches[1];
		   $attr['caption'] = trim( $matches[2] );
		 }
	 }
	 $output = apply_filters( 'img_caption_shortcode', '', $attr, $content );
		 if ( $output != '' )
		   return $output;
	 extract( shortcode_atts(array(
	  'id'      => '',
	  'align'   => 'alignnone',
	  'width'   => '',
	  'caption' => ''
	 ), $attr));
	 if ( 1 > (int) $width || empty($caption) )
	  return $content;
	 if ( $id ) $id = 'id="' . esc_attr($id) . '" ';
	  return '<figure ' . $id . 'class="wp-caption ' . esc_attr($align) . '" >'
	 . do_shortcode( $content ) . '<figcaption class="wp-caption-text">' . $caption . '</figcaption></figure>';
}

// Add img-responsive to all images in entry-content
add_filter( 'image_send_to_editor', 'ech_html5_insert_image', 10, 9 );
function ech_html5_insert_image( $html, $id, $caption, $title, $align, $url, $size, $alt ) {
	preg_match( '@src="([^"]+)"@', $html, $match );
	$url           = empty( $url ) ? array_pop( $match ) : $url;
	$caption_class = ( $caption ) ? 'wp-caption' : '';
	$html5         = "<figure id='post-$id-media-$id' class='align$align $caption_class'>";
	$html5 .= "<img src='$url' alt='$title' class='wp-image-$id align$align img-responsive'>";
	if ( $caption ) {
		$html5 .= "<figcaption class='wp-caption-text'>$caption</figcaption>";
	}
	$html5 .= "</figure>";

	return $html5;
}