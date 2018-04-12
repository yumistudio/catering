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
<div class="sticky-nav">
	<div class="sticky-nav__logo">
		<div id="logo">
			<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png"/>
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
<script>
(function($) {
	$(document).ready(function() {
		var headerHeight = $('header').height();
		$(window).resize(function() {
			var headerHeight = $('header').height();
		});
		$(window).scroll(function() {    
			var scroll = $(window).scrollTop();
			if (scroll >= headerHeight) {
				$(".sticky-nav").addClass("show-sticky-nav");
			} else if (scroll <= headerHeight) {
				$(".sticky-nav").removeClass("show-sticky-nav");
			}
		});
	});
})(jQuery);
</script>