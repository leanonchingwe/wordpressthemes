<?php get_header(); ?>

<main id="main" class="site-main">

    <?php
    // Start the loop.
    while (have_posts()) : the_post();

        // Include the page content template.
        get_template_part('template-parts/content', 'page');

        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;

    // End the loop.
    endwhile;
    ?>

</main><!-- .site-main -->

<?php get_footer(); ?>
