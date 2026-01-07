<?php
/**
 * The template for displaying for thankyou page 
 *
 * `/cms/wp-content/themes/<theme>/404.php` has been symbolically linked to this.
 *
 *
 */
const REGION = 'ts';
\BFS\CMS\WordPress::setupContext();

// If a post revision or preview is being viewed, and the user is not authorized to view it, simply return to the home page
// NOTE: The revision / preview URLs of **unpublished** posts have no URL slugs, only query parameters, i.e. they essential resemble that of the home page URL
if ( \BFS\Router::$urlSlug == '' )
	return require_once __ROOT__ . '/pages/ts/gold-buyers-panjagutta-hyderabad';



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
<h2 class="pb-4">Release your Pledged Gold With 8 Simple Steps</h2></div>
<div class="container">
  <!-- row start -->
<div class="row">
<!-- col start -->
<!--<div class="small-12 large-5 d-none d-md-block d-medium-none">

<img src="/content/cms/whitegold-andhra-img.png" class="img-fluid pt-5">
</div><!--
<!-- col end -->
<!-- col start -->
<div class="small-12 large-12">
    <!-- inner row start -->
<div class="row">
<!-- inner col start -->
<div class="small-12 large-6">
<div class="d-flex">
<div class="number">1</div>
<h4 class="text-white">Walk into Your Nearest White Gold Branch <span class="text-white">Planning to Sell Gold in A. S. Rao Nagar or worried about the pledged gold? White Gold is right around the corner and ready to assist.</span></h4>
<!-- <p class="text-white">Contact your nearest branch to sell gold.</p> -->
</div>


</div>
<div class="small-12 large-6">
<div class="d-flex">
<div class="number">2</div>
<h4 class="text-white">Bring Your Pledge Receipt <span class="text-white">We need the original gold loan receipt to get the process started. It helps us verify details quickly and accurately.</span></h4>
<!-- <p class="text-white">Contact your nearest branch to sell gold.</p> -->

</div>
</div>
<div class="small-12 large-6 mt-3 mb-sm-4 mt-md-0">
<div class="d-flex">
<div class="number">3</div>
<h4 class="text-white">Submit a Valid ID<span class="text-white">Next, you need to submit your Aadhaar, Passport, or any valid government issued photo ID to complete secure KYC in minutes.</span></h4>
<!-- <p class="text-white">Contact your nearest branch to sell gold.</p> -->

</div>
</div>
<div class="small-12 large-6 mt-3 mb-sm-4 mt-md-0">
<div class="d-flex">
<div class="number">4</div>
<h4 class="text-white">Quick KYC + Security Confirmation <span class="text-white">A short KYC verification will be done with a quick confirmation call. Just to ensure the process is 100% secure for both sides.</span></h4>
<!-- <p class="text-white">Contact your nearest branch to sell gold.</p> -->

</div>
</div>
<div class="small-12 large-6">
<div class="d-flex">
<div class="number">5</div>
<h4 class="text-white">Get Updated with Live Gold Rates  <span class="text-white">We show you real time market prices upfront. No confusion, no inflated promises. What you see is what you get.</span></h4>
<!-- <p class="text-white">Contact your nearest branch to sell gold.</p> -->

</div>
</div>
<div class="small-12 large-6 mb-sm-4">
<div class="d-flex">
<div class="number">6</div>
<h4 class="text-white">Finalise Your Loan Closure  <span class="text-white">After the verification, we coordinate with your lender to clear the loan and retrieve your gold, hassle free.</span></h4>
<!-- <p class="text-white">Contact your nearest branch to sell gold.</p> -->

</div>
</div>
<div class="small-12 large-6  mt-3 mt-md-0">
<div class="d-flex">
<div class="number">7</div>
<h4 class="text-white">Test Purity On the Spot <span class="text-white">Our German XRF machines check your gold's purity instantly and without any damage, accurate down to the decimal.</span></h4>
<!-- <p class="text-white">Contact your nearest branch to sell gold.</p> -->

</div>
</div>
<div class="small-12 large-6  mt-3 mt-md-0">
<div class="d-flex">
<div class="number">8</div>
<h4 class="text-white">Get Paid Instantly<span class="text-white">Time to Sell Gold for Cash in A. S. Rao Nagar? The moment the loan is closed and purity is confirmed, your funds hit your account. Fast, safe, and fully documented.</span></h4>
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
<!-- start "File Complaint" -->

<!-- END: Report Malpractice Section -->
<?php require_once __ROOT__ . '/pages/section/includes-lp/testimonial-lp.php'; ?>




<?php if( get_field('enable_sell_gold_section') == 'yes' ): ?>
<section class="home-why-whitegold space-200-top space-200-bottom">
<div class="container">
    <div class="text-center mt-3 mb-4"><h2>Why White Gold is the Smart Choice to Sell Gold for Cash in A. S. Rao Nagar</h2></div>
    <div class="row mt-5-xl">
<div class="columns small-12 large-4">
<img src="/content/cms/Frame-4205-1-1.png" class="img-fluid" alt="" title="">
</div>
<div class="columns small-12 large-8 mt-2">
<div class="row mt-2">
<!-- box starts  --><div class="columns small-6 large-4 mb-1 mt-1">
<div class="grey-box bg-grey">
 
<img src="/cms/../content/cms/Group.svg" class="img-fluid mb-2" alt="Technology Driven logo" title="Technology Driven"><p class="mt-1">Precision You Can Trust</p>
</div></div>
<!-- box ends --><div class="columns small-6 large-4 mb-1 mt-1">
<div class="grey-box bg-grey">
 
