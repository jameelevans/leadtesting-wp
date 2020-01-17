<?php
get_header();
pageBanner(); ?>
<!-- Banner border -->
<div class="banner-border">&nbsp;</div>

<!-- Main content container -->
<div class="container">

<div class="error">
    <h2 class="header__2 header__2--blue">Oops! You took a wrong turn</h2>
    <a href="<?php echo esc_url( home_url('/')); ?>" class="btn btn--blue-outline">Go back home</a>
</div>
</div><!-- .Main content container -->
<?php get_footer();?>