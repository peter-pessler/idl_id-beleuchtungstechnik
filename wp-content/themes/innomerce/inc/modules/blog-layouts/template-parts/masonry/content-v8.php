<?php
/**
 * Template part for displaying style-v8 posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package innomerce
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'posts-list__item masonry-item' ); ?>>
	<div class="masonry-item-wrap">
		<?php innomerce_post_thumbnail( 'innomerce-thumb-masonry' ); ?>
		<div class="masonry-item-wrap__content">
			<header class="entry-header">
				<div class="entry-meta">
					<?php
					innomerce_posted_by();
					innomerce_posted_in( array(
						'prefix' => __( 'In', 'innomerce' ),
						'delimiter' => ', '
					) ); 
					innomerce_posted_on( array(
						'prefix' => __( 'Posted', 'innomerce' ),
					) ); 
					?>
				</div><!-- .entry-meta -->
				<h4 class="entry-title"><?php 
					innomerce_sticky_label();
					the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
				?></h4>
			</header><!-- .entry-header -->
			<?php innomerce_post_excerpt(); ?>
			<footer class="entry-footer">
				<div class="entry-meta">
					<?php
					innomerce_post_tags();

					$post_more_btn_enabled = strlen( innomerce_theme()->customizer->get_value( 'blog_read_more_text' ) ) > 0 ? true : false;
					$post_comments_enabled = innomerce_theme()->customizer->get_value( 'blog_post_comments' );

					if( $post_more_btn_enabled || $post_comments_enabled ) {
						?><div class="space-between-content"><?php
						innomerce_post_link();
						innomerce_post_comments();
						?></div><?php
					}
					?>
				</div>
			</footer><!-- .entry-footer -->
		</div>
	</div><!-- .masonry-item-wrap-->
	<?php innomerce_edit_link(); ?>
</article><!-- #post-<?php the_ID(); ?> -->
