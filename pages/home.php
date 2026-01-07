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
<?php require_once __ROOT__ . '/pages/section/w-sell-gold-form.php'; ?>
<!-- END: Sell Gold Form Section -->




<!-- Sell Gold Section -->

<?php
$current_url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (
    $current_url_path == '/ka'
) {
    require_once __ROOT__ . '/pages/section/sell-gold.php';
}
?>

<!-- END: Sell Gold Section -->

<?php
$current_url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (
	$current_url_path == '/ap' ||
	$current_url_path == '/ts'
) {
    require_once __ROOT__ . '/pages/section/sell-gold-ap.php';
}
?>


<?php
$current_url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($current_url_path == '/kl') {
    require_once __ROOT__ . '/pages/section/sell-gold-kl.php';
}
?>



<!-- Sell Gold Home Visit Form Section -->
<?php // require_once __ROOT__ . '/pages/section/sell-gold-home-visit-form.php'; ?>
<!-- END: Sell Gold Home Visit Form Section -->


<!-- Sell Gold FAQs Section -->
<?php require_once __ROOT__ . '/pages/section/sell-gold-faqs.php'; ?>
<!-- END: Sell Gold FAQs Section -->


<!-- Report Malpractice Section -->
<?php
$current_url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (
    $current_url_path == '/ka' 
) {
    require_once __ROOT__ . '/pages/section/report-malpractice.php';
}
?>


<?php
$current_url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (
        $current_url_path == '/ts' ||
        $current_url_path == '/ap'
) {
    require_once __ROOT__ . '/pages/section/report-malpractice-ap.php';
}
?>



<?php
$current_url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($current_url_path == '/kl') {
    require_once __ROOT__ . '/pages/section/report-malpractice-kl.php';
}
?>
<!-- END: Report Malpractice Section -->


<?php
$current_url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (
    $current_url_path == '/ka'
) {
    require_once __ROOT__ . '/pages/section/release-gold.php';
}
?>



<?php
$current_url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (
        $current_url_path == '/ts' ||
        $current_url_path == '/ap' 
) {
    require_once __ROOT__ . '/pages/section/release-gold-ap.php';
}
?>


<?php
$current_url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($current_url_path == '/kl') {
    require_once __ROOT__ . '/pages/section/release-gold-kl.php';
}
?>


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

<!-- START refer and earn -->
<?php require_once __ROOT__ . '/pages/section/home-refer-and-earn.php'; ?>
<!-- END: refer and earn -->

<!-- START blog AND media -->
<?php require_once __ROOT__ . '/pages/section/includes/home-blog-and-media.php'; ?>
<!-- END: blog AND media -->
<!-- START: location Section -->
<?php require_once __ROOT__ . '/pages/section/home-reach-us.php'; ?>

<!-- END: location Section -->

<?php require_once __ROOT__ . '/pages/partials/footer.php'; ?>

<script type="text/javascript" src="/js/pages/home/sell-gold-form.js<?= $ver ?>"></script>
<script type="text/javascript" src="/js/pages/home/home-visit-form.js<?= $ver ?>"></script>
<!-- <script type="text/javascript" src="/js/pages/home/login-prompts.js<?= $ver ?>"></script> -->
