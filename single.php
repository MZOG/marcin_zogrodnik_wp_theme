<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article <?php post_class('post'); ?>>
			<div class="container container-flex">

				<h1 class="noe post_name"><?php the_title(); ?></h1>

				<a href="/category/front-end" class="code-snippets">
				Nowa kategoria - Front End!
				</a>

				<div class="post__left">
					<!-- featured image -->
					<?php if (has_post_thumbnail()) : ?>
						<?php the_post_thumbnail(); ?>
					<?php endif; ?>
					<!-- featured image end -->
				</div>

				<div class="post__right">
					<?php the_content(); // Dynamic Content ?>

					<?php
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>
				</div>

				<div class="under-post-item">
					<div class="under-item">
						<div class="top">
							<div class="info">
								<h3>Karolina Wawrzyniak</h3>
								<a href="https://www.doradcajezykowy.com">doradcajezykowy.com</a>
							</div>
						</div>
						<p>Współpraca z Marcinem była wspaniała. W błyskawicznym tempie odpowiadał na wszystkie moje zapytania i zamieszczał kolejne elementy na stronie. W cierpliwy sposób tłumaczył na czym polega budowanie strony internetowej i na czym jako przedsiębiorca powinnam się skupić najbardziej. W stu procentach spełnił moje oczekiwania, zatem mogę go polecić jako świetnego fachowca!</p>
					</div>
					<div class="under-item">
						<div class="top">
							<div class="info">
								<h3>Profesjonalna wycena projektu</h3>
							</div>
						</div>
						<p>Wyróżnij się w internecie</p>
						<div class="under-cta">
							<a class="btn" href="darmowa-wycena-strony-www">Dowiedz się więcej</a>
						</div>
					</div>
				</div>



			</div>
		</article>
	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>