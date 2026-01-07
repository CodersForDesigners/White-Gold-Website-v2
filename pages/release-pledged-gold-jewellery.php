<?php
/**
 * The template for displaying for thankyou page 
 *
 * `/cms/wp-content/themes/<theme>/404.php` has been symbolically linked to this.
 *
 *
 */

\BFS\CMS\WordPress::setupContext();

// If a post revision or preview is being viewed, and the user is not authorized to view it, simply return to the home page
// NOTE: The revision / preview URLs of **unpublished** posts have no URL slugs, only query parameters, i.e. they essential resemble that of the home page URL
if ( \BFS\Router::$urlSlug == '' )
	return require_once __ROOT__ . '/pages/sell-gold-in-india.php';

require_once __ROOT__ . '/pages/partials/header-custom.php';

?>
<?php require_once __ROOT__ . '/pages/section/header.php'; ?>
<div class="why-whitegold">
<?php require_once __ROOT__ . '/pages/section/includes/slider-lp.php'; ?>
<?php require_once __ROOT__ . '/pages/section/includes/menu-below-slider.php'; ?>
<!-- Sell Gold Form Section -->
<section class="sell-gold-form-section space-100-top space-200-bottom js_sell_gold_form_section" id="sell-gold-form-section" data-section-title="Sell Gold Form Section" data-section-slug="sell-gold-form-section">
	<div class="container">
		<div class="row sell-gold-form">
			<div class="columns small-6 medium-5 large-4 space-100-bottom">
				<div class="logo space-75-bottom">
					<img class="block" src="/media/whitegold-logo-dark.svg<?php echo $ver ?>">
				</div>
				<div class="h3 line-height-small">Looking to Release Your <span class="strong line-h-1"> Pledge Gold</span></div>
			</div>
			<br class="hide-large hide-xlarge">
			<div class="columns small-9 medium-5 large-3 large-offset-1">
				<div class="form-card row fill-light">
					<form class="form form-base js_sell_gold_form" onsubmit="event.preventDefault()">
						<div class="columns small-12">
							<label class="form-label block">
								<input type="text" placeholder="Full Name" class="form-input-field block js_form_input_name">
								<span class="form-label-title medium fill-light cursor-pointer">Full Name</span>
							</label>
						</div>
						<div class="columns small-12 space-50-top">
							<label class="form-label block">
								<input type="text" placeholder="Quantity (in grams)" class="form-input-field block js_form_input_quantity">
								<span class="form-label-title medium fill-light cursor-pointer">Quantity (in grams)</span>
							</label>
						</div>
						<div class="columns small-12 space-50-top">
							<label class="phone-verify form-label block">
								<input type="text" class="form-input-field phone-number block js_form_input_phonenumber">
								<select class="form-input-field country-code js_phone_country_code">
									<?php require __ROOT__ . '/pages/snippet/phone-country-codes.php' ?>
								</select>
								<input type="text" disabled="" class="form-input-field country-code-label js_phone_country_code_label js_phone_country_code" value="+91">
								<span class="country-code-divider material-icons" data-icon="unfold_more"></span>
								<span class="form-label-title medium fill-light cursor-pointer">Mobile Number</span>
							</label>
						</div>
						<div class="row space-25-top space-50-left-right">
							<div class="small text-neutral-3">I hereby authorise, WHITE GOLD to call me on this number.</div>
						</div>
						<div class="columns small-12 space-50-top">
							<label class="form-label block">
								<span class="form-label-title hidden medium fill-light cursor-pointer">Submit</span>
								<button class="button fill-blue-1" type="submit">
									<span class="button-label js_submit_label">Sell Gold</span>
									<img class="button-icon tall" src="/media/icon/rupee-tall-blue.svg<?php echo $ver ?>">
								</button>
							</label>
						</div>
						<div class="columns small-12 space-50-top">
							<a class="inline phone-call" href="tel:<?= $contactNumbersForRegions[ REGION ] ?>">
								<img class="icon inline-middle" style="width: calc( var(--h6) * 2 );" src="/media/icon/phone-call-dark.svg<?php echo $ver ?>">
								<div class="inline-middle space-25-left">
									<span class="inline label strong text-uppercase line-height-small">Or call</span><br>
									<span class="inline h6 strong line-height-small"><?= $contactNumbersForRegions[ REGION ] ?></span>
								</div>
							</a>
						</div>
					</form>
					<div class="form form-thankyou">
						<div class="columns small-12">
							<div class="h4 strong space-25-bottom">Thank You</div>
							<div class="p">We'll get in touch with you soon.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="char"><img class="block" src="<?php the_field('add_form_bg_image');?>" alt="Looking to sell gold in <?php the_field('add_locationn');?>"></div>
	</div>
