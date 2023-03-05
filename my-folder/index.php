<?php get_header(); ?>

<div class="container-fluid" style="background-color: #f8f8f8;">
  <div class="row">
    <div class="col-12">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="content">
            <?php the_content(); ?>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
