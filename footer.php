<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simple
 */

?>
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            ADS
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/sitemap">Sitemap</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>
    <div class="hero-waves bg-white">
      <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave">
        <defs></defs>
        <path id="wave2" d="M 0 43.96980426310817 C 250 7.522836584575147 250 7.522836584575147 500 25.746320423841663 C 750 43.96980426310817 750 43.96980426310817 1000 20.627603852683905 C 1250 -2.7145965577403706 1250 -2.7145965577403706 1500 20.84164545667272 L 1500 8619.484375 L 0 8619.484375 Z" fill="rgba(0, 123, 255, .1)"></path>
        <path id="wave2" d="M 0 36.74434048324267 C 250 6.726494054643833 250 6.726494054643833 500 21.735417268943248 C 750 36.74434048324267 750 36.74434048324267 1000 23.518867186138596 C 1250 10.293393889034531 1250 10.293393889034531 1500 20.203734068009787 L 1500 8345.484375 L 0 8345.484375 Z" fill="rgba(255, 255, 255, .1)"></path>
        <path id="wave2" d="M 0 40.40259015145059 C 250 71.06779681168483 250 71.06779681168483 500 55.735193481567705 C 750 40.40259015145059 750 40.40259015145059 1000 56.60093249129412 C 1250 72.79927483113765 1250 72.79927483113765 1500 58.423409589638844 L 1500 8619.484375 L 0 8619.484375 Z" fill="rgba(0, 123, 255, 0.2)"></path>
        <path id="wave2" d="M 0 52.72477659225113 C 250 15.365934737491894 250 15.365934737491894 500 34.04535566487151 C 750 52.72477659225113 750 52.72477659225113 1000 20.840607277959712 C 1250 -11.0435620363317 1250 -11.0435620363317 1500 25.691353641376242 L 1500 8619.484375 L 0 8619.484375 Z" fill="rgba(0, 123, 255, 0.13)"></path>
        <path id="wave1" d="M 0 68.93115895934203 C 187.5 86.01863195507653 187.5 86.01863195507653 375 77.47489545720927 C 562.5 68.93115895934203 562.5 68.93115895934203 750 79.91414821597442 C 937.5 90.8971374726068 937.5 90.8971374726068 1125 75.39681606925829 C 1312.5 59.89649466590977 1312.5 59.89649466590977 1500 79.91414821597442 L 1500 8619.484375 L 0 8619.484375 Z" fill="#343a40"></path>
      </svg>
    </div> 


    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright text-white">
          &copy; Copyright <strong><span>Simple</span></strong>. All Rights Reserved
        </div>
        <div class="credits text-white">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bikin-free-simple-landing-page-template/ -->
          Designed by <span class="sep"> | </span>
          <strong><?php
          /* translators: 1: Theme name, 2: Theme author. */
          printf( esc_html__( '%2$s.', 'simple' ), 'simple', '<a href="https://reboart.com/" class="text-white">Rebo Art</a>' );
          ?></strong>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->
 

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>

</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>

</body>
</html>
