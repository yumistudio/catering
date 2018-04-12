<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="sticky-nav show-sticky-nav">
	<div class="sticky-nav__logo">
		<div id="logo">
			<a href="<?php bloginfo( 'siteurl' ) ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png"/></a>
		</div>
	</div>

	<div class="sticky-nav__container">
		<nav class="header-nav">
			<?php wp_nav_menu( array(
	            'menu'           => 'top-menu' ,
	            'menu_class'     => '',
	        ) ); ?>
		</nav>
		<div class="sticky-nav__phone">
			<a href="tel: <?php echo ot_get_option( 'phone' ); ?>"><i class="icon icon-phone"></i><?php echo ot_get_option( 'phone' ); ?></a>
		</div>
	</div>
</div>
<div class="nav-space"></div>