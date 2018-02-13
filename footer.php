<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
			<footer class="container-fluid">
				<div class="container">
					<div class="col-md-3">
						<h5>Kontakt</h5>
						<p>
							Cargo Grill & Deli</br>
							Dolnych Młynów 10/2H</br>
							31-400 Kraków
						</p>
						<p>
							12 686 55 22
						</p>
						<p>
							kontakt@cargo.pl
						</p>
					</div>
					<div class="col-md-3">
						<h5>Cargo grill & deli</h5>
						<nav class="footer-menu">
                            <ul>
								<li><a href="#">Strona Główna</a></li>
								<li><a href="#">O nas</a></li>
								<li><a href="#">Menu</a></li>
								<li><a href="#">Galeria</a></li>
								<li><a href="#">Rezerwacja</a></li>
								<li><a href="#">Oferta</a></li>
								<li><a href="#">Kontakt</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-4">
						<h5>Newsletter</h5>
						<p>
							Zapisz się do naszego newslettera, aby być zawsze na bieżąco z promocjami w Cargo.
						</p>


						<form>
							<div class="md-form col-md-8 no-gutters">
								<input type="text" id="defaultForm-email" class="form-control">
								<label for="defaultForm-email">Adres e-mail</label>
							</div>
							<div class="col-md-4">
							<button class="btn btn-primary">Zapisz</button>
							</div>
						</form>

					</div>
					<div class="col-md-2">
						<h5>Znajdź nas na</h5>
						<ul class="footer-social">
							<li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
							<li><a href="#"><i class="icon icon-social-instagram"></i></a></li>
							<li><a href="#"><i class="icon icon-social-tripadvisor"></i></a></li>
						</ul>
					</div>
				</div>
			</footer>
		</div><!-- End: inner-wrap -->
	</div><!-- End: outer-wrap -->
	<?php wp_footer(); ?>
</body>
</html>
