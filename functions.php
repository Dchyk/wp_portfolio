<?php
  // Add support for featured images
  add_theme_support( 'post-thumbnails' );

  // Remove thumbnail width/height in returned HTML
  add_filter( 'post_thumbnail_html', 'remove_thumbnail_width_height', 10, 5 );
 
  function remove_thumbnail_width_height( $html, $post_id, $post_thumbnail_id, $size, $attr ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
  }

  // Register custom footer social icons widget
  function wpse121723_register_sidebars() {
    register_sidebar( array(
        'name' => 'Social Icons',
        'id' => 'footer_social_icons',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ) );
  }
  add_action( 'widgets_init', 'wpse121723_register_sidebars' );
?>