<footer class="footer">
 
  <?php
  if ( !is_page('get-a-quote') ) { ?>
    <div class="footer__top">
        <p class="footer__cta">Get a lead testing quote today <a class="btn btn--white-outline" href="<?php echo site_url('/get-a-quote'); ?>">GET A QUOTE</a></p>
    </div>
    <?php }
  ?>



  <div class="footer__mid">

        <div class="footer__logo">
          <img class="footer__img" src="<?php echo esc_url(get_theme_file_uri('assets/img/leadtesting-center-admin-logo.png')); ?>" alt="<?php echo get_bloginfo( 'name' ); ?>">
        </div>

        <div class="footer__resources">
          <h4 class="footer__header">EXTERNAL <span>RESOURCES</span></h4>
          <ul class="footer__List">
            <li class="footer__item">
              <a class="footer__link" href="http://www.wahigroup.com/" target="_blank">WI Association Of Home Inspectors</a>
            </li>
            <li class="footer__item">
              <a class="footer__link" href="http://www.ashi.org/" target="_blank">American Society Of Home Inspectors</a>
            </li>
            <li class="footer__item">
              <a class="footer__link" href="http://www.jameelevans.com/" target="_blank">Custom Wordpress Theme by Jameel Evans</a>
            </li>
          </ul>
        </div>

        <div class="footer__contact">
          <h4 class="footer__header">GET <span>IN TOUCH</span></h4>
          <ul>
            <li class="footer__item">
              <i class="icon icon-phone"></i> &nbsp;&nbsp;<a class="footer__link" href="tel:414-403-7913">414-403-7913</a>
            </li>
            <li class="footer__item">
              <i class="icon icon-envelope"></i> &nbsp;&nbsp;<a class="footer__link" href="mailto:info@leadtesting.center">info@leadtesting.center</a>
            </li>
            <li class="footer__item">
              <i class="icon icon-facebook"></i> &nbsp;&nbsp;<a class="footer__link" href="https://www.facebook.com/244782A/">Our Facebook Page</a>
            </li>
          </ul>
        </div>
  </div>

  <div class="footer__copyright">
				<p>Copyright © <?php echo date('Y'); ?> Lead Testing Center</p>
  </div>

<a class="footer__back-top" title="Go back to the top of City Home Inspections to schedule an appointment" href="#top"><i class="icon icon-up"></i></a>
</footer>

<?php wp_footer(); ?>
</body>
</html>
