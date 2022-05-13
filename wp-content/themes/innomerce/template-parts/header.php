<?php
/**
 * Template part for default Header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Innomerce
 */
?>

<?php get_template_part( 'template-parts/top-panel' ); ?>

<div <?php innomerce_header_class(); ?>>
	<?php do_action( 'innomerce-theme/header/before' ); ?>
	<div class="space-between-content">
		<div <?php innomerce_site_branding_class(); ?>>
			<?php innomerce_header_logo(); ?>
		</div>
		<?php innomerce_main_menu(); ?>
	</div>
	<?php do_action( 'innomerce-theme/header/after' ); ?>
</div>
