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
	return require_once __ROOT__ . '/pages/ka/sell-gold-bannerghatta.php';



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
 <!-- START: Price Section -->
<?php require_once __ROOT__ . '/pages/section/includes-lp/price-section.php'; ?>
<!-- END: Price Section -->

<section class="seven-steps fill-blue-5 space-200-top space-200-bottom new-sell-page">
    <div class="text-center">
<h2 class="pb-4">Simple 8 Steps to Release Gold in Sadashiva Nagar</h2>
</div>
<div class="container">
  <!-- row start -->
<div class="row">
<!-- col start -->
<div class="small-12 large-5 d-none d-md-block d-medium-none">

<img src="/cms/../content/cms/5K8A6803-2-2-1-1.png" class="img-fluid pt-5">
</div>
<!-- col end -->
<!-- col start -->
<div class="small-12 large-7">
    <!-- inner row start -->
<div class="row">
<!-- inner col start -->
<div class="small-12 large-6">
<div class="d-flex">
<div class="number">1</div>
<h4 class="text-white">Bring Your Pledge Receipt <span class="text-white">Bring your original pledge receipt. This helps us verify your details quickly and speeds up the gold release process.</span></h4>
<!-- <p class="text-white">Contact your nearest branch to sell gold.</p> -->
</div>


</div>
<div class="small-12 large-6">
<div class="d-flex">
<div class="number">2</div>
<h4 class="text-white">We need a Valid Photo ID <span class="text-white">Submit your Aadhaar card or any government issued ID for fast and secure KYC verification with our trusted gold buyers in Sadashiva Nagar.</span></h4>
<!-- <p class="text-white">Contact your nearest branch to sell gold.</p> -->

</div>
</div>
<div class="small-12 large-6 mt-3 mb-sm-4 mt-md-0">
<div class="d-flex">
<div class="number">3</div>
<h4 class="text-white">Visit White Gold Sadashiva Nagar<span class="text-white">To sell gold in Sadashiva Nagar, walk into our branch. Our friendly staff will guide you through the process.</span></h4>
<!-- <p class="text-white">Contact your nearest branch to sell gold.</p> -->

</div>
</div>
<div class="small-12 large-6 mt-3 mb-sm-4 mt-md-0">
<div class="d-flex">
<div class="number">4</div>
<h4 class="text-white">Complete KYC and Security Check <span class="text-white">We confirm your identity and address quickly. This might include a phone verification step for added safety.</span></h4>
<!-- <p class="text-white">Contact your nearest branch to sell gold.</p> -->

</div>
</div>
<div class="small-12 large-6">
<div class="d-flex">
<div class="number">5</div>
<h4 class="text-white">Check the Live Gold Rate  <span class="text-white">We follow real time MCX rates to ensure you get the accurate and fair value for your gold.</span></h4>
<!-- <p class="text-white">Contact your nearest branch to sell gold.</p> -->

</div>
</div>
<div class="small-12 large-6 mb-sm-4">
<div class="d-flex">
<div class="number">6</div>
<h4 class="text-white">Close Your Gold Loan  <span class="text-white">After all verifications are done, your pledged gold loan will be fully cleared.</span></h4>
<!-- <p class="text-white">Contact your nearest branch to sell gold.</p> -->

</div>
</div>
<div class="small-12 large-6  mt-3 mt-md-0">
<div class="d-flex">
<div class="number">7</div>
<h4 class="text-white">Confirm Your Gold Purity <span class="text-white">Our advanced XRF machines check gold purity accurately with zero damage to your items.</span></h4>
<!-- <p class="text-white">Contact your nearest branch to sell gold.</p> -->

</div>
</div>
<div class="small-12 large-6  mt-3 mt-md-0">
<div class="d-flex">
<div class="number">8</div>
<h4 class="text-white">Receive Instant Payment<span class="text-white">The agreed amount will be transferred directly to your bank account instantly. The entire process is fast and safe.</span></h4>
<!-- <p class="text-white">Contact your nearest branch to sell gold.</p> -->

</div>
</div>
</div>
 <!-- inner row start -->


 <!-- inner row start -->




</div>
<!-- col end -->


</div>
<!-- row end -->
</div>
</section>

<?php require_once __ROOT__ . '/pages/section/includes/benefits.php'; ?>
<!-- Report Malpractice Section -->
<?php if( get_field('enable_sell_gold_section') == 'yes' ): ?>
<section class="home-why-whitegold space-200-top space-200-bottom">
<div class="container">
    <div class="text-center mt-3 mb-4"><h2>Trusted Gold Buyers in Sadashiva Nagar Why Choose White Gold?</h2></div>
    <div class="row mt-5-xl">
<div class="columns small-12 large-5">
<img src="/cms/../content/cms/Group-4189-1-2.png" class="img-fluid" alt="" title="">
</div>
<div class="columns small-12 large-7 mt-2">
<div class="row mt-2">
<!-- box starts  --><div class="columns small-6 large-4 mb-1 mt-1">
<div class="grey-box bg-grey">
 
<img src="/cms/../content/cms/Group.svg" class="img-fluid mb-2" alt="Technology Driven logo" title="Technology Driven"><p class="mt-1">Technology Driven Accuracy</p>
</div></div>
<!-- box ends --><div class="columns small-6 large-4 mb-1 mt-1">
<div class="grey-box bg-grey">
 
<img src="/cms/../content/cms/Group-1.svg" class="img-fluid mb-2" alt="Wide Network Of Branches icon" title="Wide Network Of Branches"><p class="mt-1">Wide Network Across South India</p>
</div></div>
<!-- box ends --><div class="columns small-6 large-4 mb-1 mt-1">
<div class="grey-box bg-grey">
 
<img src="/cms/../content/cms/Group-2.svg" class="img-fluid mb-2" alt="Professional Team icon" title="Professional Team"><p class="mt-1">Expert Staff, Professional Service</p>
</div></div>
<!-- box ends --><div class="columns small-6 large-4 mb-1 mt-1">
<div class="grey-box bg-grey">
 
<img src="/cms/../content/cms/Group-3.svg" class="img-fluid mb-2" alt="Complaint Redressal System icon" title="Complaint Redressal System"><p class="mt-1">Dedicated Complaint Support System</p>
</div></div>
<!-- box ends --><div class="columns small-6 large-4 mb-1 mt-1">
<div class="grey-box bg-grey">
 
<img src="/cms/../content/cms/Group-4.svg" class="img-fluid mb-2" alt="White Group Conglomerate icon" title="White Group Conglomerate"><p class="mt-1">A Trusted Name — Part of the White Group</p>
</div></div>
<!-- box ends --><div class="columns small-6 large-4 mb-1 mt-1">
<div class="grey-box bg-grey">
 
<img src="/cms/../content/cms/Group-5.svg" class="img-fluid mb-2" alt="Live Gold Rate - White Gold" title="Live Gold Rate"><p class="mt-1">Real Time Live Gold Rates</p>
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

/* 8 easy steps */
.new-sell-page h2 {
    font-weight: 700;
    font-size: 32px;
}@media screen and (min-width: 980px) {
    .seven-steps .number {
        color: #FFFFFF;
        opacity: 0.1;
        font-size: 120px;
        font-weight: 700;
    }
    .seven-steps h4 {
        position: relative;
        font-size: 20px;
        top: 33px;
        right: 29px;
    }
}
.seven-steps span {
    font-size: 15px;
    display: block;
    margin-top: 5px;
    font-weight: 400;
}
</style>



