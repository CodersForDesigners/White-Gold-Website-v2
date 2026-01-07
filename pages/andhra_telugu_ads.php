<?php
/**
 * The template for displaying for thankyou page 
 *
 * `/cms/wp-content/themes/<theme>/404.php` has been symbolically linked to this.
 *
 *
 */

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");

\BFS\CMS\WordPress::setupContext();

// If a post revision or preview is being viewed, and the user is not authorized to view it, simply return to the home page
// NOTE: The revision / preview URLs of **unpublished** posts have no URL slugs, only query parameters, i.e. they essential resemble that of the home page URL
if ( \BFS\Router::$urlSlug == '' )
	return require_once __ROOT__ . '/pages/andhra-pradesh.php';

require_once __ROOT__ . '/pages/partials/header-custom.php';

?>


<header>
<?php

require_once __ROOT__ . '/pages/snippet/menu.php'; 

?>
<?php /* Store data in JavaScript */ ?>
<script type="text/javascript">
	window.__BFS = window.__BFS || { };
	window.__BFS.settings = window.__BFS.settings || { };
	window.__BFS.settings.region = "<?= REGION ?>";
</script>
<?php /* END: Store data in JavaScript */ ?>

<!-- Header Section -->
<section class="header-section space-100-top-bottom fill-blue-5" id="header-section" data-section-title="Header Section" data-section-slug="header-section">
	<div class="container">
		<div class="row">
			<div class="columns small-6 inline-middle">
				<a class="logo inline" href="#">
					<img class="block" src="/media/whitegold-logo-light.svg<?php echo $ver ?>" alt="whitegold" title="white-gold-logo">
				</a>
			</div>
			<div class="columns small-6 inline-middle text-right">
				<label class="select-region inline js_region_selector_container">
					<select class="select-region-option input-field js_region_selector">
						
					</select>
					<!-- <span class="select-region-label p medium js_region_label"></span> -->
				</label>
				<?php /* This menu is _semantically marked up_ and is "visually" hidden, yet accessible to crawlers (and screen readers) which is crucial for SEO and accessibility */ ?>
				<nav class="visuallyhidden js_region_nav">
					<ul>
						<?php foreach ( REGIONS as $regionCode => $regionName ) : ?>
							<li><a href="/<?= $regionCode ?>" data-region="<?= $regionCode ?>"><?= $regionName ?></a></li>
						<?php endforeach; ?>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- END: Header Section -->




<link rel="stylesheet" type="text/css" href="/css/lp.css">



<section class="sticky-menu-section">
	<div class="container" bis_skin_checked="1">
		<div class="row" bis_skin_checked="1">
			
<!-- Main Menu -->
<div class="main-menu columns small-12 medium-6 medium-offset-3 large-12 large-offset-0 fill-dark radius-50 js_whatsapp_form_section js_main_menu" bis_skin_checked="1">
	<div class="row" bis_skin_checked="1">
		<!-- Menu Switcher Checkbox -->
		<input id="toggle-menu-open-sticky" type="checkbox" aria-label="toogle-menu" name="toggle-menu-open" class="toggle-menu-open visuallyhidden js_primary_toggle_menu">
		<!-- Whatsapp Switcher Checkbox -->
		<input id="toggle-whatsapp-open-sticky" type="checkbox" name="toggle-whatsapp-open" class="toggle-whatsapp-open visuallyhidden js_wa_toggle_menu">
		<!-- Menu Content -->
		<div class="menu-content columns small-12 large-9" bis_skin_checked="1">
			<div class="row space-25" bis_skin_checked="1">
				<div class="columns small-12 large-6 space-25" bis_skin_checked="1">
					<a class="menu-button menu-button-large block fill-blue-4" href="tel:+919562262222">
						<span class="menu-button-bg" style="background-image: url('https://whitegold.money/cms/../content/cms/Rectangle-24050.jpg');background-position: 25% 59%; filter: brightness(0.9);" alt="menu-bar"></span>
						
						<span class="menu-button-label">Quick Gold Sale <br class="hide-large hide-xlarge">Call & Cash Out Today!</span>
					</a>
				</div>
				
				<div class="columns small-6 large-3 space-25" bis_skin_checked="1">
					<a class="menu-button block fill-blue-5" href="tel:+919513133319">Sell Gold</a>
				</div>
				<div class="columns small-6 large-3 space-25" bis_skin_checked="1">
					<a class="menu-button block fill-light" href="tel:+919513133319">Release Gold</a>
				</div>
			</div>
		</div>
		<!-- Menu Controls -->
		<div class="menu-head columns small-12 large-3" bis_skin_checked="1">
			<div class="row space-25" bis_skin_checked="1">
				<div class="toggle-whatsapp columns small-2 large-3 space-25" bis_skin_checked="1" onclick="window.location.href='https://api.whatsapp.com/send/?phone=%2B919513133319&text&type=phone_number&app_absent=0'" style="cursor: pointer;display:none">
					<label class="menu-button block fill-neutral-5" style="--bg-image: url( '/media/icon/vertical-dots.white.svg' ); background-color: #32AF74;" for="toggle-whatsapp-open-sticky" alt="whatsapp">
						<a href="tel:+919513133319">
					<span class="l1"></span>
						<span class="l2"></span>
						<img class="block" src="/media/icon/whatsapp-outline.svg" alt="whatsapp-icon"></a>
					</label>
				</div>
				<div class="phone-number columns small-6 small-offset-1 large-9 large-offset-0 space-25" bis_skin_checked="1">
					<a class="menu-button block fill-neutral-5 text-center" href="tel:+919513133319">+91 95131 33319</a>
				</div>
				<div class="toggle-menu columns small-2 small-offset-1 large-3 large-offset-0 space-25 hide-large hide-xlarge" bis_skin_checked="1">
					<label class="menu-button block fill-neutral-5" style="--bg-image: url( '/media/icon/vertical-dots.white.svg' )" for="toggle-menu-open-sticky" alt="whitegold gold near me">
						<span class="l1"></span>
						<span class="l2"></span>
						<span class="l3"></span>
					</label>
				</div>
			</div>
		</div>
		<!-- Whatsapp Form -->
		<div class="whatsapp-form fill-dark columns small-12 large-4" bis_skin_checked="1">
			<div class="" bis_skin_checked="1">

			</div>
		</div>
	</div>
