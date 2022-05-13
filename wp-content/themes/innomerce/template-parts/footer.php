<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Innomerce
 */
?>

<?php do_action( 'innomerce-theme/widget-area/render', 'footer-area' ); ?>

<div <?php innomerce_footer_class(); ?>>
	<div class="space-between-content"><?php
		innomerce_footer_copyright();
		innomerce_social_list( 'footer' );
	?></div>
</div><!-- .container -->
