<?php
/**
 |
 | Home page
 |
 */
const REGION = 'ts';
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
	$current_url_path == '/telangana-ads' ||
	$current_url_path == '/telangana-ads'
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
 $( function () {

// Imports
let BFSForm = window.__BFS.exports.BFSForm

// Set up the namespace
window.__BFS = window.__BFS || { };
window.__BFS.UI = window.__BFS.UI || { };

let sellGoldForm = new BFSForm( ".js_sell_gold_form" );

// Set up the form's input fields, data validators and data assemblers
    // Name
sellGoldForm.addField( "name", ".js_form_input_name", function ( values ) {
    let name = values[ 0 ]
    return BFSForm.validators.name( name )
} );

    // Quantity
sellGoldForm.addField( "quantity", ".js_form_input_quantity", function ( values ) {
    var quantity = values[ 0 ].trim();

    if ( quantity === "" )
        throw new Error( "Please provide the quantity of gold (in grams)." );

    quantity = parseInt( quantity, 10 );
    if ( window.isNaN( quantity ) )
        throw new Error( "Please provide a valid gold quantity amount." );

    return quantity;
} );

    // Phone number
sellGoldForm.addField( "phoneNumber", [ ".js_phone_country_code", ".js_form_input_phonenumber" ], function ( values ) {
    let [ phoneCountryCode, phoneNumberLocal ] = values
    return BFSForm.validators.phoneNumber( phoneCountryCode, phoneNumberLocal )
} );
// When programmatically focusing on this input field, which of the (two, in this case) input elements to focus on?
sellGoldForm.fields[ "phoneNumber" ].defaultDOMNodeFocusIndex = 1



sellGoldForm.submit = function submit ( data ) {
    let person = Cupid.getCurrentPerson( data.phoneNumber )
    person.setName( data.name )
    person.setSourcePoint( "Sell Gold" )

    Cupid.logPersonIn( person, { trackSlug: "sell-gold-form" } )

    person.setExtendedAttributes( { goldQuantityToSellInGrams: data.quantity } )
    Cupid.savePerson( person )
    PersonLogger.submitData( person )

    return Promise.resolve( person )
}



/**
 | Form submission handler
 |
 */
$( document ).on( "submit", ".js_sell_gold_form", function ( event ) {

    /*
     | Prevent default browser behaviour
     */
    event.preventDefault();

    /*
     | Prevent interaction with the form
     */
    sellGoldForm.disable();

    /*
     | Provide feedback to the user
     */
    sellGoldForm.giveFeedback( "Sending..." );

    /*
     | Extract data (and report issues if found)
     */
    var data;
    try {
        data = sellGoldForm.getData();
    } catch ( error ) {
        alert( error.message )
        console.error( error.message )
        sellGoldForm.enable();
        sellGoldForm.fields[ error.fieldName ].focus()
        sellGoldForm.setSubmitButtonLabel();
        return;
    }

    /*
     | Submit data
     */
    sellGoldForm.submit( data )
        .then( function ( response ) {
            closeFormAndGiveFeedback()
        } )

} );




/**
 |
 | Helper functions
 |
 */
function closeFormAndGiveFeedback () {
window.location.href = "https://whitegold.money/thank-you";
}

} );
/**
 |
 | Home Visit Form
 |
 |
 */
$( function () {

// Imports
let BFSForm = window.__BFS.exports.BFSForm

// Set up the namespace
window.__BFS = window.__BFS || { };
window.__BFS.UI = window.__BFS.UI || { };
let homeVisitForm = new BFSForm( ".js_home_visit_form" );

// Set up the form's input fields, data validators and data assemblers
    // Pincode
homeVisitForm.addField( "pincode", ".js_form_input_pincode", function ( values ) {
    var pincode = values[ 0 ].trim();

    if ( pincode === "" )
        throw new Error( "Please provide your pincode." );

    pincode = parseInt( pincode, 10 );
    if ( window.isNaN( pincode ) )
        throw new Error( "Please provide a valid pincode number." );
    else if ( pincode.toString().length !== 6 )
        throw new Error( "Please provide a 6-digit pincode number." );

    return pincode;
} );

    // Phone number
homeVisitForm.addField( "phoneNumber", [ ".js_phone_country_code", ".js_form_input_phonenumber" ], function ( values ) {
    let [ phoneCountryCode, phoneNumberLocal ] = values
    return BFSForm.validators.phoneNumber( phoneCountryCode, phoneNumberLocal )
} );
// When programmatically focusing on this input field, which of the (two, in this case) input elements to focus on?
homeVisitForm.fields[ "phoneNumber" ].defaultDOMNodeFocusIndex = 1
homeVisitForm.submit = function submit ( data ) {
    let person = Cupid.getCurrentPerson( data.phoneNumber )
    person.setSourcePoint( "Home Visit Form" )

    Cupid.logPersonIn( person, { trackSlug: "home-visit-form" } )

    person.setExtendedAttributes( { pincode: data.pincode } )
    Cupid.savePerson( person )
    PersonLogger.submitData( person )

    return Promise.resolve( person )
}



/**
 | Form submission handler
 |
 */
$( document ).on( "submit", ".js_home_visit_form", function ( event ) {

    /*
     | Prevent default browser behaviour
     */
    event.preventDefault();

    /*
     | Prevent interaction with the form
     */
    homeVisitForm.disable();

    /*
     | Provide feedback to the user
     */
    homeVisitForm.giveFeedback( "Sending..." );

    /*
     | Extract data (and report issues if found)
     */
    var data;
    try {
        data = homeVisitForm.getData();
    } catch ( error ) {
        alert( error.message )
        console.error( error.message )
        homeVisitForm.enable();
        homeVisitForm.fields[ error.fieldName ].focus()
        homeVisitForm.setSubmitButtonLabel();
        return;
    }

    /*
     | Submit data
     */
    

homeVisitForm.submit( data )
        .then( function ( response ) {
            //closeFormAndGiveFeedback()
            
                window.location.href = "https://whitegold.money/thank-you";
            
        } )


} );

/**
 |
 | Helper functions
 |
 */


function closeFormAndGiveFeedback () {
    homeVisitForm.getFormNode().parent().addClass( "show-thankyou" )
}



} );


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