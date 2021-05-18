<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description');?>">
    <title><?php bloginfo('name');?> | 
    <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>

    <?php wp_head(); ?>

  </head>
  <body>
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <?php
              wp_nav_menu( array(
                  'theme_location'    => 'primary',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'bs-example-navbar-collapse-1',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker(),
              ) );
          ?>
        </nav>
      </div>
    </div>
    <div class="container">
      <div class="blog-header">
      <?php if (is_search()) : ?>
        <h1 class="blog-title">Search results for '<?php the_search_query(); ?>'</h1>
        <p class="lead blog-description"><?php bloginfo('description'); ?></p>
      <?php else : ?>
        <h1 class="blog-title"><?php bloginfo('name'); ?></h1>
        <p class="lead blog-description"><?php bloginfo('description'); ?></p>
      <?php endif; ?>
      </div>
