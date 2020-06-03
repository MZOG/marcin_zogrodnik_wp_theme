<?php get_header(); ?>

		<!-- section -->
		<div class="container container-flex">

			<article id="post-404" class="page-404">

				<h1 class="noe"><?php _e( 'Oho.. coś jest nie tak.', 'html5blank' ); ?></h1>

				<p>Wygląda na to, że strona, której szukasz nie istnieje. Sprawdź adres, może wkradł się błąd.</p>

				<div class="page-404-cta">
					<a href="<?php echo home_url(); ?>" class="btn"><?php _e( 'Powrót na stronę główną', 'html5blank' ); ?></a>
				</div>

			</article>

		</div>


<?php get_footer(); ?>