</div>
<!-- END: Main Menu -->

		</div>
	</div>
</section>







<div class="ads-lp">
<section class="ads-lp-banner fill-blue-5">
    <div class="container">
    <div class="row">
    <div class="columns small-12 large-5 mt-4 align-self-center">
    <h1 class="d-lg-none d-md-none d-tab-none text-center">Get the Right Value for Your Gold – Instantly at White Gold.</h1>
    <h1 class="d-none d-md-block">Get the Right Value for Your Gold – Instantly at White Gold.</h1>
    
   
  
  </div>
    
    
    <div class="columns small-12 large-7 mx-md-ld-auto" id="ads-lead-form">
     <div class="text-right text-sm-center">
    <img src="/content/cms/ap-tel-img-2-1.png" class="img-fluid w-md-300 w-sm-320 d-lg-none d-md-none d-tab-none"></div>
    <div class="text-right text-sm-center">
    <img src="/cms/../content/cms/ap-tel-img-2-1.png" class="img-fluid w-sm-250 d-none d-md-block mx-md-ld-auto"></div>
    
    </div>
    

    </div>
    </div>
    </section>

<!-- section gold selling process START -->
<?php if( have_rows('top_career_section') ): ?>
<section class="sell-gold-section fill-neutral-1 space-200-top space-80-bottom js_section_sell_gold" id="sell-gold-section" data-section-title="Sell Gold Section" data-section-slug="sell-gold-section">
	<div class="container">
		<div class="row">
			<div class="intro columns small-12 large-5">
				<div class="h2 strong text-white-2 text-center">Gold Selling Process</div>
				<img src="<?php the_field('add_left_sec_img');?>" alt="Growth Ladder At White Gold" class="img-fluid d-none d-md-block mt-50 w-lg-400 mx-auto">		
	</div>
			<div class="step-cards columns small-12 large-7 pl-15 pr-15">
				<div class="step-card-grid row">
					<div class="step-break columns small-12 space-75-left-right">
						<div class="row text-blue-3 space-75-top">
							<div class="label strong text-uppercase columns small-6"></div>
							<div class="p strong columns small-6 text-right"></div>
						</div>
					</div>
					
					
					<?php while( have_rows('top_career_section') ): the_row(); ?>
					<div class="card sgs<?php the_sub_field('add_sl_no');?> columns small-12 fill-white">
						<input id="sgs<?php the_sub_field('add_sl_no');?>" type="radio" name="sell-gold-step" class="visuallyhidden js_card_toggle">
						<label for="sgs<?php the_sub_field('add_sl_no');?>" class="card-head row block">
							<div class="columns small-1"><span class="index h6 medium"><?php the_sub_field('add_sl_no');?></span></div>
							<div class="title h4 strong text-black columns small-10 space-50-left-right"><?php the_sub_field('add_job_title');?></div>
							<div class="toggle columns small-1">
								<div class="arrow"><span class="a1"></span><span class="a2"></span></div>
							</div>
						</label>
						<div class="card-content">
							<div class="row space-50-left-right">
								<div class="columns small-12 medium-12 small-offset-1 space-50-left-right space-20-top-bottom space-100-bottom">
								
									<div class="p space-100-right text-black"><?php the_sub_field('add_job_description');?>
                                    <?php if( get_field('apply_now_link') ): ?>
