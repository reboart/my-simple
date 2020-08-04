<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package simple
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="card-header bg-white mt-3 entry-header">

		<?php
		if ( is_singular() ) :
			the_title( '<h5 class="entry-title">', '</h5>' );
		else :
			the_title( '<h5 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	

	<div class=" card-body bg-light entry-content">
		<?php the_content();
		?>
	</div><!-- .entry-content -->

	<footer class="card-footer entry-footer">
		<?php simple_entry_footer();simple_posted_by(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

<!-- Tombol Share -->
<div class="social">
	<div class="card-footer p-md-4">
		<div class="sharethis-inline-share-buttons d-flex" id="st-1">
		<a class="facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink()?>&t=<?php the_title()?>" title="Share this post on Facebook" onclick="window.open(this.href); return false;">
			<img alt="facebook sharing button" src="https://platform-cdn.sharethis.com/img/facebook.svg" >
		</a>
		<a class="twitter" href="https://twitter.com/share?text=<?php the_title()?>&url=<?php the_permalink()?>" title="Share this post on Twitter" target="_blank">
			<img alt="twitter sharing button" src="https://platform-cdn.sharethis.com/img/twitter.svg">
		</a>
		<a class="whatsapp" href="whatsapp://send?text=<?php the_permalink()?>" title="Share this post on Whatsapp"><img alt="whatsapp sharing button" src="https://platform-cdn.sharethis.com/img/whatsapp.svg"></a>
		</div>
	</div>
</div>


