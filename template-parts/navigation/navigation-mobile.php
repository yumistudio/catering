<div class="header-nav-mobile__icon">
    <a href="#menu-popup" class="open-menu-link"><img src="<?php echo get_template_directory_uri() ?>/assets/images/mobile-menu-ico.png"/></a>
</div>
<div id="menu-popup" class="white-popup mfp-hide">
<button title="Zamknij (Esc)" id="mfp-close" type="button" class="mfp-close"><i class="icon-close"></i></button>
    <nav class="mobile-nav">
        <?php wp_nav_menu( array(
            'menu'           => 'top-menu' ,
            'menu_class'     => '',
        ) ); ?>
    </nav>
</div>