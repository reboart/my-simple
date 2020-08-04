<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package simple
 */

?>
<div class="card mb-5">
	<article id="post-content-<?php the_ID(); ?>" <?php post_class(); ?>>
		   <!-- ======= Breadcrumbs ======= -->
	    <section id="breadcrumbs" class="breadcrumbs">
	      <div class="container">
	      	 <ol>
	          <li><?php the_title( '<h4 class="entry-title">', '</h4>' ); ?></li>
	          <li><?php simple_post_thumbnail(); ?></li>
	        </ol>

	      </div>
	    </section><!-- End Breadcrumbs -->
		

		

		<div class="entry-content" style="padding: 20px;">
			<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'simple' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
