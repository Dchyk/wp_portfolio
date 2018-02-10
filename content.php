<div class="portfolio-item">
  <?php 
    echo get_the_post_thumbnail($post_id, 'thumbnail', array('class' => 'portfolio-thumb'));

    // echo get_the_post_thumbnail_url($post_id);

    // global $wp_query;
    // $postid = $wp_query->post->ID;

    // Pull overlay color from 'overlay' meta if it is set; 
    // otherwise use the default 
    echo "<a href=\""
    .get_permalink($post_id).
    "\"><div class=\"portfolio-item-overlay\" style=\"background-color: "
    .get_post_meta($postid, 'overlay', true).
    "\">";

    

    echo "<h1 class=\"portfolio-item-overlay__title\">".get_the_title($postid)."</h1>";
    echo "</div></a>";

    wp_reset_query();
    
  ?>
</div>
