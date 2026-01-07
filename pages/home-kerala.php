<?php
/**
 |
 | Home page
 |
 */

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

require_once __ROOT__ . '/pages/partials/header.php';

?>





<!-- ## General Page -->
<script>
	console.log( "here." )
</script>
<?php require_once __ROOT__ . '/pages/section/header.php'; ?>


<!-- ## Home Page -->
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
<?php require_once __ROOT__ . '/pages/section/sell-gold-form.php'; ?>
<!-- END: Sell Gold Form Section -->


<!-- Sell Gold Section -->
<?php require_once __ROOT__ . '/pages/section/sell-gold.php'; ?>
<!-- END: Sell Gold Section -->


<!-- Sell Gold Home Visit Form Section -->
<?php // require_once __ROOT__ . '/pages/section/sell-gold-home-visit-form.php'; ?>
<!-- END: Sell Gold Home Visit Form Section -->


<!-- Sell Gold FAQs Section -->
<?php require_once __ROOT__ . '/pages/section/sell-gold-faqs.php'; ?>
<!-- END: Sell Gold FAQs Section -->


<!-- Report Malpractice Section -->
<!-- aka "Don't Get Cheated", "File Complaint" -->
<?php require_once __ROOT__ . '/pages/section/report-malpractice.php'; ?>
<!-- END: Report Malpractice Section -->


<!-- Release Gold Section -->
<?php require_once __ROOT__ . '/pages/section/release-gold.php'; ?>
<!-- END: Release Gold Section -->


<!-- Release Gold FAQs Section -->
<?php require_once __ROOT__ . '/pages/section/release-gold-faqs.php'; ?>
<!-- END: Release Gold FAQs Section -->

<!--  START why-white-gold section -->
<?php require_once __ROOT__ . '/pages/section/home-why-whitegold.php'; ?>
<!-- END: why-white-gold Section -->

<!-- career home Section -->
<?php require_once __ROOT__ . '/pages/section/includes/home-career.php'; ?>
<!-- END: career home Section -->


<!-- START testimonials -->
<?php require_once __ROOT__ . '/pages/section/home-testimonial.php'; ?>
<!-- END: Testimonial Section -->




<!-- START: location Section -->
<?php require_once __ROOT__ . '/pages/section/home-reach-us-kl.php'; ?>

<!-- END: location Section -->



<footer class="space-200-bottom space-200-top fill-dark pt-5 pb-5">
<div class="container">
<div class="row d-flex"><!-- row start -->

<div class="columns small-12 large-8 text-md-right text-sm-center align-self-center text-tab-center">
White Gold 2025, all rights reserved.
</div>
<div class="columns small-12 large-4 text-md-right text-sm-center mt-mbl-4 text-tab-center">

<!-- <div class="social-icons">
<a href="https://www.facebook.com/whitegold.money/?swcfpc=1" target="_blank" aria-label="facebook"><img src="https://staging.whitegold.money/cms/../content/cms/Group-217.svg" class="img-fluid ml-5px"></a>
<a href="https://www.linkedin.com/company/white-gold-india/" target="_blank" aria-label="linked-in"><img src="https://staging.whitegold.money/cms/../content/cms/Group-220.svg" class="img-fluid ml-5px"></a>
<a href="https://instagram.com/whitegold.money?igshid=YmMyMTA2M2Y=&amp;swcfpc=1" target="_blank" aria-label="instagram"><img src="https://staging.whitegold.money/cms/../content/cms/Group-219.svg" class="ml-5px img-fluid"></a>
<a href="https://twitter.com/whitegold_money?s=21&amp;t=XjezEzzMapqJvw2naUEyFg&amp;swcfpc=1" target="_blank" aria-label="Twitter"><img src="https://staging.whitegold.money/cms/../content/cms/Group-3991253-1.svg" class="img-fluid ml-5px"></a>
<a href="https://youtube.com/channel/UCm2R8_Z8hRuOywELr6CjT7A" target="_blank" aria-label="youtube"><img src="https://staging.whitegold.money/cms/../content/cms/Group-3991254.svg" class="img-fluid ml-5px"></a>
</div> -->

</div>

</div><!-- row end -->
</div>


</footer>

<?php require_once __ROOT__ . '/pages/partials/footer.php'; ?>

<script type="text/javascript" src="/js/pages/home/sell-gold-form.js<?= $ver ?>"></script>
<script type="text/javascript" src="/js/pages/home/home-visit-form.js<?= $ver ?>"></script>
<!-- <script type="text/javascript" src="/js/pages/home/login-prompts.js<?= $ver ?>"></script> -->



<style>

.footer-section{
	display:none;
}

@media screen and (min-width: 767px) {
    .text-md-right {
        text-align: right !important;
    }
}

	</style>