</section>
<!-- END: Sell Gold Form Section -->

<div class="pledge-gold">
<!-- sell gold section START -->
<section class="new-sell-gold fill-blue-5 space-200-top">
<div class="container">
 <!-- row start -->
 <div class="row flex-column-reverse flex-lg-row">
<div class="small-12 large-6 text-center">
<img src="https://whitegold.money/cms/../content/cms/5K8A6759-1-2.png" alt="pledge-gold" class="img-fluid">
</div>
<div class="small-12 large-5 align-self-center">
<h2 class="text-white h3 pb-5 strong">The practice of Gold pledging</h2>
<ul class="mt-4">
<li>The practice of using gold as collateral for loans or other financial transactions has existed for decades and has evolved with time. </li>
<li>While pledging gold can be a useful way to access funds quickly, many people struggle to release their pledged gold once they have repaid their debt.</li>
<li>The process can be complicated and time-consuming, involving paperwork, assessments of the gold's value, interests, and negotiations with lenders.</li>
</ul>
<div class="fill-blue-4 p mt-5 mb-5 point-box">Which is why White Gold offers you a better-valued alternative.</div>
</div>
<!--row end -->
 </div> 
</div>
</section>
<!-- sell gold section END -->


<section class="help-section space-200-top-bottom">
<div class="container">
<div class="row flex-column-reverse flex-lg-row">
<div class="small-12 large-6 align-self-center">
<h2 class="h4 strong ">How White Gold Can Help You With Your Pledged Gold?</h2>
<p class="mt-4 mb-3">White Gold offers a reliable solution for those looking to offload the interest burden on gold loans. We clear all interests and dues, allowing you to release your gold without hassle, and offer you the best quote to purchase the released gold, providing you with instant cash.</p>
<p>With a commitment to transparency and fair pricing, we offer a secure and convenient way to free your gold assets and obtain financial flexibility.</p>
</div>

<div class="small-12 large-6">

<img src="/cms/../content/cms/Group-4210-1-1.png" alt="pledge-gold" class="img-fluid mb-5 d-none d-md-block">

</div>
</div>
</div>
</section>


<section class="release space-200-top-bottom fill-neutral-1">
<div class="container">
<div class="row">
    <div class="text-center">
<h3 class="h3 strong ">We Release & Buy Your Pledged Gold</h3>
<p class="mt-3 mb-5">Pledging gold or precious metal ornaments for cash is a common practice among people to fulfill financial needs.</p></div>
<div class="small-12 large-4 mt-3 mb-3">
<div class="release-box">
  <p>Unfortunately! The high-interest rate makes it difficult for customers to release the pledged gold, resulting in a growing loan amount that continues to accumulate with time. </p>  
</div>
</div>

<div class="small-12 large-4 mt-3 mb-3">
<div class="release-box">
<p>At White Gold, we take the burden and hassle off you and release your pledged gold while offering you the best price for your gold with an instant cash option.</p>
</div></div>
<div class="small-12 large-4 mt-3 mb-3">
<div class="release-box">
<p>You sell your pledged gold with the assurance that you have cleared your gold loan and receive cash based on the current market price for your gold. </p>
</div></div>

</div>
</div>
</section>

<section class="documents space-200-top">
<div class="container">
<div class="row flex-column-reverse flex-lg-row">
    <div class="small-12 large-5 align-self-end">
<img src="/cms/../content/cms/5K8A6755-1024x798-2-3.png" alt="pledge-gold" class="img-fluid"> 
</div>

