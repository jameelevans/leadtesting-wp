<?php

get_header();

  while(have_posts()) {
    the_post();
    pageBanner();
     ?>
     <!-- Banner border -->
    <div class="banner-border">&nbsp;</div>



    <div class="container container--narrow page-section">
      <div class="generic-content">
        <?php the_content(); ?>
      </div>
    </div>

    <?php }

  get_footer();

 ?>