<a class="btn-custom-primary" href="<?php the_sub_field('apply_now_link'); ?>">Apply Now</a>
<?php endif; ?>	
</div>
								</div>
							</div>
                           
						</div>
					</div>
					<?php endwhile; ?>


				</div>
			</div>
            <!-- <img src="<?php the_field('add_btm_img_mob');?>" alt="Growth Ladder At White Gold" class="img-fluid mt-0 d-lg-none d-md-none mx-auto w-sm-250"> -->
		</div>
	</div>
</section>
<?php endif; ?>
<!-- section gold selling process END -->

<section class="space-200-top-bottom get-money fill-blue-5">
<div class="container">
  <div class="text-center">
<h2>We buy your gold at the right price - no hidden charges-100% transparency.</h2>
<a class="btn-custom-primary mt-4" style="color: #000 !important;background-color:#fff!important;" target="_self" href="tel:+919513133319">Sell your Gold now</a>
</div>

</div>


</section>

<!-- table section Start -->
<section class="price-section space-200-top-bottom light-grey ">
<div class="container px-2">
    <div class="text-center mb-5 mt-3">
    <h2 class="">White Gold Vs Other Gold Buyers</h2></div>


<table class="table mt-3">
    
  <thead>
    <tr>
      <th scope="col" class="item"><h6 class="mt-3 d-mbl-grid">Factors</h6></th>
      <th scope="col" class="item2"> <h6 class="mt-3">Other Gold Buyers</h6></th>
      <th scope="col" class="item3 fill-blue-5"> <h6 class="mt-3">White Gold - Gold Buyers</h6></th>
    </tr>
  </thead>
   
  <tbody>
    
    <tr>
      <td>
      <div class="d-lg-flex mt-4 mb-2">
    <img src="https://staging.whitegold.money/cms/../content/cms/Group-4167-1.svg" class="img-fluid" alt="">
    <h6 class="title1">Technology-Driven</h6>
</div>
      </td>
      <td>
    <ul>
<li>Use of unreliable scales, improper testing methods to determine the weight and purity of gold will give inconclusive results.</li>
</ul>
</td>
<td>
    <ul>
<li>Possess specialized knowledge and expertise in gold purity checks with advanced technology German machines.</li>
</ul>
</td>
</tr>

<tr>
      
      <td><div class="d-lg-flex mt-4 mb-2">
    <img src="https://staging.whitegold.money/cms/../content/cms/trust.svg" class="img-fluid">
    <h6 class="title1">Trust</h6>
</div></td>
      <td> <ul>
<li>Offering lower value for your gold and do not possess a track record of positive customer feedback. </li>
</ul></td>
      <td><ul>
<li>Proven track record with 100+ branches and 6,00,000+ satisfied customers who have trusted White Gold to get the right value for their gold. </li>
</ul></td>
    </tr>
    <tr>
      
      <td><div class="d-lg-flex mt-4 mb-2">
    <img src="https://staging.whitegold.money/cms/../content/cms/transparency.svg" class="img-fluid">
    <h6 class="title1">Transparency</h6>
</div></td>
<td> <ul>
<li>The gold selling experience is poor, the process is not transparent and controlled by the gold buyer.</li>
</ul></td>
<td> <ul>
<li>Completely transparent selling experience and transaction process which is standard across all White Gold branches.</li>
</ul></td>
    </tr>
    <tr>
      
      <td><div class="d-lg-flex mt-4 mb-2">
    <img src="https://staging.whitegold.money/cms/../content/cms/pricing-and-payouts.svg" class="img-fluid">
    <h6 class="title1">Pricing and Payouts</h6>
</div></td>
      <td><ul>
<li>Pricing decided based on customers and long waiting periods for payouts.</li>
</ul></td>
<td><ul>
<li>Live gold rate available on White Gold website as per the market gold rate ensuring the most accurate pricing with instant money transfer directly to your bank account.</li>
</ul></td>
    </tr>
    <tr>
      
      <td class="border-bottom-left"><div class="d-lg-flex mt-4 mb-2">
    <img src="https://staging.whitegold.money/cms/../content/cms/easy-selling.svg" class="img-fluid">
    <h6 class="title1">Easy selling process</h6>
