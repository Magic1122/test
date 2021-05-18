<?php get_header() ?>
      <div class="row">

        <div class="col-sm-8 blog-main">
          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            <?php get_template_part('includes/content', get_post_format()); ?>
          <?php endwhile; ?>
          <?php else : ?>
            <p><?php __('No Posts Found'); ?></p>
          <?php endif; ?>


        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <?php get_template_part('includes/section', 'sidebar'); ?>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

<?php get_footer(); ?>