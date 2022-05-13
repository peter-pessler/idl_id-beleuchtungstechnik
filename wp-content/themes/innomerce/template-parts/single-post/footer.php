<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Innomerce
 */

?>

<footer class="entry-footer">
	<div class="entry-meta"><?php
		innomerce_post_tags ( array(
			'prefix'    => __( 'Tags:', 'innomerce' ),
			'delimiter' => ''
		) );
	?></div>
</footer><!-- .entry-footer -->