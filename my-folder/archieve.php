<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Digital_Shop
 * @since 1.0.0
 */

get_header(); ?>

<main id="primary" class="site-main">

  <?php if ( have_posts() ) : ?>

    <header class="page-header">
      <?php
        the_archive_title( '<h1 class="page-title">', '</h1>' );
        the_archive_description( '<div class="taxonomy-description">', '</div>' );
      ?>
    </header><!-- .page-header -->

    <?php
      // Start the Loop.
      while ( have_posts() ) :
        the_post();

        /*
         * Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'template-parts/content', get_post_format() );

      endwhile;

      // Previous/next page navigation.
      the_posts_pagination(
        array(
          'prev_text'          => esc_html__( 'Previous', 'digital-shop' ),
          'next_text'          => esc_html__( 'Next', 'digital-shop' ),
          'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'digital-shop' ) . ' </span>',
        )
      );

    else :
      // If no content, include the "No posts found" template.
      get_template_part( 'template-parts/content', 'none' );

    endif;
    ?>

  </main><!-- #primary -->

  <?php
  // Sidebar
  get_sidebar();
  ?>

<?php get_footer(); ?>