<img src="/cms/../content/cms/Group-1.svg" class="img-fluid mb-2" alt="Wide Network Of Branches icon" title="Wide Network Of Branches"><p class="mt-1">A Strong Network Across the South</p>
</div></div>
<!-- box ends --><div class="columns small-6 large-4 mb-1 mt-1">
<div class="grey-box bg-grey">
 
<img src="/cms/../content/cms/Group-2.svg" class="img-fluid mb-2" alt="Professional Team icon" title="Professional Team"><p class="mt-1">Professionals at Every Step</p>
</div></div>
<!-- box ends --><div class="columns small-6 large-4 mb-1 mt-1">
<div class="grey-box bg-grey">
 
<img src="/cms/../content/cms/Group-3.svg" class="img-fluid mb-2" alt="Complaint Redressal System icon" title="Complaint Redressal System"><p class="mt-1">We Hear You. We Help You.</p>
</div></div>
<!-- box ends --><div class="columns small-6 large-4 mb-1 mt-1">
<div class="grey-box bg-grey">
 
<img src="/cms/../content/cms/Group-4.svg" class="img-fluid mb-2" alt="White Group Conglomerate icon" title="White Group Conglomerate"><p class="mt-1">Part of the White Group Legacy</p>
</div></div>
<!-- box ends --><div class="columns small-6 large-4 mb-1 mt-1">
<div class="grey-box bg-grey">
 
<img src="/cms/../content/cms/Group-5.svg" class="img-fluid mb-2" alt="Live Gold Rate - White Gold" title="Live Gold Rate"><p class="mt-1">Live Rates. No Surprises.</p>
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



<!-- START: faq Section -->
<?php require_once __ROOT__ . '/pages/section/includes/faq-section.php'; ?>
<!-- END: faq Section -->

<!-- START: location Section -->
<?php require_once __ROOT__ . '/pages/section/includes-lp/reach-us.php'; ?>
<!-- END: location Section -->

<!-- <script type="text/javascript" src="/js/pages/custom.js"></script> -->
<?php
require_once __ROOT__ . '/pages/partials/footer.php'; ?>

<script type="text/javascript" src="/js/modules/lp.js<?= $ver ?>"></script>
<style>
@media screen and (max-width: 980px){
    .lp-koramangala .highlight .slick-prev {
    position: absolute;
    left: 35%;
    top: 203%;
    z-index: 1;
}
.lp-koramangala .highlight .slick-next {
    position: absolute;
    top: 203%;
    right: 35%;
    z-index: 1;
}  
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
.exchange-gold ul li:before {
    content: url(https://whitegold.money/cms/../content/cms/correct-2-1.svg)!important;
    position: absolute;
    left: 10px;
}

.home-why-whitegold p {
    font-size:15px;
}
.grey-box {margin: 5px;}
.arrow{
    right: 5px;
    top: 5px;
    }
    .arrow-custom{
    width: 50px;
    height: 24px;
        background-position: right 0% bottom 45%;
    background-size: contain;
    background-repeat: no-repeat;
        background-image: url("https://whitegold.money/cms/../content/cms/Ellipse-294.png");
       
    }
    @media screen and (min-width: 1440px){
        .pt-10p{padding-top:10%;}
        .pt-20p{padding-top:20%;}
        .arrow-custom{width: 43px;height: 43px;background-position: right 0% bottom 45%;margin-top: -8px;}
    .arrow{right: 11px;top: 12px;position: relative!important;top: 11px!important;

    }
    }
  
    .bdr-btm{border-bottom: 1px solid rgba(255, 255, 255, 0.12);}
    .seven-steps h4{font-weight:700;}
    .seven-steps span{font-size:15px;display:block;margin-top:5px;font-weight: 400;}

.new-sell-page h2{font-weight: 700;font-size: 32px;}
/* .new-sell-page p {} */
@media screen and (min-width: 980px){ .pd-lg-50{padding:50px;}.seven-steps .number{color:#FFFFFF;opacity: 0.1;font-size: 120px;font-weight: 700;}.seven-steps h4{position: relative;font-size: 20px;top: 33px;right: 29px;}.pt-lg-25p{padding-top: 25%;}}
.new-sell-gold .icon p{margin-left: 10px;margin-top: 9px;}
.old-gold .box{background:#FFFFFF;padding:20px;border-radius: 12px;border-right: 6px solid #DCDCDC;border-bottom: 6px solid #DCDCDC;}
@media screen and (max-width: 980px){
    /* .icon-section p{font-size:16px;} */
.pb-sm-2c {padding-bottom: 0.5rem!important;}
.pb-sm-4c {padding-bottom: 1.5rem!important;}
.pb-sm-5c {padding-bottom: 1.8rem!important;}
.pb-sm-7c {padding-bottom: 2.4rem!important;}
.pt-sm-2c {padding-top: 0.5rem!important;}
.pt-sm-3c {padding-top: 0.9rem!important;}
.pt-sm-4c {padding-top: 1.5rem!important;}
.pt-sm-5c {padding-top: 1.8rem!important;}
.pt-sm-6c {padding-top: 2.0rem!important;}
.pt-sm-7c {padding-top: 2.4rem!important;}
    .text-small-center{text-align:center;}
    .seven-steps h4{position: relative;font-size: 20px;top: 25px;right: 29px;} 
.seven-steps .number{color:#FFFFFF;opacity: 0.1;font-size: 96px;font-weight: 700;}}
@media only screen and (min-width: 769px) and (max-width: 1035px) { .d-medium-none{display:none!important;}

}

.reach-us{
    padding-top:40px;
}
</style>



