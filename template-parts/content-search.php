<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package simple
 */

?>

  <div class="panel panel-default card mb-1 p-1 pt-1">  
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="panel-heading post-thumb">
        <?php simple_post_thumbnail(); ?>
    	</div>

    <div class="panel-body post-body">
        <?php simple_entry_footer(); ?>
        <h3 class="post-title">
            <?php the_title( sprintf( '<h5 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' ); ?>

			<?php if ( 'post' === get_post_type() ) : ?>
			<?php endif; ?>
        </h3>

        <div class="post-author">
            <a href="#"><?php simple_posted_by();?></a>
        </div>
    </div>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>


