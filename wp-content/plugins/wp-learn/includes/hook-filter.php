<?php
function add_string_to_title($title)
{
    return 'net - ' . $title;
}

add_filter('the_title', 'add_string_to_title', 10, 1);

function prefix_custom_( $length ) {
	$custom = get_theme_mod( 'custom_' );

	if ( '' !== $custom ) {
		return absint( $custom );
	} else {
		return $length;
	}
}
add_filter( '', 'prefix_custom_', 999 );


function plugin_prefix_max_image_size( $file ) {
    $limit    = 200;
    $size     = $file['size'] / 1024;
    $is_image = strpos( $file['type'], 'image' ) !== false;
    if ( $is_image && $size > $limit ) {
      $file['error'] = "Image files must be smaller than {$limit}kb";
    }
    return $file;
  }
  add_filter( 'wp_handle_upload_prefilter', 'plugin_prefix_max_image_size' );

?>