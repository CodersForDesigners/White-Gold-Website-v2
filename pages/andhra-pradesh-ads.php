<?php
/**
 |
 | Home page
 |
 */
const REGION = 'ap';
require_once __ROOT__ . '/types/cards/cards.php';
require_once __ROOT__ . '/types/faqs/faqs.php';
require_once __ROOT__ . '/types/videos/videos.php';

use \BFS\Types\FAQs;
use \BFS\Types\Videos;
use \BFS\Types\Cards;

$carouselSlides = Cards::getByRegion( REGION );
$sellGoldFAQs = FAQs::getByRegionAndSection( REGION, 'sell-gold' );
$sellGoldVideos = Videos::getByRegionAndSection( REGION, 'sell-gold' );
$releaseGoldFAQs = FAQs::getByRegionAndSection( REGION, 'release-gold' );
$releaseGoldVideos = Videos::getByRegionAndSection( REGION, 'release-gold' );


// $postTitle = '';
require_once __ROOT__ . '/pages/components/home.php';


require_once __ROOT__ . '/pages/partials/header-custom.php';
?>

<!-- ## General Page -->
<script>
	console.log( "here." )
</script>


<?php require_once __ROOT__ . '/pages/section/header.php'; ?>
<link rel="stylesheet" type="text/css" href="/css/lp.css">



<!-- Landing Carousel Section -->
<?php require_once __ROOT__ . '/pages/section/landing-carousel.php'; ?>
<!-- END: Landing Carousel Section -->


<!-- Home Menu Section -->
<section class="home-menu-section js_inline_menu_widget">
	<div class="container">
		<div class="row">
			<?php navigationMenuComponent( 'home', $contactNumbersForRegions ); ?>
		</div>
	</div>
</section>
<!-- END: Home Menu Section -->


<!-- Sell Gold Form Section -->
<?php require_once __ROOT__ . '/pages/section/includes-lp/lp-form.php'; ?>
<!-- END: Sell Gold Form Section -->
<?php require_once __ROOT__ . '/pages/section/includes/store-locator.php'; ?>


<?php
$current_url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (
	$current_url_path == '/andhra-pradesh-ads' ||
	$current_url_path == '/ts'
) {
    require_once __ROOT__ . '/pages/section/sell-gold-ap.php';
}
?>
















<?php require_once __ROOT__ . '/pages/partials/footer.php'; ?>

<script type="text/javascript" src="/js/pages/home/sell-gold-form.js<?= $ver ?>"></script>
<script type="text/javascript" src="/js/pages/home/home-visit-form.js<?= $ver ?>"></script>
<!-- <script type="text/javascript" src="/js/pages/home/login-prompts.js<?= $ver ?>"></script> -->
<script>
    /**
 |
 | Sell Gold Form
 |
 |
 */
 




/**
 |
 | Helper functions
 |
 */



/**
 |
 | Home Visit Form
 |
 |
 */



$('.branch-slider').slick({
    dots: true,
    arrows: true,	
      infinite: true,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            dots: false
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
        slidesToScroll: 1,
        dots:false
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });

    var rev = $('.highlight');
rev.on('init', function(event, slick, currentSlide) {
var
cur = $(slick.$slides[slick.currentSlide]),
next = cur.next(),
prev = cur.prev();
prev.addClass('slick-sprev');
next.addClass('slick-snext');
cur.removeClass('slick-snext').removeClass('slick-sprev');
slick.$prev = prev;
slick.$next = next;
}).on('beforeChange', function(event, slick, currentSlide, nextSlide) {
//console.log('beforeChange');
var
cur = $(slick.$slides[nextSlide]);
//console.log(slick.$prev, slick.$next);
slick.$prev.removeClass('slick-sprev');
slick.$next.removeClass('slick-snext');
next = cur.next(),
prev = cur.prev();
prev.prev();
prev.next();
prev.addClass('slick-sprev');
next.addClass('slick-snext');
slick.$prev = prev;
slick.$next = next;
cur.removeClass('slick-next').removeClass('slick-sprev');
});

rev.slick({
speed: 1000,
arrows: true,
dots: true,
infinite: true,
slidesPerRow: 1,
slidesToShow: 1,
slidesToScroll: 1,
customPaging: function(slider, i) {
return '';
},
/*infinite: false,*/
});

$( function () {

/*
 *
 * ----- Allow the user to collapse an open FAQ in the Release Gold FAQs section
 *
 */
var $releaseGoldFAQsSection = $( ".js_section_release_gold_faqs" );
var currentlyToggledCardId = $releaseGoldFAQsSection.find( ".js_faq_toggle:checked" ).attr( "id" );
$releaseGoldFAQsSection.on( "click", ".js_faq_toggle", function ( event ) {
    var domCardToggle = event.target;
    var newlyToggledCardId = domCardToggle.id;

    if ( currentlyToggledCardId !== newlyToggledCardId )
        return;

    domCardToggle.checked = false;
    currentlyToggledCardId = null;
} );
$releaseGoldFAQsSection.on( "change", ".js_faq_toggle", function ( event ) {
    currentlyToggledCardId = event.target.id;
} );

} );

</script>

<style>
    .main-menu .toggle-whatsapp {
    display: none;
    position: relative;
}
.main-menu .menu-head {
     display: none;
}
.main-menu .menu-content {
    width: 100%;
    position: relative;
}
    </style>