</div></td>
<td><ul>
<li>Takes a long time to process and also high chances of damaging your gold ornaments in the process.</li>
</ul></td>
<td class="border-bottom-right"><ul>
<li>Takes only few simple steps to sell your gold without damaging your gold ornaments.</li>
</ul></td>
    </tr>
   
  </tbody>
</table>

</div>
</section>
<!-- table section END -->

<!-- Why sell section START -->
<section class="cms-content whysell space-100-bottom space-100-top fill-blue-5">
<div class="container mb-5 mb-md-0 mt-5 mt-md-0">
<div class="section1">
<div class="row">
<div class="columns small-12 large-5 text-center text-lg-left"><img class="img-fluid pb-5 w-sm-250" src="https://whitegold.money/content/cms/Frame-4205-1-1.png"></div>
<div class="columns small-12 large-7 align-self-center">
<div class="pb-5">
<h2>Why sell your gold with White Gold</h2></div>
<div class="inner row">
<div class="columns small-12 medium-6 large-6 mt-2 mb-5">
<div class="d-flex">
<img src="https://staging.whitegold.money/cms/../content/cms/Group-4035-1.svg" class="img-fluid">
<p class="p align-self-center">We value your gold like you do, and it is tested with care using advanced technology. </p>
</div>


</div>
<div class="columns small-12 medium-6 large-6 mt-2 mb-5">
<div class="d-flex">
<img src="https://staging.whitegold.money/cms/../content/cms/Group-3991214.svg" class="img-fluid">
<p class="p align-self-center">A trusted name across South India, now serving families in Andhra Pradesh.</p>
</div>
</div>
<div class="columns small-12 medium-6 large-6 mt-2 mb-5">
<div class="d-flex">
<img src="https://staging.whitegold.money/cms/../content/cms/professional.svg" class="img-fluid">
<p class="p align-self-center">Our respectful staff ensures every gold sale is handled with dignity.</p>
</div>

</div>
<div class="columns small-12 medium-6 large-6 mt-2 mb-5">
<div class="d-flex">
<img src="https://staging.whitegold.money/cms/../content/cms/simplified-transactions.svg" class="img-fluid">
<p class="p align-self-center">A quick, honest process, no stress, no confusion, just clarity.</p>
</div>

</div>
<div class="columns small-12 medium-6 large-6 mt-2 mb-5">
<div class="d-flex">
<img src="https://staging.whitegold.money/cms/../content/cms/get-money.svg" class="img-fluid">
<p class="p align-self-center">Receive your money instantly, straight to your bank account. </p>
</div>
</div>
<div class="columns small-12 medium-6 large-6 mt-2 mb-5">
<div class="d-flex">
<img src="https://staging.whitegold.money/cms/../content/cms/referral-bonus.svg" class="img-fluid">
<p class="p align-self-center">Share the trust, refer loved ones and earn with every connection.</p>
</div></div>
</div>
</div>
</div> <!-- row END -->
</div>
</div> <!-- container END -->
</section>
<!-- Why sell section END -->

<!-- START testimonials -->
<?php require_once __ROOT__ . '/pages/section/home-testimonial.php'; ?>
<!-- END: Testimonial Section -->




<!-- About company section START -->
<section class="space-200-top fill-blue-5 company">
<div class="container">

<div class="row flex-column-reverse flex-lg-row">

<img src="/cms/../content/cms/ap-tel-img-1.png" class="img-fluid d-lg-none d-md-none">

<div class="col-lg-4 mb-5 pb-sm-5 pb-md-0">

<img src="https://whitegold.money/cms/../content/cms/whitegold-white-logo.svg" class="img-fluid mb-5 pb-5 d-none d-md-block d-tab-none">

<div class="d-flex mb-4 inner-box">
<img src="https://whitegold.money/cms/../content/cms/Founded-In-2018.svg" class="img-fluid">
<p class="text-white"> Founded In <span class="text-yellow-2">2017</span></p> 
</div>
<div class="d-flex mb-4 inner-box">
<img src="https://whitegold.money/cms/../content/cms/5-Years-In-The-Industry-1.svg" class="img-fluid">
<p class="text-white"> <span class="text-yellow-2">8</span> Years In The Industry </p> 
</div>
<div class="d-flex mb-4 inner-box">
<img src="https://whitegold.money/cms/../content/cms/50-Branches-1.svg" class="img-fluid">
<p class="text-white"> <span class="text-yellow-2"> 100+ </span> Branches</p>
</div>

