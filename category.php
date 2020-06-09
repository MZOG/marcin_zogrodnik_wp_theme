<?php get_header(); ?>

<section class="blog page">
  <div class="container container-flex">

  <h1 class="noe"><?php _e( '', 'html5blank' ); single_cat_title(); ?></h1>

  <div class="blog-articles">
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <article class="blog-articles-item">
    <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="blog-articles-item__right">
        <a href="<?php echo get_permalink(); ?>">
          <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
        </a>
      </div>
      <div class="blog-articles-item__left">
        
        <?php 
          $excerpt = get_the_excerpt();
          $excerpt = substr( $excerpt , 0, 120); 
          ?>
        <p class="excerpt"><?php echo $excerpt; ?>...</p>
      </div>
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
