<?php
/**
 * The template for displaying for refer-and-earn page 
 *
 * `/cms/wp-content/themes/<theme>/404.php` has been symbolically linked to this.
 *
 *
 */

\BFS\CMS\WordPress::setupContext();

// If a post revision or preview is being viewed, and the user is not authorized to view it, simply return to the home page
// NOTE: The revision / preview URLs of **unpublished** posts have no URL slugs, only query parameters, i.e. they essential resemble that of the home page URL
if ( \BFS\Router::$urlSlug == '' )
	return require_once __ROOT__ . '/pages/refer-and-earn.php';

require_once __ROOT__ . '/pages/partials/header-custom.php';

?>
<?php wp_head(); ?>
<?php require_once __ROOT__ . '/pages/section/header.php'; ?>
<div class="">
<?php require_once __ROOT__ . '/pages/section/includes/slider-lp.php'; ?>
<?php require_once __ROOT__ . '/pages/section/includes/menu-below-slider.php'; ?>
<div class="refer-and-earn-p-inner">
<section class="how-it-works space-100-top space-200-bottom">
<div class="container"><!-- container start -->
<div class="text-center mt-2 mb-5">
<h2>How It Works</h2></div>
<div class="row"><!-- row start -->
<div class="col-lg-4 mt-3 mb-2"><!-- col start -->
<div class="cust-box-6">
<img src="https://staging.whitegold.money/cms/../content/cms/login.svg" class="img-fluid mb-3">
<h3 class="mb-2">Login with your details</h3>
<p>Share your Name and Phone Number</p></div>
</div><!-- col end -->
<div class="col-lg-4 mt-3 mb-2"><!-- col start -->
<div class="cust-box-6">
<img src="https://staging.whitegold.money/cms/../content/cms/referral-details.svg" class="img-fluid mb-3">
<h3 class="mb-2">Referral details</h3>
<p>Provide Referral Name and Phone Number</p></div>
</div><!-- col end -->
<div class="col-lg-4 mt-3 mb-2"><!-- col start -->
<div class="cust-box-6">
<img src="https://staging.whitegold.money/cms/../content/cms/rewarded.svg" class="img-fluid mb-3">
<h3 class="mb-2">Get Rewarded</h3>
<p>Earn up to Rs. 1000 when your Referral makes a transaction with us.</p></div>
</div><!-- col end -->
<div class="text-center terms mt-4">
<a href="#">*Terms and conditions apply</a>
</div>
</div><!-- row end -->
</div><!-- container end -->
</section>
</div>
<section class="program space-200-top space-200-bottom fill-blue-5">
<div class="container">
<div class="row">
<div class="col-lg-6 pt-9cm">
<h3 class="mb-4">What is White Gold's Refer and Earn Program?</h3>
<p class="mt-4">White Gold's refer and earn program is an exciting referral program that offers a chance for everyone to refer a friend or a family member and earn. </p>

</div>
<div class="col-lg-6">
	<div class="text-center">
<img src="https://staging.whitegold.money/cms/../content/cms/program.png" class="img-fluid"></div>
</div>

</div>
</div>
</section>
<section class="refer-form space-100-top space-100-bottom" id="refer-now">
<div class="container"><!-- container start -->
<div class="text-center mt-4 mb-5"><h2>Fill in the required details</h2></div>
<div class="row">
<div class="col-lg-7">
<?php echo do_shortcode('[contact-form-7 id="5476" title="Ads-form"]'); ?>
</div><!-- col end -->
</div>
<div class="col-lg-5"><!-- col start -->
<div class="text-center">
<img src="https://whitegold.money/cms/../content/cms/refer-form.png" class="img-fluid mt-2"></div>
</div><!-- col end -->
</div><!-- row end -->
</div><!-- container end -->
</section>
<section class="fill-neutral-1 refer-form2 space-200-top space-200-bottom">
<div class="container"><!-- container start -->
<div class="row"><!-- row start -->
<div class="col-lg-6 fill-blue-5 br-tlbl mt-2"><!-- col start -->
<div class="refer-form2-inner">
    <div class="mb-3">
