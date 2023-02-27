<?php get_header(); ?>

<main id="main-content" class="site-main">
	<section id="primary" class="content-area">
		<header class="page-header">
			<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
			<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
		</header><!-- .page-header -->

		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</section><!-- #primary -->
	<?php get_sidebar(); ?>
</main><!-- #main-content -->

<?php get_footer(); ?>
