<!doctype html>
<html lang="en-US">
  <div id="container">
    <head>
      <title><?php echo get_bloginfo('name'); ?></title>
      <meta description="<?php echo get_bloginfo('description'); ?>" />
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
      <style>
        @import url('https://fonts.googleapis.com/css?family=Permanent+Marker');
      </style> 
      <?php wp_head() ?>
    </head>

    <body>

      <div class="wrapper"><!-- opens wrapper div -->

        <!-- header -->
        <header>
          <div class="header__logo">
            <h1>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" target="_self">
                <?php echo get_bloginfo('name'); ?>
              </a>
            </h1>
          </div>
          <div class="header__nav-menu">
            <nav>
              <ul>
                <?php
                  wp_list_pages('&title_li=');
                ?>
              </ul>
            </nav>
          </div>
        </header>