<?php
/**
 * The template for displaying the footer
 *
 * @package Bild_Test
 */

?>
<div class="separator"></div>

	<footer id="colophon" class="site-footer">
		<div class="container-custom">
			<!-- Footer -->
			<div class="sadrzaj-wrapper">
				<!-- O firmi -->
				<div class="o-firmi d-flex kolona1">
					<div class="kucica">
					<a href="<?php esc_html(get_post_type_archive_link( 'home' ));?>"><img src="<?php echo esc_url(get_template_directory_uri());?>/img/kucica.png" alt="target-icon"></a>
					</div>
					<div class="o-firmi-sadrzaj d-flex">
						<p class="naslov">O firmi</p>
						<a href="#">Istorijat / djelatnost</a>
						<a href="#">Sajmovi / dogadjaji</a>
						<a href="#">Karijera u ETG-u</a>
						<a href="#">Finansijski izvještaji</a>
						<a href="#">Tim</a>
					</div>
				</div>

				<!-- Ponude -->
				<div class="ponude kolona">
					<p class="naslov">Ponude</p>
					<a href="#">Proizvodi</a>
					<a href="#">Usluge</a>
					<a href="#">Finansiranje</a>
				</div>

				<!-- Reference -->
				<div class="reference kolona">
					<p class="naslov">Reference</p>
					<a href="#">Objekti</a>
					<a href="#">Partneri</a>
				</div>

				<!-- Download -->
				<div class="download kolona">
					<p class="naslov">Download</p>
					<a href="#">Sertifikati</a>
					<a href="#">Atesti</a>
					<a href="#">Katalozi</a>
					<a href="#">Cjenovnici</a>
					<a href="#">Uputstva</a>
					<a href="#">Tehnička dokumentacija</a>
					<a href="#">Regulativa</a>
					<a href="#">Klipovi</a>
				</div>

				<!-- Kontakti -->
				<div class="kontakti kolona">
					<p class="naslov">Kontakti</p>
					<a href="#">Lokacija / prodajna mjesta</a>
					<a href="#">Radno vrijeme</a>
				</div>

				<!-- Mapa -->
				<div class="mapa kolona">
					<p class="naslov">Google map</p>
					<div class="stroke">
						<!-- <div class="embed"> -->
							<iframe class="embed" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d378.8727520538873!2d19.247611651032308!3d42.43421599053681!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf937d91dcc56a698!2sETG%20Grupa!5e0!3m2!1sen!2s!4v1636078744713!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						<!-- </div> -->
					</div>
				</div>
			</div>

		</div><!-- .site-info -->

		<!-- Copyright -->
		<div class="copyright">
			<div class="container-custom">
				<div class="copyright-content">
					<div class="rights"><p>Copyrights by www.media.co.me. All Rights reserved</p></div>
					<div class="footer-logo">
						<p>Created by</p>
						<a href="https://www.bild-studio.com/me/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo-footer.png" alt="target-icon"></a>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
