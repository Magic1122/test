<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description');?>">
    <title><?php bloginfo('name');?> | 
    <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>

    <?php wp_head(); ?>

    <style>
      .showcase {
        background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url') . '/img/showcase.jpg'); ?>) no-repeat center center;
      }

    </style>

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

<section class="showcase">
      <div class="container">
        <h1><?php echo get_theme_mod('showcase_heading', 'Mount Everest Travel Blog Wordpress Theme'); ?></h1>
        <p><?php echo get_theme_mod('showcase_text', 'Walk on keyboard hunt by meowing loudly at 5am next to human slave food dispenser chase red laser dot so mrow miaow then turn around and show you my bum pose purrfectly to show my beauty'); ?></p>
        <a href="<?php echo get_theme_mod('btn_url', 'blog');?>" class="btn btn-primary btn-lg btn-showcase"><?php echo get_theme_mod('btn_text', 'Read More');?></a>
      </div>
    </section>

    <section class="boxes">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
              <?php if(is_active_sidebar('box1')) : ?>
                    <?php dynamic_sidebar('box1'); ?>
              <?php endif; ?>  
          </div>

          <div class="col-md-4">
            <?php if(is_active_sidebar('box2')) : ?>
                    <?php dynamic_sidebar('box2'); ?>
              <?php endif; ?>
            </div>

          <div class="col-md-4">
            <?php if(is_active_sidebar('box3')) : ?>
                    <?php dynamic_sidebar('box3'); ?>
              <?php endif; ?>
            </div>
          </div>
      </div>
    </section>


    <footer class="blog-footer">
      <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
      <p>
        <a href="#" class="blog-footer-link">Back to top</a>
      </p>
    </footer>
    <?php wp_footer(); ?>

  </body>
</html>
