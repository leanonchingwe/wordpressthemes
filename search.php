<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Your_Theme
 */

get_header(); ?>

<section id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php if (have_posts()) : ?>

            <header class="page-header">
                <h1 class="page-title"><?php printf(esc_html__('Search Results for: %s', 'your-theme'), '<span>' . get_search_query() . '</span>'); ?></h1>
            </header><!-- .page-header -->

            <?php
            // Start the Loop.
            while (have_posts()) :
                the_post();

                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part('template-parts/content', get_post_format());

            endwhile;

            // Previous/next page navigation.
            the_posts_pagination(array(
                'prev_text' => esc_html__('Previous', 'your-theme'),
                'next_text' => esc_html__('Next', 'your-theme'),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__('Page', 'your-theme') . ' </span>',
            ));

        else :

            // If no content, include the "No posts found" template.
            get_template_part('template-parts/content', 'none');

        endif;
        ?>

    </main><!-- #main -->
</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