<h2>Become a White Gold agent and earn more!</h2></div>
<p>If you are a self-employed, working professional, retired person, or a housewife thinking of an alternate source of income. You can choose to become a White Gold agent and earn extra income by referring potential customers to us.</p>
<img src="https://whitegold.money/cms/../content/cms/refer-form2.png" class="img-fluid img-top mt-3 mb-3">
<div class="fill-blue-4 inner2 br16">
<div class="inner-3 inner-3-arrow fill-blue-5 mt-2 mb-6 br16">
	<div class="d-flex">
		<img src="https://whitegold.money/cms/../content/cms/inner3-icon1.svg" class="img-fluid">
		<p>Fill in the White Gold Agent application form</p>
	</div>
</div>

<div class="inner-3 inner-3-arrow fill-blue-5 mt-6 mb-6 br16">
	<div class="d-flex">
		<img src="https://whitegold.money/cms/../content/cms/ID-proof.svg" class="img-fluid">
		<p>Submit your ID proof and address proof</p>
	</div>
</div>

<div class="inner-3 inner-3-arrow fill-blue-5 mt-6 mb-6 br16">
	<div class="d-flex">
		<img src="https://whitegold.money/cms/../content/cms/Get-Verified-by-us.svg" class="img-fluid">
		<p>Get Verified by us</p>
	</div>
</div>

<div class="inner-3 fill-blue-5 mt-6 mb-6 br16">
	<div class="d-flex">
		<img src="https://whitegold.money/cms/../content/cms/referring-and-earning.svg" class="img-fluid">
		<p>Start referring and earning</p>
	</div>
</div>

</div>
</div></div><!-- col end -->
<div class="col-lg-6 bg-white br-trbr mt-md-2"><!-- col start -->
<div class="inner-4 p-30">
<h3 class="">Fill in the required details to become a white gold agent</h3>
<?php echo do_shortcode('[contact-form-7 id="2438" title="White Gold agent"]'); ?>
</div>
</div><!-- col end -->
</div><!-- row end -->
</div><!-- container end -->
</section>
</div>

<?php
require_once __ROOT__ . '/pages/partials/footer.php'; ?>

<?php wp_footer(); ?>
<style>
/* file upload style ends */
input[type="submit"], input[type="reset"], input[type="button"], button, .button{
    background-color:#0032a0!important;
}
</style>

<script>
 
  
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

var city=$('#wpcf7-f5476-o1 input[name="city"]').val();
if(city==""){
	   e.preventDefault();
	   return false;
}






var createddate="<?php 
date_default_timezone_set('Asia/Kolkata');
echo date('d-m-Y H:i');
?>";


var postdata={full_name:FullName,quantity:Quantity,
mobilenumber:MobileNumber,state:state,city:city,timestamp:createddate,sourcePoint:'White Gold Ads Page'};
console.log(postdata);

var json_data=JSON.stringify(postdata);
console.log("json_data_ "+json_data);
$.ajax({
url: "https://ka.whitegold.online/newapiforwebsite.php",
type: "POST",
//contentType: "application/json; charset=utf-8",
headers: {
    "Access-Control-Allow-Origin": "*", // this will allow all CORS requests
    "Access-Control-Allow-Methods": 'OPTIONS,POST,GET', // this states the allowed methods
    "Content-Type": "application/json" // this shows the expected content type
},
datatype: "json", 
    data : JSON.stringify(postdata),

success: function(response) { 
console.log("cus response: "+response); 
console.log("cus status: "+response.status);  
console.log("cus message: "+response.message);  
console.log("cus response: "+response);  
window.location.href = "https://whitegold.money/thank-you";
},
error: function(error) {
console.log("cus error: "+error.status);  
 e.preventDefault();
}
});

  
});

</script>
