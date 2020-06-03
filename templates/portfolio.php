<?php /* Template Name: Portfolio */ get_header();?>
<?php
$portfolio = new WP_Query( array(
  'category_name' => 'portfolio',
  'posts_per_page' => 15,
));
?>

<section class="blog page">
  <div class="container container-flex">

  <h1 class="noe">Realizacje</h1>

  <div class="blog-articles">
  <!-- <?php $i = 1; ?> -->
  <?php if ( $portfolio->have_posts() ) : ?>
    <?php while ( $portfolio->have_posts() ) : $portfolio->the_post();?>
    <?php 
        $excerpt = get_the_excerpt();
        $excerpt2 = get_the_excerpt();
        $excerpt = substr( $excerpt , 0, 120);
        $excerpt2 = substr( $excerpt2 , 0, 250);
    ?>
    <article class="blog-articles-item">
    <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>

    <div class="blog-articles-item__right">
        <a href="<?php echo get_permalink(); ?>">
          <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
        </a>
      </div>
      <div class="blog-articles-item__left">
        <p class="excerpt"><?php echo $excerpt; ?>...</p>
      </div>
    </article>

    <?php 
      if( 1 == $portfolio->current_post ):
        echo '<article class="blog-articles-item blog-articles-sponsored">
        <h2>Profesjonalna wycena projektu</h2>
        <p>Wyróżnij się w internecie</p>
        <div class="blog-articles-sponsored__cta">
          <a class="btn" href="darmowa-wycena-strony-www">Dowiedz się więcej</a>
        </div>
      </article>';
    endif;
    ?>
        
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php __('No items'); ?></p>
    <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
