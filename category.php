<?php get_header(); ?>

<section class="blog page">
  <div class="container container-flex">

  <h1 class="noe"><?php _e( '', 'html5blank' ); single_cat_title(); ?></h1>

  <div class="blog-articles category">
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <article class="blog-articles-item">
      <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_tags( '<ul class="category-tags"><li>', '</li><li>', '</li></ul>' ); ?>
    </article>

	<?php endwhile; ?>

	<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

	<?php endif; ?>
  </div>

  

  </div>
</section>

<?php get_footer(); ?>
