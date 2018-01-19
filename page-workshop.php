<?php get_header(); ?>
  <main>
    <?php 
      echo "<h1 class=\"page-header\">".get_the_title($post)."</h1>";
    ?>
    <div class="portfolio-grid">
    <?php 
        // Query to retrieve the Workshop type posts
        $posts = new WP_Query(array('post_type' => 'post'));
        // Then loop as usual 
        if ( $posts -> have_posts() ) : while ( $posts -> have_posts() ) : $posts -> the_post();
          get_template_part('content', get_post_format() );
        endwhile; endif;
    ?>
    </div>
  </main>
<?php get_footer(); ?>