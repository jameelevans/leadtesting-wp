<?php get_header(); ?>
<main class="main front-page">

  <article>
    <!-- Banner -->
    <section id="start-here" class="banner">
      <div class="banner__content">
        <h2 class="banner__title"><?php the_field('title'); ?></h2>
        <p class="banner__subtitle"><?php the_field('subtitle'); ?></p>
        <a href="<?php echo site_url('/services'); ?>" class="btn btn--white-outline">Learn More</a>
      </div>
    </section><!-- .Banner -->
    <!-- Banner border -->
    <div class="banner-border">&nbsp;</div>

    <!-- Lead section -->
    <section id="whats-lead" class="lead">
      <!-- Lead heading -->
      <div class="lead__heading">
        <h2 class="header__2 header__2--blue">WHAT IS LEAD ?</h2>
        <p class="header__subtitle">According to the <a class="inline-link" href="https://www.epa.gov/lead/learn-about-lead"
            target="_blank">EPA</a> lead is an naturally occurring element found in all parts of our environment – the
          air, the soil, the water, and even our homes. While it has some beneficial uses, lead can be toxic causing
          health issues like the following...</p>
      </div><!-- .Lead heading -->

      <!-- Lead content -->
      <div class="lead__content">

        <!-- Lead issue -->
        <div class="lead__issue">
          <a class="lead__circle" href="<?php echo esc_url(site_url('/whats-lead#exposed-adults')); ?>">
            <span class="icon icon-user-friends"></span>
            <span class="lead__line"></span>
            <span class="lead__dot"></span>
          </a>
          <h3 class="header__3 header__3--blue">Exposed adults may have</h3>
          <p class="lead__details">Cardiovascular effects, decreased kidney function, reproductive problems and more.</p>
          <a class="btn btn--blue-outline" href="<?php echo esc_url(site_url('/whats-lead#exposed-adults')); ?>">Learn More</a>
        </div><!-- .Lead issue -->


        <!-- Lead issue -->
        <div class="lead__issue">
          <a class="lead__circle" href="<?php echo esc_url(site_url('/whats-lead#exposed-women')); ?>">
            <span class="icon icon-female"></span>
            <span class="lead__line"></span>
            <span class="lead__dot"></span>
          </a>
          <h3 class="header__3 header__3--blue">Exposed pregnant women</h3>

          <p class="lead__details">May have a premature birth, hurt their baby’s brain and/ or kidney’s, nervous system and put the mother at risk for
            miscarriage</p>
          <a class="btn btn--blue-outline" href="<?php echo esc_url(site_url('/whats-lead#exposed-women')); ?>">Learn More</a>
        </div><!-- .Lead issue -->

        <!-- Lead issue -->
        <div class="lead__issue">
          <a class="lead__circle" href="<?php echo esc_url(site_url('/whats-lead#exposed-children')); ?>">
            <span class="icon icon-baby"></span>
            <span class="lead__line"></span>
            <span class="lead__dot"></span>
          </a>
          <h3 class="header__3 header__3--blue">Exposed children may have</h3>
          <p class="lead__details">Learning problems, hyperactivity, slowed growth, hearing problems and anemia</p>
          <a class="btn btn--blue-outline" href="<?php echo esc_url(site_url('/whats-lead#exposed-children')); ?>">Learn More</a>
        </div><!-- .Lead issue -->
      </div><!-- .Lead content -->
    </section><!-- .Lead section -->


<!-- Services -->
    <section id="services" class="services">
      <div class="services__heading">
        <h2 class="header__2 header__2--white">OUR SERVICES</h2>
        <p class="header__subtitle header__subtitle--white">Click on one of our services below to learn more</p>
      </div>

      <div class="services__wrapper">
        

        <a href="<?php echo esc_url(site_url('/services#lead-paint-test')); ?>" class="service service__odd">
          <div class="service__circle">
            <span class="icon icon-paint-roller"></span>
            <span class="service__line"></span>
            <span class="service__dot"></span>
          </div>

          <div class="service__details">
            <h3 class="service__heading">Lead Paint Testing</h3>
            <p class="service__content">We analyze all paint samples for lead content. There should be no chipping, cracking or peeling of painted areas.</p>
          </div>
        </a>

        <a href="<?php echo esc_url(site_url('/services#lead-water-test')); ?>" class="service service__even">
          <div class="service__circle">
            <span class="icon icon-water"></span>
            <span class="service__line"></span>
            <span class="service__dot"></span>
          </div>

          <div class="service__details">
            <h3 class="service__heading">Lead Water Testing</h3>
            <p class="service__content">We will pull water samples and have them analyzed for their lead content.</p>
          </div>
        </a>

        <a  href="<?php echo esc_url(site_url('/services#lead-dust-test')); ?>" class="service service__odd">
          <div class="service__circle">
            <span class="icon icon-wind"></span>
            <span class="service__line"></span>
            <span class="service__dot"></span>
          </div>

          <div class="service__details">
            <h3 class="service__heading">Lead Dust Wipe Testing</h3>
            <p class="service__content">Dust wipe samples will be taken on window sills, wells and floors and tested for lead content.</p>
          </div>
        </a>

        <a href="<?php echo esc_url(site_url('/services#residential-test')); ?>" class="service service__even">
          <div class="service__circle">
            <span class="icon icon-home-alt"></span>
            <span class="service__line"></span>
            <span class="service__dot"></span>
          </div>

          <div class="service__details">
            <h3 class="service__heading">Residential Testing</h3>
            <p class="service__content">All tests above are available for residential homes</p>
          </div>
        </a>

        <a href="<?php echo esc_url(site_url('/services#commercial-test')); ?>" class="service service__odd">
          <div class="service__circle">
            <span class="icon icon-hotel"></span>
            <span class="service__line"></span>
            <span class="service__dot"></span>
          </div>

          <div class="service__details">
            <h3 class="service__heading">Commercial Testing</h3>
            <p class="service__content">All tests above are available for commercial buildings</p>
          </div>
        </a>

    </section>
    
    <section id="resources" class="featured-resources">

        <div class="featured-resources__header">
          <h2 class="header__2 header__2--blue">FEATURED RESOUCES</h2>
        </div>

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
        </div>
            <?php
            if ($resources -> have_posts()){ ?>
              <a href="<?php echo esc_url(site_url('/resources')); ?>" class="btn btn--blue-outline">View All Resources</a>
            <?php } ?>
    </section>
  </article>
</main>
<?php get_footer(); ?>