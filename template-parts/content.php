<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package simple
 */

?>
<div class="card p-2 mb-2">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php simple_post_thumbnail(); ?>
		
			<div class="entry-footer">
				
					<?php
				if ( is_singular() ) :
					the_title( '<h6 class="entry-title">', '</h6>' );
				else :
					the_title( '<h6 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h6>' );
				endif;

				if ( 'post' === get_post_type() ) :
					?>
				<?php endif; ?>
				<?php simple_entry_footer();simple_posted_by(); ?><?php the_excerpt();?>
			</div>
		
		

		

		<!-- .entry-footer -->

	</article><!-- #post-<?php the_ID(); ?> -->
</div>