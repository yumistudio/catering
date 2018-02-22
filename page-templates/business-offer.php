<?php
/**
 * Template Name: Strona Oferty
 *
 * @package WordPress
 * @since vilicon 1.0
 */

wp_enqueue_script( 'parallax', get_theme_file_uri( '/assets/js/parallax.js-1.5.0/parallax.min.js' ), array(), '', true );
get_header();

global $post;

?>
    
<section class="text-section pattern-section text-center cf padding-section offer-meetings">
	<h1 class="text-dark">Spotkania na poziomie</h1>
	<div class="cf text-center">
	<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-4 col-lg-4">
        <p>Znajdujemy się w samym centrum Krakowa, na prywatnym terenie kompleksu Dolnych Młynów 10, zapewniającym odpowiednią oprawę zarównodla niewielkich spotkań, jak i hucznych imprez.</p>
        <p>Kuchnia Macieja Piórkowskiego i niebanalna przestrzeń naszej restauracji stworzą wyjątkową oprawę każdego spotkania.</p>
        <a href="#" class="btn btn-secondary">Pobierz ofertę w pdf</a>
	</div>
    <div class="col-lg-offset-1 col-lg-2 offer-people-right">
        <h2>120–150</h2>
        <h3>miejsc siedzących</h3>
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/offer-people.svg" class="responsive-img" alt='people'/>
    </div>
	</div>
</section>
<section class="text-section pattern-section text-center cf padding-section offer-spaces divider-bottom">
	<h1 class="text-dark">Przestrzenie w Cargo</h1>
	<div class="cf text-center">
    <div class="col-md-offset-1 col-md-2 offer-people-left">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/offer-person.svg" class="responsive-img" alt='people'/>
        <p>Aż do <span class="red">250</span> osób w możliwej opcji “standing party”.</p>
        
    </div>
	<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-1 col-lg-4">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/offer-space.svg" class="responsive-img" alt='cargo spaces'/>
	</div>
	</div>
</section>
<section class="offer-features padding-section">
    <div class="container cf">
        <div class="col-md-2 offer-features__feature">
            <i class="icon icon-parking"></i>
            <p>pobliski, przestronny parking</p>
        </div>
        <div class="col-md-2 offer-features__feature">
            <i class="icon icon-menu"></i>
            <p>indywidualny dobór menu</p>
        </div>
        <div class="col-md-2 offer-features__feature">
            <i class="icon icon-speaker"></i>
            <p>kompleksowe zaplecze audiowizualne</p>
        </div>
        <div class="col-md-2 offer-features__feature">
            <i class="icon icon-warning"></i>
            <p>dodatkowe atrakcje (np. degustacja win)</p>
        </div>
        <div class="col-md-2 offer-features__feature">
            <i class="icon icon-terrace"></i>
            <p>przestronny, przepiękny taras w sezonie letnim</p>
        </div>
        <div class="col-md-2 offer-features__feature">
            <i class="icon icon-wine-bottle"></i>
            <p>selekcja win przez sommeliera</p>
        </div>
    </div>
</section>
<section class="offer-compositions pattern-section text-center cf padding-section divider-top divider-black">
	<h1 class="text-dark">Przykładowe kompozycje</h1>
	<div class="cf text-center">
	<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-4 col-lg-4">
        <p>Polska, sezonowana na sucho wołowina i świeże owoce morza - taka jestkuchnia Cargo. Dzięki współpracy z Maciejem Piórkowskim powstało klasyczne menu, które uzupełnia bogata karta win.</p>
    </div>
    <div class="max-width">
        <div id="home-people__carousel" class="swiper-container carousel-two">
            <div class="fix-padding col-sm-6 col-md-4">
                <div class="swiper-slide" style="background-image: url('http://scena54.yumistudio.pl/wp-content/uploads/2018/01/kkrasko.jpg')">
                    <div class="swiper-slide__price-label">
                        od <span class="value">75 zł</span>
                    </div>
                    <div class="swiper-slide__wrapper">
                        <div class="title">
                            <h2>Kolacja dwudaniowa</h2>
                            <h3>Danie główne + przystawka lub deser</h3>
                        </div>
                        <div class="hidden">
                            <p>Całe życie zawodowe spędził w restauracjach i hotelach w Polsce, Anglii, Turcji i Izraelu...</p>
                            <a href="#" class="btn">Zobacz menu</a>
                        </div>
                        
                    </div>
                    <div class="swiper-slide__overlay"></div>
                </div>
            </div>
            <div class="fix-padding col-sm-6 col-md-4">
                <div class="swiper-slide" style="background-image: url('http://scena54.yumistudio.pl/wp-content/uploads/2018/01/kkrasko.jpg')">
                    <div class="swiper-slide__price-label">
                        od <span class="value">75 zł</span>
                    </div>
                    <div class="swiper-slide__wrapper">
                        <div class="title">
                            <h2>Kolacja dwudaniowa</h2>
                            <h3>Danie główne + przystawka lub deser</h3>
                        </div>
                        <div class="hidden">
                            <p>Całe życie zawodowe spędził w restauracjach i hotelach w Polsce, Anglii, Turcji i Izraelu...</p>
                            <a href="#" class="btn">Zobacz menu</a>
                        </div>
                        
                    </div>
                    <div class="swiper-slide__overlay"></div>
                </div>
            </div>
            <div class="fix-padding col-md-4 hidden-sm">
                <div class="swiper-slide" style="background-image: url('http://scena54.yumistudio.pl/wp-content/uploads/2018/01/kkrasko.jpg')">
                    <div class="swiper-slide__price-label">
                        od <span class="value">75 zł</span>
                    </div>
                    <div class="swiper-slide__wrapper">
                        <div class="title">
                            <h2>Kolacja dwudaniowa</h2>
                            <h3>Danie główne + przystawka lub deser</h3>
                        </div>
                        <div class="hidden">
                            <p>Całe życie zawodowe spędził w restauracjach i hotelach w Polsce, Anglii, Turcji i Izraelu...</p>
                            <a href="#" class="btn">Zobacz menu</a>
                        </div>
                        
                    </div>
                    <div class="swiper-slide__overlay"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="max-width">
        <div class="col-xs-12">
            <p class="p-outline">Ostateczna kompozycja i ilość dań serwowanych podczas wydarzenia zależy wyłącznie od Państwa potrzeb i wcześniejszych ustaleń.</p>
        </div>
    </div>
    <div class="max-width text-center">
        <a href="#" class="btn btn-secondary">Podbierz ofertę w pdf</a>
    </div>
</div>
</section>
<section id="parallax-1" class="divider-top divider-black">
    <div class="parallaxed-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri() ?>/assets/images/p-offer.jpg" style="min-height: 400px;">
    </div>
</section>
<section class="text-center offer-contact">
    <h1>Zapraszamy do kontaktu</h1>
	<div class="cf">
	<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
        <p>Jesteśmy otwarci na Państwa potrzeby i indywidualnie podchodzimy do każdej rezerwacji.</p>
        <p>Zachęcamy do skontaktowania się z nami, abyśmy wspólnie mogli zaplanować konkretne, wyjątkowe spotkanie.</p>
        <div class="offer-contact__phone">      
            <a href="tel: 12 686 55 22"><i class="icon icon-phone-outline"></i>12 686 55 22</a>
        </div>
	</div>
	</div>
</section>

<?php get_footer(); ?>