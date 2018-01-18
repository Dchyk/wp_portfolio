<?php 
  add_theme_support( 'post-thumbnails' );

  // Remove thumbnail width/height in returned HTML
  add_filter( 'post_thumbnail_html', 'remove_thumbnail_width_height', 10, 5 );
 
  function remove_thumbnail_width_height( $html, $post_id, $post_thumbnail_id, $size, $attr ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
  }
?>