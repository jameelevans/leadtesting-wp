<?php
  get_header();
  pageBanner(); ?>
     <!-- Banner border -->
    <div class="banner-border">&nbsp;</div>


    
    <div id="form" class="form">
      <div class="form__details">
        <div class="form__header">
          <h2 class="header__2 header__2--blue">WANT A QUOTE?</h2>
          <p class="header__subtitle">Fill out the form, email us or give us a call. We will promptly contact you in return to set up a quote. Your information will only be used to contact you and help make a quote. </p>
        </div>

        <div class="form__availability">
          <h4 class="header__3 header__3--blue">Availability</h4>
          <p >We are available during the weekdays from 8am to 5:30pm</p>
        </div>

        <div class="form__email">
          <h4 class="header__3 header__3--blue">Email us</h4>
          <p>Email us now at <a class="inline-link" href="mailto:info@leadtesting.center">info@leadtesting.center</a> </p>
        </div>

        <div class="form__call">
          <h4 class="header__3 header__3--blue">Call us</h4>
          <p>Call us now at (414) 403-7913</p>
        </div>

        
      </div>

      <div class="form__content">
        <?php the_content(); ?>
      </div>
    </div>

<?php get_footer(); ?>