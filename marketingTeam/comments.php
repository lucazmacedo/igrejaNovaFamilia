<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<div id="comments" class="comments-area" style="max-width: 875px;">
	<?php if ( have_comments() ) : ?>
	
	<div class="comment-list my-3">
		<?php
		wp_list_comments( array(
			'style'       => 'div',
			'short_ping'  => true,
			'avatar_size' => 20,
		) );
		?>
	</div><!-- .comment-list -->
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

	<nav class="navigation comment-navigation" role="navigation">

		<h3 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h3>
		<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentythirteen' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentythirteen' ) ); ?></div>

	</nav><!-- .comment-navigation -->

	<?php endif; // Check for comment navigation ?>

	<?php if ( ! comments_open() && get_comments_number() ) : ?>
	<p class="no-comments"><?php _e( 'Comments are closed.', 'twentythirteen' ); ?></p>
	<?php endif; ?>
	<?php endif; // have_comments() ?>

	<?php comment_form(); ?>

</div><!-- #comments -->