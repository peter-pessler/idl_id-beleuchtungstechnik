<?php do_action( 'innomerce-theme/comments/comment-before' ); ?>

<?php if ( ! empty( innomerce_comment_author_avatar() ) ) : ?>
<div class="comment-author vcard">
	<?php echo innomerce_comment_author_avatar(); ?>
</div>
<?php endif; ?>
<div class="comment-content-wrapper">
	<div class="comment-meta">
		<?php echo innomerce_get_comment_author_link(); ?>
		<?php echo innomerce_get_comment_date(); ?>
	</div>
	<div class="comment-content">
		<?php echo innomerce_get_comment_text(); ?>
	</div>
	<div class="reply">
		<?php echo innomerce_get_comment_reply_link( array( 'reply_text' => '<i class="fa fa-reply" aria-hidden="true"></i>' . esc_html__( 'reply', 'innomerce' ) ) ); ?>
	</div>
</div>

<?php do_action( 'innomerce-theme/comments/comment-after' ); ?>
