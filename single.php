<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package simple
 */

get_header();
?>

<main id="main" class="site-main">

	<div class="container">
		    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
    	<div class="container">
	      	 <ol>
	          <li><a>Home</a></li>
	          <li><i class="icofont-folder-open"></i><?php the_category(',');?></li>
	        </ol>

      	</div>
    </section><!-- End Breadcrumbs -->
		<div class="row">
			<div class="col-xl-9 mb-3">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content-single', get_post_type() );

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'simple' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class=" nav-subtitle">' . esc_html__( 'Next:', 'simple' ) . '</span> <span class="nav-title">%title</span>',
						)
					);

					// If comments are open or we have at least one comment, load up the comment template.
					

				endwhile; // End of the loop.
				?>
		<?php if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>
		</div>
		<div class="col-xl-3">
			<!-- Ralated POST BY KATEGORI -->
	<?php $orig_post = $post;
		global $post;
		$categories = get_the_category($post->ID);
			if ($categories) {
			$category_ids = array();
			foreach($categories as $individual_category) {
			$category_ids[] = $individual_category->term_id;
			};
			$args=array(
			'category__in' => $category_ids,
			'post__not_in' => array($post->ID),
			'posts_per_page'=> 4,   // Jumlah yang ditampilkan
			'ignore_sticky_posts'=>1,
			'orderby' => 'rand'  // Tampilan Random / Acak
			);
			$my_query = new wp_query( $args );
			if( $my_query->have_posts() ) {
			echo '<h4 class="title-relate">Related Post :</h4><div class="container relatepost" >';
			while( $my_query->have_posts() ) {
			$my_query->the_post();?>
						
              <div class="categ panel panel-default card m-1">
              	<div class="panel-heading post-thumb">
                 <?php simple_post_thumbnail();?>
            	</div>
                <div class="panel-body post-body">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>                
                </div>  
              
              </div>
        
			
            
			<?php }
			echo '</div>';
			} };
			$post = $orig_post;
			wp_reset_query();?>
<!-- END Related Post BY KATEGORY -->
			<div class="card-body fixed bg-white mt-5 mb-3">
				ads
			</div>
			
		</div>
	</div>

	</div>

</main><!-- #main -->


<?php
get_footer();
