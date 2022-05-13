<?php
/**
 * Template part for displaying creative posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Innomerce
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'posts-list__item creative-item invert-hover' ); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="creative-item__thumbnail" <?php innomerce_post_overlay_thumbnail( 'innomerce-thumb-m' ); ?>></div>
	<?php endif; ?>

	<header class="entry-header">
		<?php
			innomerce_posted_in();
			innomerce_posted_on( array(
				'prefix' => __( 'Posted', 'innomerce' )
			) );
		?>
		<h4 class="entry-title"><?php 
			innomerce_sticky_label();
			the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
		?></h4>
	</header><!-- .entry-header -->

	<?php innomerce_post_excerpt(); ?>

	<footer class="entry-footer">
		<div class="entry-meta">
			<div>
				<?php
					innomerce_posted_by();
					innomerce_post_comments( array(
						'prefix' => '<i class="fa fa-comment" aria-hidden="true"></i>'
					) );
					innomerce_post_tags( array(
						'prefix' => __( 'Tags:', 'innomerce' )
					) );
				?>
			</div>
			<?php
				innomerce_post_link();
			?>
		</div>
		<?php innomerce_edit_link(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
