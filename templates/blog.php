<?php /* Template Name: Blog */ get_header();?>

<?php
$blog = new WP_Query( array(
  'category_name' => 'blog',
  'posts_per_page' => 50,
));
?>

<section class="blog page">
  <div class="container container-flex">

  <h1 class="noe">Blog</h1>

  <a href="/category/snippets" class="code-snippets">
    Zmiany na stronie! Nowa kategoria "code snippets" dla początkujących programistów. Sprawdź!
  </a>

  <div class="blog-articles">
  <!-- <?php $i = 1; ?> -->
  <?php if ( $blog->have_posts() ) : ?>
    <?php while ( $blog->have_posts() ) : $blog->the_post();?>
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

    <?php 
      if( 1 == $blog->current_post ):
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
