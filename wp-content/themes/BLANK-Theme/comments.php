<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Gelieve niet deze pagina direct laden. Bedankt!');

	if ( post_password_required() ) { ?>
		Dit bericht is beveiligd. Log eerst in om de reacties te bekijken.
	<?php
		return;
	}
?>

<?php if ( have_comments() ) : ?>
	
	<div id="main_title"><?php comments_number('Geen reacties', 'Een reactie', '% Reacties' );?></div>

	<div class="navigation">
		<div class="next-posts"><?php previous_comments_link() ?></div>
		<div class="prev-posts"><?php next_comments_link() ?></div>
	</div>

	<div id="commentlist">
		<?php wp_list_comments(); ?>
	</div>

	<div class="navigation">
		<div class="next-posts"><?php previous_comments_link() ?></div>
		<div class="prev-posts"><?php next_comments_link() ?></div>
	</div>
	
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<p>Reacties zijn gesloten</p>

	<?php endif; ?>
	
<?php endif; ?>

<?php if ( comments_open() ) : ?>

<div id="respond">
	
	<div id="main_title"><?php comment_form_title( 'Plaats een bericht', 'Plaats een bericht naar %s' ); ?></div>

	<div class="cancel-comment-reply">
		<?php cancel_comment_reply_link(); ?>
	</div>

	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
		<p>Je moet <a href="<?php echo wp_login_url( get_permalink() ); ?>">inloggen</a> om een reactie te plaatsen.</p>
	<?php else : ?>

	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

		<?php if ( is_user_logged_in() ) : ?>

			<p>Ingelogd als <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Uitlogen">Uitloggen &raquo;</a></p>

		<?php else : ?>

			<div>
				<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
				<label for="author">Naam <?php if ($req) echo "(verplicht)"; ?></label>
			</div>

			<div>
				<input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
				<label for="email">E-mail (Wordt niet weer gegeven) <?php if ($req) echo "(verplicht)"; ?></label>
			</div>

			<div>
				<input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
				<label for="url">Website</label>
			</div>

		<?php endif; ?>

		<!--<p>You can use these tags: <code><?php echo allowed_tags(); ?></code></p>-->

		<div>
			<textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea>
		</div>

		<div>
			<input name="submit" type="submit" id="submit" tabindex="5" value="Plaats reactie" />
			<?php comment_id_fields(); ?>
		</div>
		
		<?php do_action('comment_form', $post->ID); ?>

	</form>

	<?php endif; // If registration required and not logged in ?>
	
</div>

<?php endif; ?>
