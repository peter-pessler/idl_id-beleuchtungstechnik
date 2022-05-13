<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Innomerce
 */

?>

<?php 

do_action( 'innomerce-theme/sidebar/before' );

if ( is_active_sidebar( 'sidebar' ) && 'none' !== innomerce_theme()->sidebar_position ) : ?>
	<aside id="secondary" <?php innomerce_secondary_content_class( array( 'widget-area' ) ); ?>>
		<?php dynamic_sidebar( 'sidebar' ); ?>
	</aside><!-- #secondary -->
<?php endif; 

do_action( 'innomerce-theme/sidebar/after' );
