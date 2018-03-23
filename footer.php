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
				<div class="container cf no-gutters">
					<div class="col-sm-12 col-md-6 col-lg-3">
						<h5>Kontakt</h5>
						<p><?php echo nl2br(ot_get_option( 'address' )); ?></p>
						<p><?php echo ot_get_option( 'phone' ); ?></p>
						<p><?php echo ot_get_option( 'email' ); ?></p>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-3">
						<h5>Cargo grill & deli</h5>
						<nav class="footer-menu">
							<div class="menu-footer-menu-container">
								<ul id="menu-footer-menu">
									<li>
										<a href="http://127.0.0.1:85/catering/">Strona główna</a>
									</li>
								</ul>
							</div>	
                        </nav>
					</div>
					<div class="col-md-6 col-lg-4">
						<h5>Newsletter</h5>
						<p><?php echo ot_get_option( 'newsletter_prompt' ); ?></p>
						<?php es_subbox($namefield = "NO", $desc = "", $group = "Public"); ?>
					</div>

				</div>
				<div class="container">
					<div class="footer-bottom">
						<div class="col-md-1 no-gutters">
							<img class="responsive-img" src="<?php echo get_template_directory_uri() ?>/assets/images/logo-scandale.png">
						</div>
						<div class="col-md-3">
							Cargo Grill & Deli</br>jest częścią Grupy Scandale
						</div>	
						<div class="col-md-offset-6 col-md-2 text-right copy no-gutters">
							© Grupa Scandale 2018
						</div>
					</div>
				</div>
			</footer>
		</div><!-- End: inner-wrap -->
	</div><!-- End: outer-wrap -->
	<?php wp_footer(); ?>
</body>
</html>
