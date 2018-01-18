<div class="portfolio-item">
  <?php 
    echo get_the_post_thumbnail($post_id, 'thumbnail', array('class' => 'portfolio-thumb'));
    echo "<div class=\"portfolio-item-overlay\">";
    echo "<h1 class=\"portfolio-item-overlay__title\">".get_the_title()."</h1>";
    echo "</div>";
  ?>
</div>
