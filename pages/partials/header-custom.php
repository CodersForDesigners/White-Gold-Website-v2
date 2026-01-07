<?php
/**
 | The header.
 |
 | This is the template that displays all of the <head> section and everything up until main.
 |
 */

// Get utility functions
require_once __ROOT__ . '/lib/utils.php';
require_once __ROOT__ . '/lib/providers/wordpress.php';

use BFS\CMS\WordPress;
use BFS\Router;



/*
 * A version number for versioning assets to invalidate the browser cache
 */
global $versionNumber;
$versionNumber = BFS_ASSET_VERSION_NUMBER;
$ver = '?v=' . $versionNumber;

/*
 * A class name for temporarily disabling sections or features or content parts while in development
 */
$hide = 'hidden';
$showMedium = 'show-for-medium';


$languageAttributes = WordPress::$isEnabled ? get_language_attributes() : 'lang="en" xmlns="http://www.w3.org/1999/xhtml" prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml"';


http_response_code( Router::$httpResponseCode );

$contactNumbersForRegions = PHONE_NUMBERS;

?>
<!doctype html>
<html <?= $languageAttributes ?>>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
	<?php require_once __ROOT__ . '/pages/partials/head.php'; ?>
    <link rel="stylesheet" type="text/css" href="/css/careers.css<?= $ver ?>">

<script type="text/javascript" src="/plugins/geolib/geolib-v3.3.1.min.js"></script>
<script type="text/javascript" src="/js/pages/branch-finder.js<?= $ver ?>"></script>
<style>
.location-lp th:last-child, td:last-child {
    background-color: var(--blue-5)!important;
}
@media (max-width: 760px){
.price-section table tr td:nth-child(2) ul li:before, .price-section table tr td:nth-child(3) ul li:before {
    top: -21px!important;
    left: 6px!important;
}
.location-lp .price-section table ul li {
    font-size: 1.2rem!important;
}
.location-lp .price-section table tr td:nth-child(2) ul li:before, .price-section table tr td:nth-child(3) ul li:before {
    top: -21px!important;
    left: 6px!important;
}
.location-lp .price-section table tr td:nth-child(3), .price-section table th:nth-child(3){
vertical-align: middle!important;
}
}
</style>
</head>

<body class="<?= ( WordPress::$isEnabled and ! WordPress::$onlySetupContext ) ? implode( ' ', get_body_class() ) : 'body' ?> <?php the_field('page_class'); ?> location-lp" id="body">
<?php if ( WordPress::$isEnabled and ! WordPress::$onlySetupContext ) wp_body_open(); ?>

<?= WordPress::get( 'arbitrary_code_after_body_opening' ) ?? <<<ARB
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TLN9437"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
ARB
?>

<!--  ★  MARKUP GOES HERE  ★  -->

<div id="page-wrapper"><!-- Page Wrapper -->

	<div id="page-content"><!-- Page Content -->
