<?php
/**
 * Header for the Home page of Lead Testing theme
 *
 *
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="google-site-verification" content="itLClUYT7mc-qQ-z8NaX_KWF7iSLH-OJ2nkH9SBB3M0" />
		<link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header id="top" class="header">
      <!-- Header top -->
      <div class="header__top">
        <!-- Heading contact link -->
        <a class="header__contact" href="tel:4144037913">
            <p><i class="icon icon-phone-alt"></i>&nbsp;&nbsp;(414) 403-7913</p>
        </a><!-- .Heading contact link -->

        <!-- Heading contact link -->
        <a class="header__contact" href="mailto:info@leadtesting.center">
            <p><i class="icon icon-envelope"></i>&nbsp;&nbsp;info@leadtesting.center</p> 
        </a><!-- .Heading contact link -->
      </div><!-- .Header top -->

      <!-- Header menu -->
      <div class="header__menu">
        <!-- Menu toggle icon -->
        <div class="header__icon">
            <div class="header__icon--middle">&nbsp;</div>
        </div> <!-- .Menu toggle icon -->


        <nav class="header__content">
          <!-- Logo and Description-->
          <a class="header__heading" href="<?php echo esc_url( home_url('/')); ?>">
            <div class="header__logo">
                <?php
                  $custom_logo_id = get_theme_mod( 'custom_logo' );
                  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                  if ( has_custom_logo() ) {
                          echo '<img src="' . esc_url( $logo[0] ) . '"' . 'alt="' . get_bloginfo( 'name' ) . '">';
                          echo '<span class="header__title">' . get_bloginfo( 'name' ) . '</span>';
                  } else {
                          echo '';
                  }
                ?>
            </div>
            <h1 class="header__info">
              <span class="header__name"><?php echo get_bloginfo('name'); ?>
                  <span class="header__description"><?php echo get_bloginfo('description'); ?></span>
              </span>

                </h1>
          </a> <!-- .Logo and Description-->

          <!-- Main navigation -->
          <ul class="nav">
            <?php if (!is_front_page()){ ?>
            <li class="nav__item" >
              <a  class="nav__link" href="<?php echo esc_url(site_url('/'));?>">Start Here</a>
            </li>
            <?php } ?>
            <li class="nav__item <?php if (is_page('whats-included')) echo 'current-menu-item' ?>">
              <a  class="nav__link"  href="<?php if(is_front_page()) {echo '#whats-lead';}else{echo esc_url(site_url('/whats-lead'));} ?>">What's Lead?</a>
            </li>
            <li class="nav__item <?php if (is_page('services')) echo 'current-menu-item' ?>">
              <a  class="nav__link"  href="<?php if(is_front_page()) {echo '#services';}else{echo esc_url(site_url('/services'));} ?>">Services</a>
            </li>
            <li class="nav__item <?php if (get_post_type() == 'post') echo 'current-menu-item' ?>">
              <a  class="nav__link"  href="<?php if(is_front_page()) {echo '#resources';}else{echo esc_url(site_url('/resources'));} ?>">Resources</a>
            </li>

            
            <div class="header__cta">
              <a class="btn btn--green<?php if (is_page('get-a-quote')) echo ' to-form';?>" href="<?php if(is_page('get-a-quote')) {echo '#form';}else{echo esc_url(site_url('/get-a-quote'));} ?>">GET A QUOTE</a>
            </div>
          </ul> <!--.Main navigation-->
        </nav>

      </div> <!-- .Header menu -->
    </header>
