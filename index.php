<?php
get_header();
pageBanner(); ?>
<!-- Banner border -->
<div class="banner-border">&nbsp;</div>

<!-- Main content container -->
<div class="container">

  <!-- Featured resources section -->
  <section class="featured-resources">

    <!-- Featured resources header -->
    <div class="featured-resources__header center-items">
      <h2 class="header__2 header__2--blue">FEATURED RESOUCES</h2>
    </div><!-- .Featured resources header -->
    
    <!-- Resources container -->
    <div class="featured-resources__container">
          <?php
            $resources = new WP_Query(array(
              'posts_per_page' => 3
            ));

            if ($resources -> have_posts()){
              while ($resources -> have_posts()) {
                $resources -> the_post();
                get_template_part('template-parts/featured-resources');
              }
            } else {
              echo '<p class="header__subtitle">There are no featured resources at this time. Check back later.</p>';
            }
            
           wp_reset_postdata();
          ?>
        </div><!-- .Resources container -->
  </section><!-- .Featured resources section -->
</div><!-- .Main content container -->
<?php get_footer();?>