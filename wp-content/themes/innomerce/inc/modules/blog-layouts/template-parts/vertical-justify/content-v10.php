<?php
/**
 * Template part for displaying style-v10 posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package innomerce
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'posts-list__item justify-item' ); ?>>
	<div class="justify-item-inner invert">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="justify-item__thumbnail" <?php innomerce_post_overlay_thumbnail( innomerce_justify_thumbnail_size(1) ); ?>></div>
		<?php endif; ?>
		<h3 class="entry-title"><?php 
			innomerce_sticky_label();
			the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
		?></h3>
	</div><!-- .justify-item-inner-->
	<div class="justify-item-wrap">
		<header class="entry-header">
			<div class="entry-meta">
				<?php
				innomerce_posted_by();
				innomerce_posted_in( array(
					'prefix' => __( 'In', 'innomerce' ),
					'delimiter' => ', '
				) ); 
				innomerce_posted_on( array(
					'prefix' => __( 'Posted ', 'innomerce' ),
				) );
				innomerce_post_tags(); 
				innomerce_post_comments( array(
					'postfix' => __( 'comments', 'innomerce' ),
				) );
				?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
		<?php innomerce_post_excerpt(); ?>
		<footer class="entry-footer">
			<div class="entry-meta">
				<?php
				$post_more_btn_enabled = strlen( innomerce_theme()->customizer->get_value( 'blog_read_more_text' ) ) > 0 ? true : false;

				if( $post_more_btn_enabled ) {
					?><div class="space-between-content"><?php
					innomerce_post_link();
					?></div><?php
				}
				?>
			</div>
		</footer><!-- .entry-footer -->
	</div><!-- .justify-item-wrap-->
	<?php innomerce_edit_link(); ?>
</article><!-- #post-<?php the_ID(); ?> -->
