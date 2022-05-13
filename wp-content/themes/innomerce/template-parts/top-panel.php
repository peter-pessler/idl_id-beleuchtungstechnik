<?php
/**
 * Template part for top panel in header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Innomerce
 */

// Don't show top panel if all elements are disabled.
if ( ! innomerce_is_top_panel_visible() ) {
	return;
} ?>

<div class="top-panel container">
	<div class="space-between-content">
		<div class="top-panel-content__left">
				<?php do_action( 'innomerce-theme/top-panel/elements-left' ); ?>
				<?php innomerce_site_description(); ?>
		</div>
		<div class="top-panel-content__right">
				<?php innomerce_social_list( 'header' ); ?>
				<?php do_action( 'innomerce-theme/top-panel/elements-right' ); ?>
		</div>
	</div>
</div>