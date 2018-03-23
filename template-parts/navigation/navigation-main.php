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
<div class="header-main__bar">
	<nav class="header-nav header-nav-white">
		<?php wp_nav_menu( array(
            'menu'           => 'top-menu' ,
            'menu_class'     => '',
        ) ); ?>
	</nav>
	<div class="header-main__bar__phone">
		<a href="tel: <?php echo ot_get_option( 'phone' ); ?>"><i class="icon icon-phone"></i><?php echo ot_get_option( 'phone' ); ?></a>
	</div>
</div>