</div>
<div class="col-lg-3 mb-4 mb-mbl-0">
<img src="https://whitegold.money/cms/../content/cms/whitegold-white-logo.svg" class="img-fluid pb-5 d-lg-none d-md-none w-sm-200">
<p class="text-white mb-5 mb-mbl-0 pb-5">White Gold is a tech driven company. Consistently innovating with the latest and advanced technology to best serve our customers.</p>


<div class="d-flex mb-4 inner-box mt-xll-5">
<img src="https://whitegold.money/cms/../content/cms/Over-500000-Satisfied-Customers-2.svg" class="img-fluid">
<p class="text-white">  Over <span class="text-yellow-2"> 6,00,000 </span> Satisfied Customers</p>
</div>
<div class="d-flex mb-4  inner-box ">
<img src="https://whitegold.money/cms/../content/cms/200-Employees-1.svg" class="img-fluid">
<p class="text-white"> <span class="text-yellow-2"> 300+ </span> Employees</p>
</div>

</div>
<div class="col-lg-5 align-self-end">
 <img src="/content/cms/ap-tel-img-1.png" class="img-fluid d-none d-md-block d-tab-none">
</div>

</div>
</div>
</section>
<!-- About company section END -->


<!-- get money starts -->
<section class="space-200-top-bottom get-money bg">
<div class="container">
  <div class="text-center">
<h2>We buy your gold at the right price - no hidden charges-100% transparency. </h2>
<a class="btn-custom-primary mt-4" target="_self" href="tel:+919513133319">Sell your Gold now</a>
</div>

</div>


</section>
<!-- get money end -->
<footer class="space-200-bottom fill-dark pt-5 pb-5">
<div class="container">
<div class="row d-flex"><!-- row start -->

<div class="columns small-12 large-8 text-md-right text-sm-center align-self-center text-tab-center">
White Gold 2025 all rights reserved.
</div>
<div class="columns small-12 large-4 text-md-right text-sm-center mt-mbl-4 text-tab-center">

<!-- <div class="social-icons">
<a href="https://www.facebook.com/whitegold.money/" target="_blank" aria-label="facebook"><img src="https://staging.whitegold.money/cms/../content/cms/Group-217.svg" class="img-fluid ml-5px"></a>
<a href="https://www.linkedin.com/company/white-gold-india/" target="_blank" aria-label="linked-in"><img src="https://staging.whitegold.money/cms/../content/cms/Group-220.svg" class="img-fluid ml-5px"></a>
<a href="https://instagram.com/whitegold.money?igshid=YmMyMTA2M2Y=" target="_blank" aria-label="instagram"><img src="https://staging.whitegold.money/cms/../content/cms/Group-219.svg" class="ml-5px img-fluid"></a>
<a href="https://twitter.com/whitegold_money?s=21&amp;t=XjezEzzMapqJvw2naUEyFg" target="_blank" aria-label="Twitter"><img src="https://staging.whitegold.money/cms/../content/cms/Group-3991253-1.svg" class="img-fluid ml-5px"></a>
<a href="https://youtube.com/channel/UCm2R8_Z8hRuOywELr6CjT7A" target="_blank" aria-label="youtube"><img src="https://staging.whitegold.money/cms/../content/cms/Group-3991254.svg" class="img-fluid ml-5px"></a>
</div> -->

</div>

</div><!-- row end -->
</div>


</div>
<?php
require_once __ROOT__ . '/pages/partials/footer.php'; ?>

<?php wp_footer(); ?>





<script>

 window.onload = function() {
 load_from_tag();
};

 function load_from_tag(){
var data = document.querySelector('#wpcf7-f5476-o1 form');
data.setAttribute('id',"adslp_form_idname");
   
 } 
  $("#adslp_form_idname input[name='MobileNumber']").on("blur", function() {
	var phone = $(this).val();
	console.log("phone"+phone);

	var length = jQuery(this).val().length;
	if(length>=10 && length<=10 ) {
	return true;
	}else{
		alert("Please enter valid 10 digit mobile number ");
		//document.forms["book_site_visit"]["phone-kqQ0EkNhkc"].focus();
	var MobileNumber=$('#adslp_form_idname input[name="MobileNumber"]').val("");
	return false;  
	}

  });
  
  
    $("#wpcf7-f5476-o1 input[name='MobileNumber']").on("blur", function() {
	var phone = $(this).val();
	console.log("phone"+phone);

	var length = jQuery(this).val().length;
	if(length>=10 && length<=10 ) {
	return true;
	}else{ 
		alert("Please enter valid 10 digit mobile number ");
		//document.forms["book_site_visit"]["phone-kqQ0EkNhkc"].focus();
	var MobileNumber=$('#adslp_form_idname input[name="MobileNumber"]').val("");
	return false;  
	}

  });
  
