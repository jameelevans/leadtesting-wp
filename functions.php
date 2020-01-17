<?php
/** 
 * Custom Functions
 *
 * ! What the custom functions do:
 * *    1. Enqueues all styles and scripts
 * *    2. Asynchronously load scripts for speed optimization
 * *    3. Link login logo to home page
 * *    4. Make css styles available to login screen
 * *    5. Replace WP logo with site title name on login screen
 * *    6. Custom logo theme support
 * *    7. Custom theme features
 * *    8. Display custom banner
 *      
 */

// * * --------| Functions in order |-------- *

//* 1. Enqueuing styles and scripts
  function theme_enqueue_scripts() {
  wp_enqueue_script( 'Bundled_js', get_template_directory_uri() . '/assets/js/scripts-bundled.js#asyncload', array(), '1.0.0', true );
  wp_enqueue_style('lead-testing-center_main_styles', get_stylesheet_uri());
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Rubik:300,400,400i,500,700');
  }
  add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );


//* 2. Asynchronously load scripts
  function async_scripts($url){
  if ( strpos( $url, '#asyncload') === false )
    return $url;
  else if ( is_admin() )
    return str_replace( '#asyncload', '', $url );
  else
    return str_replace( '#asyncload', '', $url )."' async='async";
  }
  add_filter( 'clean_url', 'async_scripts', 11, 1 ); 


//* 3 Links login logo to home page
function leadtesting_url() {
  return esc_url(site_url('/'));
}
add_filter('login_headerurl', 'leadtesting_url');


//* 4. Make css styles available to login screen
function leadtesting_login_css() {
  wp_enqueue_style('leadtesting_main_styles', get_stylesheet_uri());
}


//* 5. Replace WP logo with site title name on login screen
function leadtesting_login_title() {
  return get_bloginfo('name');
}
add_filter('login_headertitle', 'leadtesting_login_title');


//* 6. Custom logo theme support
function leadtesting_custom_logo_setup() {
    $defaults = array(
        'height'      => 43,
        'width'       => 160,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'City Home Inspections', 'Serving Southeast Wisconsin Since 1998' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'leadtesting_custom_logo_setup' );


//* 7. Custom theme features
function leadtesting_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('bannerLogo', 600, 143, true);
  add_image_size('pageBanner', 1500, 350, true);
  add_image_size('resourceImage', 1600, 1066, true);
}
add_action('after_setup_theme', 'leadtesting_features');


//* 8. Display custom banner
function pageBanner($args = NULL) {

  if (!$args['photo']) {
    if (get_the_post_thumbnail_url()) {
      $args['photo'] = get_the_post_thumbnail_url();
    } else {
      $args['photo'] = get_theme_file_uri('assets/img/banner-image-template.jpg');
    }
  }

  ?>
<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: linear-gradient(115deg, rgba(var(--color-secondary-rgb),.8) 0%, rgba(var(--color-secondary-rgb),.8) 100%), url(<?php echo $args['photo']; ?>);">
    <div class="banner__content">
      <h1 class="page-banner__headline">
      <?php
          if (is_home()) {
          echo single_post_title();
          }
          else if (is_404()) {
          echo '404 Error';
          } else {
          echo the_title();
          }
        ?>
      </h1>
      <?php
        if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb( '<p class="page-banner__breadcrumbs">','</p>' );
        }?>
    </div>

    <?php get_template_part('template-parts/share-button'); ?>
  </div>
</div>
<?php }