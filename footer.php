			<footer class="footer" role="contentinfo">
				<div class="container">
					<div class="general-info">
						<p>
							<span class="footer-phone">
								<a href="tel:07850545566">078 505 455 66</a>
							</span>

							<span class="footer-email">
								<a href="mailto:kontakt@marcinzogrodnik.pl" rel="me">kontakt@marcinzogrodnik.pl</a>
							</span>
						</p>
						<?php footer_menu(); ?>
					</div>
					<p class="copyright">&copy; <?php echo date('Y'); ?>  <?php bloginfo('name'); ?>.</p>

				</div>
			</footer>
		</main>

		<?php wp_footer(); ?>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145426129-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-145426129-1');
		</script>

	</body>
</html>
