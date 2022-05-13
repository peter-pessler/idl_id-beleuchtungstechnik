<?php
/**
 * Template part for posts navigation.
 *
 * @package Innomerce
 */

do_action( 'innomerce-theme/blog/posts-navigation-before' );

$navigation_type = innomerce_theme()->customizer->get_value( 'blog_navigation_type' );

switch ( $navigation_type ) {
	case 'navigation':
		the_posts_navigation(
			apply_filters( 'innomerce-theme/posts/navigation-args',
							array(
								'prev_text' => sprintf( '
									<span class="screen-reader-text">%1$s</span>
									<i class="fa fa-angle-left" aria-hidden="true"></i> %1$s',
									esc_html__( 'Older Posts', 'innomerce' ) ),
								'next_text' => sprintf( '
									<span class="screen-reader-text">%1$s</span>
									%1$s <i class="fa fa-angle-right" aria-hidden="true"></i>',
									esc_html__( 'Newer Posts', 'innomerce' ) ),
							)
			)
		);
		break;
	case 'pagination':
		the_posts_pagination( 
			apply_filters( 'innomerce-theme/posts/pagination-args',
							array(
								'prev_text' => sprintf( '
									<span class="screen-reader-text">%1$s</span>
									<i class="fa fa-angle-left" aria-hidden="true"></i> %1$s',
									esc_html__( 'Prev', 'innomerce' ) ),
								'next_text' => sprintf( '
									<span class="screen-reader-text">%1$s</span>
									%1$s <i class="fa fa-angle-right" aria-hidden="true"></i>',
									esc_html__( 'Next', 'innomerce' ) ),
							)
			)
		);
		break;
}



do_action( 'innomerce-theme/blog/posts-navigation-after' );