<div class="small-12 large-7">
<div class="h3 strong text-white-2 mb-3">Documents Required to Sell Your 
Pledged Gold</div>
<!-- inner row starts -->
<div class="row">
<div class="small-6 large-6 mt-4 mb-4">
<div class="d-flex bg-box">
<img src="/cms/../content/cms/Vector-5.svg" class="img-fluid">
<p class="p align-self-center"><a href="/release-pledged-gold-with-white-gold/"> Pledge gold</a> receipt</p>
</div>
</div>


<div class="small-6 large-6 mt-4 mb-4">
<div class="d-flex bg-box">
<img src="/cms/../content/cms/Icon-2.svg" class="img-fluid">
<p class="p align-self-center">A valid ID proof</p>
</div>
</div>

<div class="small-6 large-6 mt-4 mb-3">
<div class="d-flex bg-box">
<img src="/cms/../content/cms/Group-4222.svg" class="img-fluid">
<p class="p align-self-center">A valid and latest address proof</p>
</div>
</div>


<div class="small-6 large-6 mt-4 mb-3">
<div class="d-flex bg-box">
<img src="/cms/../content/cms/Group-7.svg" class="img-fluid">
<p class="p align-self-center">Passport Size Photo</p>
</div>
</div>


</div>
<!-- inner row starts -->
</div>
</div>
</section>



<section class="instant-cash space-100-top fill-blue-5">
<div class="container">
<div class="row">
<div class="small-12 large-6 align-self-center">
<h3 class="h3">Looking to Sell Your Pledged Gold For Instant Cash?</h3>
<div class="fill-blue-4 inner mt-5">
<p class="text-white mb-3">As one of the most trusted gold buyers in Bangalore, we help you release your gold from banks, pawnbrokers, and others swiftly. </p>
<p class="text-white">Our competitive rates and reliable services will provide you with the best return on your gold, helping you to get the maximum amount of cash before your gold is auctioned off and you potentially lose money.</p>

</div></div>

<div class="small-12 large-6">
<img src="/cms/../content/cms/5K8A6751-1-1.png" class="img-fluid">
</div>
</div>
</div>
</section>

<?php if( have_rows('top_career_section') ): ?>
<section class="sell-gold-section fill-neutral-1 space-200-top-bottom space-100-bottom js_section_sell_gold" id="sell-gold-section" data-section-title="Sell Gold Section" data-section-slug="sell-gold-section">
	<div class="container">
		<div class="row">
			<div class="intro columns small-12 large-4">
				<div class="h2 strong text-white-2">Release Your Gold in 8 Taps</div>
				<img src="<?php the_field('add_left_sec_img');?>" alt="Growth Ladder At White Gold" class="img-fluid d-none d-md-block mt-50">		
	</div>
			<div class="step-cards columns small-12 large-8 pl-15 pr-15">
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
		</div>
	</div>
</section>
<?php endif; ?>
</div>

<section class="instant-cash space-200-top space-100-bottom fill-blue-5">
<div class="container">
<div class="row">
<div class="columns small-12 large-6 align-self-center">
<h3 class="text-white  h3">Your Nearest Branch</h3>
<p class="text-white mt-3 pb-4">We are currently present in Karnataka, Andhra Pradesh, Kerala and Telangana with over 60+ branches. Find your nearest branch to release your pledged gold for instant cash. To get the best price for your gold and enjoy fast, secure, and hassle-free transactions!</p>
<a class="btn-custom-primary" target="_self" href="/ka/branches">Visit Now</a>
</div>
<div class="columns small-12 large-6">
<img src="/cms/../content/cms/why-whitegold.png" class="img-fluid p-5">
</div>

</div>
	</div>
</section>


<?php if( have_rows('faq_careers') ): ?>

