<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">Die Kommentare zu diesem Artikel sind passwortgeschützt. Bitte Passwort angeben</p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
<div id="commentary" class="col span-8">
	<div class="col last span-6 nudge-2">
		<h4 class="ver small">Kommentare zu diesem Artikel</h4>	
	</div>
</div>

	<?php foreach ($comments as $comment) : ?>
		<div class="comment">
			<div class="col span-2 align-right">
				<dl>
					<dt><strong><?php comment_author_link() ?></strong></dt>
					<dd><?php if(function_exists('get_avatar')) { echo get_avatar($comment, '64'); } ?></dd>
				</dl>
			</div>
			
			<div class="col last span-6">
				<?php comment_text() ?>
			</div>
		</div>

	<?php endforeach; /* end for each comment */ ?>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<div id="leave-comment">
			<div class="col last span-6 nudge-2">
				<h4 class="ver small">Kommentare sind geschlossen.</h4>
			</div>
		</div>
	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<div id="leave-comment" class="col span-8">
	<div class="col last span-6 nudge-2">
		<h4 class="ver small">Kommentar abgeben:</h4>
	</div>
	
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

	<div class="comment-field">
		<div class="post-meta col span-2 align-right">
			<label for="author">Name</label>
		</div>

		<div class="col span-4">
			<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1" />
		</div>
		
		<div class="post-meta col last span-2">
			<p><small class="tooltip">Notwendig.</small></p>
		</div>
	</div>
	
	<div class="comment-field">
		<div class="post-meta col span-2 align-right">
			<label for="email">E-mail</label>
		</div>

		<div class="col span-4">
			<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" />
		</div>
		
		<div class="post-meta col last span-2">
			<p><small class="tooltip">Notwendig.</small></p>
		</div>
	</div>
	
	<div class="comment-field">
		<div class="post-meta col span-2 align-right">
			<label for="url">Website</label>
		</div>

		<div class="col span-4">
			<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" />
		</div>
	</div>

	<div class="comment-field">
		<div class="post-meta col span-2 align-right">
			<label for="comment">Kommentar</label>
		</div>

		<div class="col last span-6">
			<textarea name="comment" id="comment" tabindex="4" cols="10" rows="10"></textarea>
		</div>
	</div>
	
	<div class="comment-field col last-field span-2 nudge-2">
		<input name="submit" type="image" id="submit" tabindex="5" value="Submit" class="submit" src="<?php bloginfo('template_directory'); ?>/images/button-post-comment.gif" />
	</div>
	
	<p><input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>

	<?php do_action('comment_form', $post->ID); ?>
	
	</form>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
