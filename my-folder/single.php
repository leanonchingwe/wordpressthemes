<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-8">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <p class="text-muted"><?php the_date(); ?> by <?php the_author(); ?></p>

        <?php if ( has_post_thumbnail() ) : ?>
          <div class="thumbnail">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php endif; ?>

        <?php the_content(); ?>

      <?php endwhile; endif; ?>

    </div>
    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
