<?php get_header(); ?>

  <main>
    <div class="portfolio-grid">
      <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post();

          get_template_part('content', get_post_format() );

        endwhile; endif;
      ?>
    </div>
  </main>

<?php get_footer(); ?>
    
