<?php
  get_header();
  pageBanner();?>
  <!-- Banner border -->
  <div class="banner-border">&nbsp;</div>

  <!-- Main content container -->
  <div class="container">
    
    <!-- Blog content container -->
    <div class="generic-content">
      <?php the_content(); ?>
    </div><!-- .Blog content container -->
  </div><!-- .Main content container -->

<?php get_footer(); ?>