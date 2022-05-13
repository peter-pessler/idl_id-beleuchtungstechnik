<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Innomerce
 */

?>

<header class="entry-header">
	<?php the_title( '<h1 class="entry-title h2-style">', '</h1>' ); ?>
	<div class="entry-meta">
		<?php
			innomerce_posted_by();
			innomerce_posted_in( array(
				'prefix'  => __( 'In', 'innomerce' ),
			) );
			innomerce_posted_on( array(
				'prefix'  => __( 'Posted', 'innomerce' ),
			) );
			innomerce_post_comments( array(
				'postfix' => __( 'Comment(s)', 'innomerce' ),
			) );
		?>
	</div><!-- .entry-meta -->
</header><!-- .entry-header -->

<?php innomerce_post_thumbnail( 'innomerce-thumb-l', array( 'link' => false ) ); ?>