<?php

/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<footer id="site-footer" class="header-footer-group">
  <div class="inner-section">
    <div class="row1-footer-">
      <div class="col1-footer">
        <div class="col1-footer">
          <img src="assets/images/logo.png" height="80px" style="margin-bottom: 1.5rem;"><span class="footerbrand">&ensp;BINAR ILMU</span>
          <p>Bagi kami pendidikan bukan hanya sekedar memahamkan
            khasanah keilmuan yang diajarkan, melainkan proses
            panjang dalam upaya untuk menanamkan nilai-nilai akhlakul
            karimah pada setiap siswa. Kami meyakini bahwa adab lebih
            utama daripada ilmu. Binar Ilmu memberikan bimbingan yang
            berimbang antara kecerdasan spiritual, emosional dan juga
            intelegensi melalui guru-guru yang profesional serta dukungan
            fasilitas yang memadai.</p>

        </div>
      </div>
    </div>
    <div class="col2-footer">
      <div class="card" style="width: 40%;height: 300px;margin: auto;box-shadow: 0 5px 10px rgba(0,0,0,.5);">
        <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=pondok%20buahbatu%20mekarmanik%20cimenyan&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
      </div>
    </div>
    <div class="col3-footer">
        <h3>Kontak Kami</h3>
        <div class="social-icons">

        </div>
        <div class="social-media">
        <a href="https://web.facebook.com/binar.ilmu.7" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="https://www.instagram.com/sekolah_binarilmu_bandung/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="http://www.youtube.com" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
        </div>
    </div>
  </div>
  <div class="row2-footer">
    <div class="col4-footer">
      <p class="footer-copyright">&copy;
        <?php
        echo date_i18n(
          /* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
          _x('Y', 'copyright date format', 'sekolah')
        );
        ?>
        <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      </p><!-- .footer-copyright -->
    </div>
    <div class="col5-footer">
      <?php
      if (function_exists('the_privacy_policy_link')) {
        the_privacy_policy_link('<p class="privacy-policy">', '</p>');
      }
      ?>

      <p class="powered-by-wordpress">
        <a href="<?php echo esc_url(__('https://wordpress.org/', 'sekolah')); ?>">
          <?php _e('Powered by WordPress', 'sekolah'); ?>
        </a>
      </p><!-- .powered-by-wordpress -->
    </div>
    <div class="col6-footer">
      <a class="to-the-top" href="#site-header">
        <span class="to-the-top-long">
          <?php
          /* translators: %s: HTML character for up arrow. */
          printf(__('To the top %s', 'sekolah'), '<span class="arrow" aria-hidden="true">&uarr;</span>');
          ?>
        </span><!-- .to-the-top-long -->
        <span class="to-the-top-short">
          <?php
          /* translators: %s: HTML character for up arrow. */
          printf(__('Up %s', 'sekolah'), '<span class="arrow" aria-hidden="true">&uarr;</span>');
          ?>
        </span><!-- .to-the-top-short -->
      </a><!-- .to-the-top -->
    </div>
  </div>
  </div>


</footer><!-- #site-footer -->


<?php wp_footer(); ?>

</body>

</html>