<section class="release-gold-faqs-section fill-neutral-1 space-200-top space-200-bottom js_section_release_gold_faqs" id="release-gold-faqs-section" data-section-title="Release Gold FAQs Section" data-section-slug="release-gold-faqs-section">
	<div class="container">
		<div class="row">
			<div class="columns small-12 large-4">
				<div class="h2 strong text-neutral-3 space-100-bottom">Frequently Asked Questions</div>
			</div>
			<div class="columns small-12 large-8">

				<div class="row">
					<div class="videos-faqs columns small-12">
						<div class="videos-faqs-grid row">
													</div>
					</div>
					<div class="articles-faqs columns small-12">
						<input id="more-release-gold-faqs" type="checkbox" name="more-release-gold-faqs" class="more-faqs visuallyhidden">
						<div class="faqs">
												
              <?php while( have_rows('faq_careers') ): the_row(); ?>	
															<div class="faq">
									<input id="release-gold-faq-<?php the_sub_field('add_title');?>" type="radio" name="release-gold-faq" class="visuallyhidden js_faq_toggle" checked="">
									<label for="release-gold-faq-<?php the_sub_field('add_title');?>" class="question block row space-25-top-bottom">
										<div class="title columns small-11 space-25">
											<div class="h6 medium" style="font-weight: 800;"><?php the_sub_field('add_title');?></div>
										</div>
										<div class="toggle columns small-1"><div class="arrow"><span class="a1"></span><span class="a2"></span></div></div>
									</label>
									<div class="answer fill-neutral-2 radius-50">
										<div class="p space-50"><!-- wp:paragraph {"placeholder":"Type in a detailed answer here..."} -->
<p><?php the_sub_field('add_description');?></p>
</div>
									</div>
								</div>
                <?php endwhile; ?>
													</div>
						<label class="hide-faqs columns small-12 text-center" for="more-release-gold-faqs">
							<div class="button fill-neutral-2">Show All FAQs</div>
						</label>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>

<!-- START testimonials -->
<?php require_once __ROOT__ . '/pages/section/home-testimonial.php'; ?>
<!-- END: Testimonial Section -->

 <div class="home-blog-and-media">
 
<?php 
$wpb_all_query = new WP_Query(array(
                        'post_type'=>'post',
                        'post_status' => 'publish',
                        'posts_per_page'=> 3,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    )); ?>
                    <?php if ( $wpb_all_query->have_posts() ) : ?>
<section class="blog-grid space-200-top space-200-bottom bg-dark-grey items">
<div class="text-center mb-5">
<h2 class="mt-5 mb-5">Blogs</h2></div>
    <div class="container">
        <div class="row">
        <div class="blog-grid-inner">
        <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
<div class="columns small-12 large-4 pd-10 mb-4">
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
<div class="mb-4 justify-content-between align-items-center mt-4">
<h6><?php the_category(); ?></h6>
<p class="time-text">5min read</p>
</div>
<a href="<?php the_permalink(); ?>"><div class="except">
<?php the_title(); ?></div></a>
<div class="d-flex-all mt-2">
<p class="author-name mb-3"><?php the_field('add_short_content');
	?><span class="bg-light-grey f-500">Read More..</span></p>
</div>
</div></a>
<?php endwhile; ?></div>
<div class="text-center mt-5"><a href="/blog">
<div class="button fill-neutral-2">Show More</div></a></div>
</div>
</div></div>
</div>
                  </section> <?php endif; ?></div>
                  






<?php
require_once __ROOT__ . '/pages/partials/footer.php'; ?>



<style>
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
        .release-box {padding: 32px; display:table-cell;
    vertical-align:middle;}


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

 /* home blog and media css STARTS */
 .f-500{font-weight:500;}
    .bg-light-grey{
color:#000000;
opacity: 0.5;

    }
    .mt--6{
        margin-top: -6px;
    }
    .mt--20{
        margin-top: -20px;
    }
.pb-30p{
    padding-bottom: 30%;
}

 /*hide default arrows*/
 .sample-slider [class^="swiper-button-"]::after{
        content: "";
    }
    /*adjust arrow size*/
    .sample-slider [class^="swiper-button-"]{
        width: 55px;
        height: 55px;
    }
    /*adjust arrow position*/
    .sample-slider .swiper-button-next{
        top: 84%;
        right: 115px;
    }
    .sample-slider .swiper-button-prev{
        top: 84%;
        left: 115px;
    }
