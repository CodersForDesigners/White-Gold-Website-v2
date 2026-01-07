<?php
/**
 * The template for displaying for location pages
 *
 * `/cms/wp-content/themes/<theme>/404.php` has been symbolically linked to this.
 *
 *
 */

\BFS\CMS\WordPress::setupContext();

// If a post revision or preview is being viewed, and the user is not authorized to view it, simply return to the home page
// NOTE: The revision / preview URLs of **unpublished** posts have no URL slugs, only query parameters, i.e. they essential resemble that of the home page URL
if ( \BFS\Router::$urlSlug == '' )
	return require_once __ROOT__ . '/pages/ka/sell-gold-in-vijayapura.php';



require_once __ROOT__ . '/pages/partials/header-custom.php';

?>
<?php require_once __ROOT__ . '/pages/section/header.php'; ?>
<link rel="stylesheet" type="text/css" href="/css/lp.css">
<!-- ## Home Page -->
<!-- Landing Carousel Section -->
<?php require_once __ROOT__ . '/pages/section/includes-lp/slider-lp.php'; ?>
<!-- END: Landing Carousel Section -->

<?php require_once __ROOT__ . '/pages/section/includes/menu-below-slider.php'; ?>

<!-- Sell Gold Form Section -->
<?php require_once __ROOT__ . '/pages/section/includes-lp/lp-form.php'; ?>
<!-- END: Sell Gold Form Section -->

<?php if( get_field('add_contents')): ?>
<section class="exchange-gold space-200-top-bottom bg-grey">
<?php the_field('add_contents');?>
</section><?php endif; ?>




<!-- START highlights  Section -->
<?php require_once __ROOT__ . '/pages/section/includes-lp/section-highlights.php'; ?>
<!-- END highlights  Section -->

<!-- what we do section -->
<?php require_once __ROOT__ . '/pages/section/includes-lp/what-we-do-section.php'; ?>
<!-- END: what we do Section -->

<?php require_once __ROOT__ . '/pages/section/includes/benefits.php'; ?>
<!-- Report Malpractice Section -->
<?php if( get_field('enable_sell_gold_section') == 'yes' ): ?>
<section class="home-why-whitegold space-200-top space-200-bottom">
<div class="container">
    <div class="text-center mt-3 mb-4"><h2>Why Sell Gold To White Gold?</h2></div>
    <div class="row mt-5-xl">
<div class="columns small-12 large-5">
<img src="/cms/../content/cms/Group-4189-1-2.png" class="img-fluid" alt="" title="">
</div>
<div class="columns small-12 large-7 mt-2">
<div class="row mt-2">
<!-- box starts  --><div class="columns small-6 large-4 mb-1 mt-1">
<div class="grey-box bg-grey">
 
<img src="/cms/../content/cms/Group.svg" class="img-fluid mb-2" alt="Technology Driven logo" title="Technology Driven"><p class="mt-1">Technology Driven</p>
</div></div>
<!-- box ends --><div class="columns small-6 large-4 mb-1 mt-1">
<div class="grey-box bg-grey">
 
<img src="/cms/../content/cms/Group-1.svg" class="img-fluid mb-2" alt="Wide Network Of Branches icon" title="Wide Network Of Branches"><p class="mt-1">Wide Network Of Branches</p>
</div></div>
<!-- box ends --><div class="columns small-6 large-4 mb-1 mt-1">
<div class="grey-box bg-grey">
 
<img src="/cms/../content/cms/Group-2.svg" class="img-fluid mb-2" alt="Professional Team icon" title="Professional Team"><p class="mt-1">Professional Team</p>
</div></div>
<!-- box ends --><div class="columns small-6 large-4 mb-1 mt-1">
<div class="grey-box bg-grey">
 
<img src="/cms/../content/cms/Group-3.svg" class="img-fluid mb-2" alt="Complaint Redressal System icon" title="Complaint Redressal System"><p class="mt-1">Complaint Redressal System</p>
</div></div>
<!-- box ends --><div class="columns small-6 large-4 mb-1 mt-1">
<div class="grey-box bg-grey">
 
<img src="/cms/../content/cms/Group-4.svg" class="img-fluid mb-2" alt="White Group Conglomerate icon" title="White Group Conglomerate"><p class="mt-1">White Group Conglomerate</p>
</div></div>
<!-- box ends --><div class="columns small-6 large-4 mb-1 mt-1">
<div class="grey-box bg-grey">
 
<img src="/cms/../content/cms/Group-5.svg" class="img-fluid mb-2" alt="Live Gold Rate - White Gold" title="Live Gold Rate"><p class="mt-1">Live Gold Rate</p>
</div></div>
<!-- box ends --></div>
</div>
<div class="text-center mt-3">
<div class="">
<a class="btn-primary-blue" href="https://whitegold.money/why-whitegold/" aria-label="Know More">Know More</a></div>
    </div>
</div>
</div>


</section><?php endif; ?>

<!-- END: Report Malpractice Section -->
<?php require_once __ROOT__ . '/pages/section/includes-lp/testimonial-lp.php'; ?>

<?php if( get_field('add_image') ): ?>
<!-- START: location Section -->
<?php require_once __ROOT__ . '/pages/section/includes-lp/reach-us.php'; ?>
<!-- END: location Section -->
<?php endif; ?>
<!-- START: faq Section -->
<?php require_once __ROOT__ . '/pages/section/includes/faq-section.php'; ?>
<!-- END: faq Section -->

