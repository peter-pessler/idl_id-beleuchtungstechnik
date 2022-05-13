<?php
/**
 * Template part for displaying default posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Innomerce
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('posts-list__item default-item invert-item'); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="default-item__thumbnail" <?php innomerce_post_overlay_thumbnail( 'innomerce-thumb-l' ); ?>></div>
	<?php endif; ?>

	<div class="container">

		<header class="entry-header">
			<div class="entry-meta"><?php
				innomerce_posted_by();
				innomerce_posted_in( array(
					'prefix' => __( 'In', 'innomerce' ),
				) );
				innomerce_posted_on( array(
					'prefix' => __( 'Posted', 'innomerce' )
				) );
				innomerce_post_tags( array(
					'prefix' => __( 'Tags:', 'innomerce' )
				) );
				innomerce_post_comments( array(
					'postfix' => __( 'Comment(s)', 'innomerce' )
				) );
			?></div><!-- .entry-meta -->
			<h3 class="entry-title"><?php 
				innomerce_sticky_label();
				the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
			?></h3>
		</header><!-- .entry-header -->

		<?php innomerce_post_excerpt(); ?>

		<footer class="entry-footer">
			<div class="entry-meta">
				<?php
					innomerce_post_link();
				?>
			</div>
			<?php innomerce_edit_link(); ?>
		</footer><!-- .entry-footer -->
	
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