.home-blog-and-media h2 {
    font-size: 32px;
    font-weight: 800;
}
.blog-grid-inner img{
  border-radius:8px;
}
.home-blog-and-media .blog-grid-inner .author-name {
  display:block;
    padding-left: 0px;
}


.home-blog-and-media .blog-grid img {
    border-radius: 8px;
}
/* Style the tab */

.home-blog-and-media .time-text{
        line-height: 32px!important;
    }

    /* blog list style starts */
    .home-blog-and-media .blog-grid a{
        text-decoration:none;
    }

    .home-blog-and-media .d-flex-all{

        display:flex!important;
    }
    .home-blog-and-media .blog-grid-inner .justify-content-between {
    justify-content: space-between!important;
}

    .bg-dark-grey{
  background-color: #E9E9E7;
}

    /* blog list style ends */
    

    .home-blog-and-media .geeks {
    text-align: center;
    overflow: hidden;
    background-color: #FFC980;
    position: relative;
}
.home-blog-and-media .geeks a {
    text-decoration: none;
    color: #0032A0;
    padding: 14px 16px;
    font-size: 16px;
    display: block;
}
.home-blog-and-media .geeks a.icon {
    display: block;
    position: absolute;
    right: 33%;
    top: 0;
}


/* banner section style starts */
.home-blog-and-media .blog-listing .slider-banner p {
    color: white;
    padding-bottom: 33%;
    font-size: 18px!important;
}

.home-blog-and-media .blog-listing .slider-banner h1 {
    font-size: 42px;
    font-weight: 800;
   
}

/* banner section style ends */

