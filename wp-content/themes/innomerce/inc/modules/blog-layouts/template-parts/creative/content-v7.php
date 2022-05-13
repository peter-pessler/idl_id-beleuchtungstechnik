<?php
/**
 * Template part for displaying creative posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Innomerce
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'posts-list__item creative-item' ); ?>>

	<?php
		if ( has_post_thumbnail() ) {
			global $wp_query;

			if ( $wp_query->current_post % 3 == 0 ) {
				?><div class="creative-item__thumbnail" <?php innomerce_post_overlay_thumbnail( 'innomerce-thumb-l' ); ?>></div><?php
			} else {
				innomerce_post_thumbnail( 'innomerce-thumb-m-2' );
			}
		}
	?>

	<div class="creative-item__content">

		<header class="entry-header">
			<div class="entry-meta"><?php
				innomerce_posted_by();
				innomerce_posted_in( array(
					'prefix' => __( 'In', 'innomerce' ),
				) );
				innomerce_posted_on( array(
					'prefix' => __( 'Posted', 'innomerce' )
				) );
			?></div>
			<h3 class="entry-title"><?php 
				innomerce_sticky_label();
				the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
			?></h3>
		</header><!-- .entry-header -->

		<?php innomerce_post_excerpt(); ?>

		<footer class="entry-footer">
			<div class="entry-meta"><?php
				innomerce_post_tags( array(
					'prefix' => __( 'Tags:', 'innomerce' )
				) );
				?><div><?php
					innomerce_post_link();
					innomerce_post_comments( array(
						'prefix' => '<i class="fa fa-comment" aria-hidden="true"></i>',
						'class'  => 'comments-button'
					) );
				?></div>
			</div>
			<?php innomerce_edit_link(); ?>
		</footer><!-- .entry-footer -->

	</div>

</article><!-- #post-<?php the_ID(); ?> -->
