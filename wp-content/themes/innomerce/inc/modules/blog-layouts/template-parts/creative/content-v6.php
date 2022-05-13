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

	<?php if ( innomerce_theme()->customizer->get_value( 'blog_post_publish_date' ) ) : ?>
		<div class="creative-item__before-content">
			<?php
				$day = get_the_date('d');
				$month = get_the_date('m');
			?>
			<div class="posted-on">
				<span class="posted-on__day"><?php echo esc_html( $day ); ?></span><span class="posted-on__month">/<?php echo esc_html( $month ); ?></span>
			</div>
		</div>
	<?php endif; ?>

	<div class="creative-item__content">

		<?php innomerce_post_thumbnail( 'thumbnail' ); ?>

		<div class="creative-item__content-wrapper">
			<header class="entry-header">
				<div class="entry-meta">
					<?php
						innomerce_posted_by();
						innomerce_posted_in( array(
							'prefix' => __( 'In', 'innomerce' ),
						) );
					?>
				</div><!-- .entry-meta -->
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
					innomerce_post_comments( array(
						'postfix' => __( 'Comment(s)', 'innomerce' )
					) );
				?></div>
				<?php innomerce_edit_link(); ?>
			</footer><!-- .entry-footer -->
		</div>

	</div>

	<?php if ( 'none' !== innomerce_theme()->customizer->get_value( 'blog_read_more_type' ) ) : ?>
		<div class="creative-item__after-content"><?php
			innomerce_post_link();
		?></div>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
