<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage My_Theme
 * @since My Theme 1.0
 */

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
                $comments_number = get_comments_number();
                if ( '1' === $comments_number ) {
                    printf(
                        /* translators: %s: Post title. */
                        esc_html__( 'One thought on &ldquo;%s&rdquo;', 'my_theme' ),
                        '<span>' . esc_html( get_the_title() ) . '</span>'
                    );
                } else {
                    printf( // WPCS: XSS OK.
                        /* translators: 1: Number of comments, 2: Post title. */
                        esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comments_number, 'comments title', 'my_theme' ) ),
                        number_format_i18n( $comments_number ), // WPCS: XSS OK.
                        '<span>' . esc_html( get_the_title() ) . '</span>'
                    );
                }
            ?>
        </h2><!-- .comments-title -->

        <ol class="comment-list">
            <?php
                wp_list_comments(
                    array(
                        'style'      => 'ol',
                        'short_ping' => true,
                        'avatar_size' => 50,
                    )
                );
            ?>
        </ol><!-- .comment-list -->

        <?php
            the_comments_pagination(
                array(
                    'prev_text' => '<span class="screen-reader-text">' . esc_html__( 'Previous', 'my_theme' ) . '</span>',
                    'next_text' => '<span class="screen-reader-text">' . esc_html__( 'Next', 'my_theme' ) . '</span>',
                )
            );
        ?>

    <?php endif; // Check for have_comments(). ?>

    <?php
        comment_form(
            array(
                'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
                'title_reply_after'  => '</h2>',
            )
        );
    ?>

</div><!-- .comments-area -->
