<?php
/**
 * Template part for displaying style-v9 posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package innomerce
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'posts-list__item justify-item invert-item' ); ?>>
	<div class="justify-item-inner">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="justify-item__thumbnail" <?php innomerce_post_overlay_thumbnail( innomerce_justify_thumbnail_size(0) );?>></div>
		<?php endif; ?>
		<div class="justify-item-inner__top"><?php
			innomerce_post_comments( array(
				'prefix' => '<i class="fa fa-comment" aria-hidden="true"></i>',
				'class'  => 'comments-button'
			) );
		?></div>
		<div class="justify-item-wrap invert">
			<header class="entry-header">
				<div class="entry-meta">
					<?php
					innomerce_posted_by();
					innomerce_posted_in( array(
						'prefix' => __( 'In', 'innomerce' ),
						'delimiter' => ', '
					) );
					innomerce_posted_on( array(
						'prefix' => '',
					) );
					innomerce_post_tags();
					?>
				</div><!-- .entry-meta -->
				<h4 class="entry-title"><?php
					innomerce_sticky_label();
					the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
				?></h4>
			</header><!-- .entry-header -->
			<div class="justify-item-wrap__animated">
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
			</div><!-- .justify-item-wrap__animated-->
		</div><!-- .justify-item-wrap-->
	</div><!-- .justify-item-inner-->
	<?php innomerce_edit_link(); ?>
</article><!-- #post-<?php the_ID(); ?> -->