let form = document.querySelector('#wpcf7-f5476-o1 input[type=submit]');
form.addEventListener('click', function(e) {



console.log("api calling");
var FullName=$('#wpcf7-f5476-o1 input[name="full-name"]').val();
if(FullName==""){
	   e.preventDefault();
	   return false;
}
var MobileNumber=$('#wpcf7-f5476-o1 input[name="MobileNumber"]').val();
if(MobileNumber==""){
	   e.preventDefault();
	   return false;
}

var Quantity=$('#wpcf7-f5476-o1 input[name="Quantity"]').val();
if(Quantity==""){
	   e.preventDefault();
	   return false;
}

var state=$('#wpcf7-f5476-o1 input[name="state"]').val();
if(state==""){
	   e.preventDefault();
	   return false;
}
if(state=="Other"){

var city=$('#wpcf7-f5476-o1 input[name="city"]').val();
if(city==""){
	   e.preventDefault();
	   return false;
}
}






var createddate="<?php 
date_default_timezone_set('Asia/Kolkata');
echo date('d-m-Y H:i');
?>";


// var postdata={full_name:FullName,quantity:Quantity,
// mobilenumber:MobileNumber,state:state,city:city,timestamp:createddate,sourcePoint:'White Gold Ads Page',page_name:'ads-lp'};
// console.log(postdata);

// var json_data=JSON.stringify(postdata);
// console.log("json_data_ "+json_data);



var values = jQuery('#adslp_form_idname').serialize();

// console.log("json_data"+values);
$.ajax({
url: "https://whitegold.money/adslp_api.php?<?php $x = 2;//want number of digits for the random number
$sum = 0;
for($i=0;$i<$x;$i++)
{$sum = $sum + rand(0,9)*pow(10,$i);
}
echo $sum; ?>",
type: "POST",
data: values,
dataType:"json",
success: function(response) { 
console.log("cus response: "+response); 
console.log("cus status: "+response.status);  
console.log("cus message: "+response.message);  
console.log("cus response: "+response);  
window.location.href = "https://whitegold.money/thank-you";
},
error: function(error) {
console.log("cus error: "+error.message); 
console.log("cus error: "+error.status);  
 e.preventDefault();
}
});

  
}); 

</script>
<script type="text/javascript" src="/js/pages/accordation-custom.js<?= $ver ?>"></script>