.home-blog-and-media .duration::before{
	top: -2px;
    position: relative;
	padding-right: 13px;
    content: url(https://whitegold.money/cms/../content/cms/Vector.svg);
    padding-left: 19px;
}


.home-blog-and-media .time-text::before{
	position: relative;
    content: url(https://whitegold.money/cms/../content/cms/fa-solid_book-open.svg);
    right: 7px;
    top: 2px;

}
.home-blog-and-media .blog-grid-inner .author-name {
    padding-top: 4px;
    padding-left: 0px;
}

.home-blog-and-media .blog-grid-inner .except {
	font-size:20px;
    font-weight: 700;
}

.home-blog-and-media .except::after{
	position: relative;
    content: url(https://whitegold.money/cms/../content/cms/charm_arrow-right.svg);
    left: 5px;
    top: 3px;
}

.home-blog-and-media .time-text{
	float:right;
}
	
.home-blog-and-media .blog-grid-inner .author-name {
    padding-left: 0px;
}

.home-blog-and-media .blog-grid-inner h6 {
    margin: 0 auto;
    text-align: center;
    line-height: 8px;
    display: inline-flex;
    background-color: #B3D4FC;
    padding: 7px;
    border-radius: 4px;
    font-size: 14px;
    font-weight: 600;
    color: #0032A0;
    width: 119px;
    height: 38px;
}
.home-blog-and-media .blog-grid-inner .post-categories{
    margin:0 auto;
    list-style:none;
}


.home-blog-and-media .tags{
	display: unset;
    margin-left: 10px;
}

.home-blog-and-media .date{
	margin-left: auto;
}

.home-blog-and-media .blog-detail-box .fa{
	margin-top: -4px;
	font-size:24px;
color:#0032A0;
padding-right: 14px;
margin-left: auto;

}

.home-blog-and-media .author{
		padding-left: 15px;
	}
.home-blog-and-media .logo-company{
	width: 50px;
    height: 50px;
}

.home-blog-and-media .blog-detail-box{
	border-radius: 16px;
	background-color:white;
	padding:20px;
}

.home-blog-and-media .bg-grey2{
	background-color:#F1F1F1;
}

.home-blog-and-media .blog-detail-box .category{
	display: table-cell;
	background-color: #FFC980;
    padding: 7px 15px 7px 15px;
    border-radius: 4px;
    font-size: 16px;
    font-weight: 600;
    color: #0032A0;
}
.home-blog-and-media .blog-detail-box .category .post-categories{
	background-color: #FFC980;
    padding: 7px;
    border-radius: 4px;
    font-size: 16px;
    font-weight: 600;
    color: #0032A0;
	list-style:none;
}
@media screen and (max-width:767px){

  .home-blog-and-media .tabcontent {
    display: none;
    padding: 0px!important;
    border-top: none;
}
}
@media (max-width: 600px){
    /* banner css for mobile starts */

    .home-blog-and-media .blog-grid .container {
    max-width: 380px;
}
.home-blog-and-media .blog-listing .slider-banner p {
    color: white;
    padding-bottom: 12%!important;
}
.home-blog-and-media .blog-detail-box .fa {
    font-size: 16px;  
}
.home-blog-and-media .date {
    float: right;
}
}

@media only screen and (min-device-width: 480px) 
                   and (max-device-width: 1000px) 
                   and (orientation: landscape) {


                    .home-blog-and-media .blog-listing .slider-banner p {
    color: white;
    padding-bottom: 3%;
    font-size: 18px!important;
}

.home-blog-and-media .date {float: right;}
	   }

	   @media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 480px)
  and (-webkit-min-device-pixel-ratio: 2)
  and (orientation: landscape) {
    

	.home-blog-and-media .date {float: right;}


  }

.home-blog-and-media .tab {
  overflow: hidden;
  display: flex;
  justify-content: center;
  background-color: #e9e9e7;
}

/* Style the buttons inside the tab */
.home-blog-and-media .tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 2px 26px;
  transition: 0.3s;
  font-size: 17px;
  color: black;
  margin-left: 10px;
}

/* Change background color of buttons on hover */
.home-blog-and-media .tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.home-blog-and-media .tab button.active {
    background-color: #fff;
}

/* Style the tab content */
.home-blog-and-media .tabcontent {
  display: none;
  padding: 6px 12px;
  border-top: none;
}
   /* home blog and media css END*/
 
   @media (min-width: 1025px){
.pt-24cm {
    padding-top: 24%;
}
   }
   @media (max-width: 1025px){
   .cms-content2 .btn-custom-primary {
    font-size: 16px!important;
}
.cms-content2 .btn-custom-primary {
    border-radius: 10px;
    margin-right: 15px;
    padding: 10px 30px 10px 30px;
} }

.sell-gold-section .step-cards .card .index {
    background-color: white;
    color: #1e50cc;
    box-shadow: inset 0 0 0 calc(var(--space-25)/3) #1e50cc;
}
.sell-gold-section .step-cards .card .toggle .arrow .a1, .step-cards .card .toggle .arrow .a2 {
    background-color: #1e50cc;
    box-shadow: 0 0 0 1px #1e50cc;
}
.sell-gold-section p {
    color: black;
}

.pledge-gold ul li:before{
    color: #f7f7f7;
    font-family: 'FontAwesome';
    content: "\f00c";
    background-color: #012c8c00;
    border-radius: 46px;
    font-weight: 300;
    padding: 4px 0px 0px 3px;
    font-size: 7px;
    position: absolute;
    top: 1px;
    left: 0px;
    width: 15px;
    height: 15px;
    line-height: 7px;
    border: 1px solid #ffffff;
}
.pledge-gold ul li {
    font-size: 15px;
    list-style: none;
    padding-left: 20px;
    position: relative;
    color: #ffffffe6;
}
.point-box{border-radius: 50px;padding: 10px 48px;font-size:17px;}
.release-box{background: #ffffff;padding: 20px;height: 200px; display:table-cell;
    vertical-align:middle;}
.documents .bg-box{background: #FFFFFF;
box-shadow: 0px 4px 24px rgba(0, 0, 0, 0.08);
border-radius: 8px;padding:20px;}

.documents .bg-box p{padding-left: 10px;}


@media (max-width: 600px){
    .documents .bg-box{background: #FFFFFF;
box-shadow: 0px 4px 24px rgba(0, 0, 0, 0.08);
border-radius: 8px;padding:13px;}
    .documents .container {max-width: 380px;}
.pbbtm-sm{padding-bottom: var(--space-200);}
}
.instant-cash .inner{padding:13px;border-radius: 8px;}
.step-cards .card > input:checked ~ .card-head .index {
    color: #0032a0;}
</style>


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