<?php require_once __ROOT__ . '/pages/section/includes/store-locator.php'; ?>
<!-- <script type="text/javascript" src="/js/pages/custom.js"></script> -->


<!-- <section class="home-contact space-200-bottom space-200-top">
<div class="container">
<div class="text-center mb-5">
            <h2 class="h2 strong">Contact Us</h2>
        </div>
<div class="row">
<div class="columns small-12 medium-12 large-4 mb-3">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2962.028427084763!2d77.61099227358827!3d12.932661515733821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae159a56baa187%3A0xfcca64325ae86b57!2sWhite%20Gold%20Koramangala%20-%20Turn%20Your%20Gold%20Into%20Money!5e1!3m2!1sen!2sin!4v1731418783607!5m2!1sen!2sin"  style="border:0;width:100%;height:100%;border-radius: 16px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<div class="columns small-12 medium-12 large-8 mb-3">
<div class="row bg-blue-box">
<div class="columns small-12 medium-12 large-6 pd-10 mb-4">
<img src="/cms/../content/cms/koramangala-whitegold-l.png" class="img-fluid">
</div>
<div class="columns small-12 medium-12 large-6 align-self-center pb-3">
 <h4 class="strong h4 text-light">White Gold Bullion Private Limited</h4>   
 <p class="reviews pt-4">222 Google reviews</p>
 <p class="strong text-light h6 mt-100">Registered Address</p>
 <a href="https://maps.app.goo.gl/XzRa7MyH4j5XgWSy9" target="_blank"><p class="address d-flex mb-3 mt-2"> 75, 3rd Floor, Hosur Road, 5th Block, Industrial Area, Koramangala, Bengaluru, Karnataka 560095</p></a>
 <a href="tel:9590704444"><p class="number d-flex">+91 9590 704444</p></a>
</div>
</div>

</div>

</div>
</div>

</section> -->







<?php
require_once __ROOT__ . '/pages/partials/footer.php'; ?>

<script type="text/javascript" src="/js/modules/lp.js<?= $ver ?>"></script>
<style>

@media only screen and (min-width: 600px) and (max-width: 1000px)  {
.d-tab-none{display: none!important;}

}
@media screen and (max-width: 1100px){
.text-sml-center{text-align:center;}
}
@media screen and (max-width: 980px){
    .lp-mysore .highlight .slick-prev {
    position: absolute;
    left: 35%;
    top: 203%;
    z-index: 1;
}
.lp-mysore .highlight .slick-next {
    position: absolute;
    top: 203%;
    right: 35%;
    z-index: 1;
}  
}

.exchange-gold ul li:before {
    content: url(https://staging.whitegold.money/cms/../content/cms/correct-2-1.svg)!important;
    position: absolute;
    left: 10px;
}

.landing-carousel-section .carousel .carousel-list-item p {
    text-align: left;
    word-spacing: 0px;
}



.mt--2{margin-top:-4px!important;}
.why-us h2{font-size: 32px;font-weight: 700;}
.inner-box4 h5{color: white;font-size: 24px;font-weight: 500;}
.inner-box4 p{display: block;color: white;font-size: 16px;}
.inner-box4{padding:25px;border-radius: 12px;}
.inner-box4 h6{font-size:20px;}
.fw-500{font-weight: 500!important;}
.exchange-gold h2{font-size: 32px;font-weight: 700;}
.exchange-gold p{font-size: 16px;}
.exchange-gold ul li{font-size:16px;color:#000000;list-style:none;padding-left: 40px;}

.company .inner-box p{margin-left: 12px;margin-top: 9px;}
.careers-page h1,
.landing-carousel-section h1 {
    line-height:53px!important;
    font-size: 44px !important;
    font-weight: 800;
}
.cms-content .section1 .icon p {
    margin-left: 6px;
    margin-top: 9px;
    color: #212322;
    display: flex;
}
.icon img, .icon2 img, .icon4 img {
    margin-top: -9px;
    margin-right: 10px;
}
.home-why-whitegold p {
    font-size:15px;
}
.grey-box {margin: 5px;}

.bg-blue-box{
    border-radius: 16px;
    background-color: var(--blue-5);
}

/* .home-contact h4{
    display: block;
    font-size: 24px;
    color: white;
    font-weight: 500;
} */

.home-contact .address{
    display: block;
    font-size: 16px; 
    color: white;
}

.home-contact .number{
    display: block;
    font-size: 16px; 
    color: white;  
}

.home-contact .address::before{
    margin-right: 12px;
    content: url(https://whitegold.money/cms/../content/cms/icon-location.svg);
}
.home-contact .number::before{
    margin-top: -5px;
    margin-right: 12px;
    content: url(https://whitegold.money/cms/../content/cms/icon-call.svg);
}

.home-contact .reviews{
    color:#ffffff7d;font-size: 16px;display: block;
}

.home-contact .reviews::before{
    position: relative;
    top: 7px;
    margin-right: 12px;
    content: url(https://whitegold.money/cms/../content/cms/review-rating.svg); 
}


.home-contact .row{
    display:flex!important;
}
</style>



