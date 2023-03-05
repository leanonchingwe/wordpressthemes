<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both
 * the current comments and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Digital_Shop
 * @author Leanon Chingwe
 * @version 1.0
 */

// If the post is password protected, display a message instead of comments
if ( post_password_required() ) {
	return;
}

?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
	?>
		<h2 class="comments-title">
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				printf(
					/* translators: %s: Post title. */
					esc_html__( 'One thought on &ldquo;%s&rdquo;', 'digital-shop' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: Number of comments, 2: Post title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comments_number, 'comments title', 'digital-shop' ) ),
					number_format_i18n( $comments_number ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments(
					array(
						'style'      => 'ol',
						'short_ping' => true,
						'avatar_size'=> 50,
					)
				);
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation(); ?>

	<?php
	endif; // Check for have_comments().

	// If comments are closed and there are comments, leave a message
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'digital-shop' ); ?></p>
	<?php endif; ?>

	<?php
		comment_form(
			array(
				'comment_field'        => '<label for="comment">' . esc_html__( 'Comment', 'digital-shop' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" required="required"></textarea>',
				'class_submit'         => 'submit',
				'submit_button'        => '<button name="%1$s" type="submit" id="%2$s" class="%3$s">%4$s</button>',
				'title_reply'          => esc_html__( 'Leave a Reply', 'digital-shop' ),
				'title_reply_to'       => esc_html__( 'Leave a Reply to %s', 'digital-shop' ),
				'cancel_reply_link'    => esc_html__( 'Cancel Reply', 'digital-shop' ),
				'label_submit'         => esc_html__( 'Post Comment', 'digital-shop' ),
				'format'               => 'html
