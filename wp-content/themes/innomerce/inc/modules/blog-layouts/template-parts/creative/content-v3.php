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

	<div class="creative-item__content">

		<header class="entry-header">
			<h2 class="entry-title"><?php 
				innomerce_sticky_label();
				the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
			?></h2>
		</header><!-- .entry-header -->

		<?php innomerce_post_excerpt(); ?>

	</div>

	<footer class="entry-footer">
		<div class="entry-meta">
			<div>
				<?php
					innomerce_posted_by();
					innomerce_posted_in( array(
						'prefix'    => __( 'In', 'innomerce' ),
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
				?>
			</div>
			<?php
				innomerce_post_link();
			?>
		</div>
		<?php innomerce_edit_link(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
