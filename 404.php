<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package simple
 */

get_header();
?>
<section id="about" class="about error-404">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-right">
            <div class="content">
              <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'simple' ); ?></h1>
              <a class="btn bg-white" href="<?php echo esc_url( home_url( '/' ) ); ?>">Back</a>
            </div>
          </div>
        </div>

      </div>
</section>
	
<?php
get_footer();
