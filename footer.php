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
			<div id="footer" class="section-padding">
				<div id="footer-top" class="container-fluid max-width">
					<div class="col-xs-12 col-sm-5 col-lg-2 group-info">
						<span>Scena54 jest częścią</span>
						<a href="http://lescandale.pl" target="_blank">
							<img class="responsive-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-scandale.png" />
						</a>
					</div>

					<div class="col-xs-12 col-sm-7 col-lg-4">
						<?php wp_nav_menu( array(
                            'theme_location' => '',
                            'menu_id'        => 'footer-menu',
                            'menu_class'     => 'navigation',
                        ) ); ?>
					</div>

					<div class="col-xs-12 col-lg-offset-1 col-lg-4 signup">
						<h3>Newsletter</h3>
						<p>Zapisz się do newslettera aby być na bieżąco z wydarzeniami sceny54.</p>
						<?php es_subbox($namefield = "NO", $desc = "", $group = "Public"); ?>
					</div>
				</div>
			</div>
			<div id="copyright-info">
				<?php echo ot_get_option( 'copyright_info' ); ?>
			</div>
		</div><!-- End: inner-wrap -->
	</div><!-- End: outer-wrap -->
	<div id="back-to-top" class="btn btn-nav"><i class="icon-arrow-up"></i></div>
	<?php wp_footer(); ?>

</body>
</html>
