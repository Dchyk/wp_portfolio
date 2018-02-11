<div class="portfolio-item">
  <?php 
    echo get_the_post_thumbnail($post_id, 'thumbnail', array('class' => 'portfolio-thumb'));

    // Pull overlay color from 'overlay' meta if it is set for this post_id; 
    // otherwise use the default overlay color
    echo "<a href=\""
    .get_permalink($post_id).
    "\"><div class=\"portfolio-item-overlay\" style=\"background-color: "
    .get_post_meta(get_the_id(), 'overlay', true).
    "\">";

    echo "<h1 class=\"portfolio-item-overlay__title\">".get_the_title($post_id)."</h1>";
    echo "</div></a>";
  ?>
</div>