</footer>
<style>
  .ads-form select option{background: #0253C1;}
  .ads-form .wpcf7-select.form-control{padding: 0 var(--space-50);
    font-size: 13px;
    border: 1px solid #ebebe987;
    background-color: #fff0;
    color: #ffffff9c!important;border-radius: var(--space-25);font-size: var(--p)!important;}
   .f12{font-size:12px!important;}
  .ads-form ::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:   #ffffffa8;
}
.ads-form .input-field, input[type="email"], input[type="select"],  input[type="number"], input[type="search"], input[type="text"], input[type="tel"], input[type="url"], input[type="password"], input[type="date"], textarea, select{
  color:   #ffffff;border: 1px solid #ebebe987;
}
.ads-form .wpcf7-form-control:focus{color: #ffffffa8!important;}
.ads-form .wpcf7-form-control{color: #FFF!important;display: block;}
.ads-form .wpcf7-form-control.wpcf7-submit{color:#373938!important;}
.ads-form span.wpcf7-list-item {
    display: inline-block;
    margin: 0 0 0 0em;
    color:   #ffffffa8;
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
  .ads-form{border-radius: 12px;
background: #0253C1;padding:20px;}
.ml-5px{margin-left: 5px;}
.cms-content.whysell .section1 h2{color: white;}
.cms-content.whysell .section1 p{color: white;}
.cms-content.whysell .section1 .inner img{padding-right:10px;}
    .footer-section {
    display: none;
}
  .what-we-buy th:first-child, td:first-child {padding: 15px;width: 30%;background-color: #b3d4fc00;
}
  .sell-gold-section .step-cards .card > input:checked ~ .card-head .index{color: #1e50cc;}
  .sell-gold-section .step-cards .card .index{background-color:white;color:#1e50cc;box-shadow: inset 0 0 0 calc(var(--space-25)/3) #1e50cc;}
  .what-we-buy h2{ font-size: 32px;font-weight: 700;}
 /* .what-we-buy table th:nth-child(2){background-color: var(--blue-5)!important;} */
 .what-we-buy td:last-child {padding-right: 0;background-color: #b3d4fc1a!important;font-size: 16px;font-weight: 500;padding: 15px;color: black;}
    .what-we-buy table tr td:nth-child(2) {width: 35%;padding: 15px;background-color: #b3d4fc1a!important;box-shadow: none;font-weight: 500;font-size: 16px;color: black;}
.price-section th:first-child, td:first-child {font-size: 16px;padding: 12px;width: 30%;background-color: #b3d4fc1a;font-weight: 600;
}

.what-we-buy thead{ background-color: var(--blue-5);font-size: 16px;color: white;}
.what-we-buy thead tr th{padding:15px;}
    .sell-gold-section p{color:black;}
.mt--2{margin-top:-4px!important;}
.what-we-do-sec .inner-box-section {height: 375px;}
@media (min-width:1440px)  {.what-we-do-sec .inner-box-section {height: 450px;} .what-we-buy table{ margin-top: 9%;} } 


@media (min-width: 1480px){
.box-testimonials {
  margin: 70px 193px 175px 185px!important;
  top: 60px!important;
}
}
.why-us h2{font-size: 32px;font-weight: 700;}
.inner-box4 h5{color: white;font-size: 24px;font-weight: 500;}
.inner-box4 p{display: block;color: white;font-size: 16px;}
.inner-box4{padding:25px;border-radius: 12px;}
.inner-box4 h6{font-size:20px;}
.fw-500{font-weight: 500!important;}
.btn-primary-blue {font-size: 16px;padding: 20px 15px 20px 15px;position: relative;background-color: #0032a0;color: white;border-radius: 10px;line-height: 9px;}
@media screen and (min-device-width: 696px) and (max-device-width: 1035px) { .d-med-none{display:none!important;}}
.arrow {right: 5px;top: 5px;}
.arrow-custom {width: 50px;height: 24px;background-position: right 0% bottom 45%;background-size: contain;background-repeat: no-repeat;background-image: url(/cms/../content/cms/Ellipse-294.png);}

.sell-gold-section .step-cards .card .toggle .arrow .a1, .step-cards .card .toggle .arrow .a2{background-color: #1e50cc;
    box-shadow: 0 0 0 1px #1e50cc;}
@media screen and (min-width: 700px){
  .get-money h2{
    font-size:36px;font-weight: 700;display: block;
  }


  .box-testimonials{
  margin: 29px 130px 22px 138px;}
  .slider .slick-next {
    left: 87.7%;
}

.box-testimonials .testimonial-heading{
left: 250px!important;top: 0px!important;
}
}
 @media only screen and (min-width: 700px) and (max-width: 1330px)  {
.box-testimonials {top: 0px!important;}
}
@media (max-width: 600px){

  /* .get-money.bg{
    background-position: center;background-size:cover;background-image:url(https://staging.whitegold.money/cms/../content/cms/Group-3991252.svg)
  } */


  .get-money h2{
    font-size:28px;font-weight: 700;display: block;
  }

  .text-sm-center{
text-align:center!important;
  }
  table ul li{font-size: 1.3rem;}

}
@media (min-width: 1480px){
.box-testimonials{
top: 60px!important;
}}


/* table tr td:nth-child(3), table th:nth-child(3){
  background: #FFFFFF;
} */
/* table tr td:nth-child(3) ul li {
    color: #000;
} */
/* table ul li{ color: #ffffff;} */
/* table .item3{border-top-right-radius: 0px;} */
table .item2{border-top-right-radius: 16px;}

@media (min-width: 1000px){
  /* table tr td:nth-child(2) ul li:before{
    color: #FFFFFF;
    font-family: 'FontAwesome';
    content: "\f00c";
    background-color: #4BAE4F;
    border-radius: 46px;
    font-weight: 300;
    padding: 4px 0px 0px 3px;
    font-size: 7px;
    position: absolute;
    top: 2px;
    left: 0px;
    width: 15px;
    height: 15px;
    line-height: 7px;
    border: 1px solid #4bae4f;
  } */
  /* table tr td:nth-child(3) ul li:before{
    color: #FFC980;
    font-family: 'FontAwesome';
    content: "\2716";
    background-color: #DB5846;
    border-radius: 46px;
    font-weight: 300;
    padding: 4px 0px 0px 3.7px;
    font-size: 7px;
    position: absolute;
    top: 0px;
    left: 0px;
    width: 15px;
    height: 15px;
    line-height: 7px;
    border: 1px solid #DB5846;
  } */
}

.what-we-buy thead tr th{background: #0032A0;color:#ffffff;}
.company .inner-box p{margin-left: 12px;margin-top: 9px;}

.btn-custom-primary{
background-color: var(--blue-5)!important;
color:#ffffff!important;
}


@media screen and (min-width: 767px){

  /* .get-money.bg{
    background-size:cover;background-image:url(https://staging.whitegold.money/cms/../content/cms/Group-3991251.svg)
  } */


.text-md-right{text-align:right!important;}

}

@media screen and (min-width: 767px){
  .w-lg-300{width: 400px;}
  .p-md-relative-l-25{position: relative;left: 25%;}
  .w-md-300{width:300px!important;}
  .w-lg-400{width:400px!important;}
  .w-lg-500{width:500px!important;}
  .ads-form h4{font-size:22px;font-weight: 500;display:inline-block;}
  .ads-lp-banner h1{font-size:40px;font-weight: 600;display:block;text-transform: capitalize;}
 

}
@media screen and (max-width: 760px){
  .ads-lp .cms-content.whysell .section1 .inner img{
    width: 60px;
  }
  .p-sm-absolute-frm{z-index: 4;
    left: 46%;
    position: absolute;
    top: 20%;}
  .ads-form {
    background: #0253c166;
    position: relative;
    z-index: 4;
}


  .mt-mbl-5{margin-top: 3rem!important;}
  .ads-lp .step-cards .card .card-head > .title{font-size: 24px!important;}
  .sell-gold-section p{font-size: 16px;}
  
  .d-mbl-grid{display:grid!important;}
  .ads-lp .price-section table tr td:nth-child(2) ul li:before, .price-section table tr td:nth-child(3) ul li:before{top: -21px!important;
    left: 6px!important;}
  .ads-lp .price-section table ul li{font-size: 1.2rem;}
  .ads-lp .price-section th:first-child, td:first-child{width: 20%;padding: 8px;vertical-align: top;}
  .ads-lp .price-section table tr td:nth-child(2), table th:nth-child(2){width: 40%;padding: 8px;vertical-align: top;}
  .ads-lp .price-section table tr td:nth-child(3), .price-section table th:nth-child(3){width: 40%;padding: 8px;vertical-align: top;  background: #0032A0!important;}
  .w-sm-250{width: 250px;}
  .w-sm-320{width: 320px;}
  .w-sm-300{width: 300px;}
  .w-sm-200{width: 200px;}
  .mb-mbl-0 {
    margin-bottom: 0!important;
}
.mt-mbl-4{
  margin-top: 1.5rem!important;
}
  
  .ads-form h4{font-size:18px;font-weight: 500;display:inline-block;}
  .ads-lp-banner h1{font-size:30px;font-weight: 600;display:block;text-transform: capitalize;}

}
@media screen and (min-width: 1440px){
  .sell-gold-section p{    font-size: 20px;}
  .mt-xll-5{margin-top: 2.3rem!important;}
  .w-lg-400{width:400px!important;}
  .text-lg-left{text-align:left!important;}

}
.wpcf7-form .wpcf7-checkbox input[type=checkbox] {
  accent-color: #C0CEF1;
}


@media only screen and (min-width: 700px) and (max-width: 991px)  {

  .d-tab-none{display:none!important;}
  .sell-gold-section img{    position: relative;
    top: 29px;}
    .text-tab-center{text-align:center!important;}
}
@media screen and (min-device-width: 767px) and (max-device-width: 1056px){
  .box-testimonials .testimonial-heading{
  left: 0px!important;
  top:10px!important;
  }
  .p-md-relative-l-25{position: inherit;}
  .mx-md-ld-auto {
    margin-right: auto!important;
    margin-left: auto!important;
}
}
@media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: landscape) {
  .box-testimonials .testimonial-heading{
  left: 0px!important;
  top:10px!important;
  }
  .p-md-relative-l-25{position: inherit;}
  .mx-md-ld-auto {
    margin-right: auto!important;
    margin-left: auto!important;
}


}
@media only screen and (min-device-width: 480px) and (max-device-width: 1000px) and (orientation: landscape){
.price-section table tr td:nth-child(2) ul li:before {
  color: #ffffff!important;
}
}

.concerto-cb__bottom-right{display:none!important;}
</style>













