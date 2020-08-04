<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package simple
 */

get_header();
?>
<section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-right">
            <div class="content">
              <h3>Voluptatem dignissimos provident quasi</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>
          </div>
        </div>

      </div>
</section>

<main id="main" class="site-main-post">
	
 <div class="ads-home">ADS</div>
	<div class="container mt-3">
		<div class="row">
			<div class="col-xl-7 mb-3">

				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) :
						?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
						<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

					id_pagination();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
				
			</div>
				<div class="col-xl-3 mb-3">
					<div class="card p-2">
					<?php get_sidebar(); ?>
						
					</div>
				</div>				
			</div>
		</div>
	</div>
	
</main><!-- #main -->


<?php
get_footer();?>
