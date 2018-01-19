<?php get_header(); ?>
  <main>
    <?php 
      echo "<h1 class=\"page-header\">".get_the_title($post)."</h1>";
      while (have_posts() ) : the_post();
        echo "<div class=\"page-content\">".get_the_content($post)."</div>";
      endwhile;
    ?> 
  </main>
<?php get_footer(); ?>