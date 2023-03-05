<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-9">
      <h2><?php printf( __( 'Search Results for: %s', 'textdomain' ), '<span>' . get_search_query() . '</span>' ); ?></h2>

      <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

          <div class="post">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php the_excerpt(); ?></p>
            <a class="btn btn-default" href="<?php the_permalink(); ?>">Read More</a>
          </div>

        <?php endwhile; ?>

        <div class="pagination">
          <?php echo paginate_links(); ?>
        </div>

      <?php else : ?>

        <h2>No results found.</h2>
        <?php get_search_form(); ?>

      <?php endif; ?>
    </div>
    <div class="col-md-3">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
