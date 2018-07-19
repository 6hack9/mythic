<li <?php Hybrid\Attr\render( 'comment' ) ?>>

	<header class="comment__meta">
		<?php echo get_avatar( $data->comment, $data->args['avatar_size'], '', '', [ 'class' => 'comment__avatar' ] ) ?>

		<?php Hybrid\Comment\render_author( [ 'after' => '<br />' ] ) ?>
		<?php Hybrid\Comment\render_permalink( [
			'text' => sprintf(
				// Translators: 1 is the comment date and 2 is the time.
				esc_html__( '%1$s at %2$s' ),
				Hybrid\Comment\fetch_date(),
				Hybrid\Comment\fetch_time()
			)
		] ) ?>
		<?php Hybrid\Comment\render_edit_link( [ 'before' => Mythic\sep() ] ) ?>
		<?php Hybrid\Comment\render_reply_link( [ 'before' => Mythic\sep() ] ) ?>
	</header>

	<div class="comment__content">

		<?php if ( ! Hybrid\Comment\is_approved() ) : ?>

			<p class="comment__moderation">
				<?php esc_html_e( 'Your comment is awaiting moderation.' ) ?>
			</p>

		<?php endif ?>

		<?php comment_text() ?>
	</div>

<?php /* No closing </li> is needed.  WordPress will know where to add it. */ ?>
