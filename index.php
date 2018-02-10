<?php get_header(); ?>

  <main>
    <div class="portfolio-grid">
      
      <?php 
        $category_id = get_cat_ID( 'portfolio' );
        $catquery = new WP_Query( "cat={$category_id}" ); 
      ?>
      <?php 
        if ( $catquery -> have_posts() ) : while ( $catquery -> have_posts() ) : $catquery -> the_post();

          get_template_part('content', get_post_format() );

        endwhile; endif;
      ?>
    </div>
  </main>

<?php get_footer(); ?>
    
