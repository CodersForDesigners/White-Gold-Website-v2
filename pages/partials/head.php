<?php

use BFS\CMS\WordPress;
use BFS\Router;

global $post;	// WordPress' global post object

if ( ! defined( 'REGION' ) )
	define( 'REGION', DEFAULT_REGION );


// Get the absolute URL of the page
$pageURL = Router::getHostnameURL() . '/' . Router::getSanitizedURLSlug();


// Construct the document's title ( for use in the <title></title> tag )
	// ( if an explicit one is set, use that )
if ( WordPress::$isEnabled and /*WordPress::$onlySetupContext and*/ empty( $documentTitle ) ) {
	$siteTitle = interpolateString(
		$siteTitle ?? get_bloginfo( 'name' ),
		[
			'regionName' => PLACES_IN_REGIONS[ REGION ]
		]
	);
	$siteTagline = interpolateString(
		$siteTagline ?? get_bloginfo( 'description' ),
		[
			'regionName' => PLACES_IN_REGIONS[ REGION ]
		]
	);
	$sectionTitle = $sectionTitle ?? '';
	// if ( Router::$urlSlug == '' )	// i.e. home page
	// 	$postTitle = $postTitle ?? '';
	// else
		$postTitle = $postTitle ?? get_the_title( $post ) ?? '';

	// $documentTitle = implode( ' | ', array_filter( [ $postTitle, $sectionTitle, $siteTitle, $siteTagline ] ) );
	$documentTitle = implode( ' | ', array_filter( [ $postTitle, $sectionTitle, $siteTitle ] ) );
}



/*
 * Meta / SEO
 */
$metaTitle = 'Gold Buyers in ' . PLACES_IN_REGIONS[ REGION ] . ' | Cash for Gold | Release Gold Loan | Gold Rate Today';
$metaDescription = $metaDescription ?? ( WordPress::$isEnabled ? get_bloginfo( 'description' ) : '' );
// $metaDescription = $metaDescription ?? ( WordPress::$isEnabled ? WordPress::get( 'meta_description' ) : '' );
$metaDescription = interpolateString( $metaDescription, [
	'regionName' => PLACES_IN_REGIONS[ REGION ]
] );
$metaDescription = htmlentities( strip_tags( $metaDescription ) );
// if ( defined( 'REGION' ) )
// 	$metaDescription .= ' in ' . PLACES_IN_REGIONS[ REGION ];
// $metaDescription .= '.';

$metaImage = $metaImage ?? WordPress::get( 'meta_image' ) ?? [ ];
$metaImage = $metaImage[ 'sizes' ][ 'medium' ] ?? $metaImage[ 'sizes' ][ 'small' ] ?? $metaImage[ 'sizes' ][ 'thumbnail' ] ?? $metaImage[ 'url' ] ?? '/media/logo.png';


$metaCharset = WordPress::$isEnabled ? get_bloginfo( 'charset' ) : 'utf-8';

?>
<meta charset="<?= $metaCharset ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover" />

<?php // if ( WordPress::$isEnabled and ! WordPress::$onlySetupContext ) : ?>
<?php wp_head(); ?>
<?php // endif; ?>

<?php if ( ! empty( $documentTitle ) ) : ?>
<title><?= htmlentities( $documentTitle ) ?></title>
<?php endif; ?>

<?php if ( ! empty( $baseURL ) ) : ?>
<base href="<?= $baseURL ?>">
<?php endif; ?>

<!--
*
*	Metadata
*
- -->
<!-- Short description of the document (limit to 150 characters) -->
<!-- This content *may* be used as a part of search engine results. -->



<!--
*
*	Authors
*
- -->
<!-- Links to information about the author(s) of the document -->

<!--
*
*	SEO
*
- -->
<!-- Control the behavior of search engine crawling and indexing -->
<meta name="robots" content="index,follow"><!-- All Search Engines -->
<meta name="googlebot" content="index,follow"><!-- Google Specific -->
<meta name="geo.region" content="IN-KA" />
<meta name="geo.placename" content="Bengaluru, Karnataka, India" />
<meta name="geo.position" content="12.933105; 77.613524" />
<!-- Verify website ownership -->
<?php if ( ! empty( WordPress::get( 'google_site_verification_token' ) ?? GOOGLE_SITE_VERIFICATION_TOKEN ) ) : ?>
<meta name="google-site-verification" content="<?= WordPress::get( 'google_site_verification_token' ) ?? GOOGLE_SITE_VERIFICATION_TOKEN; ?>"><!-- Google Search Console -->
<?php endif; ?>


<!--
*
*	UI / Chrome
*
- -->
<!-- Theme Color for Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="<?= WordPress::get( 'theme_color' ) ?? '#f9f9f9' ?>">

<!-- Favicons -->
<link rel="apple-touch-icon" sizes="57x57" href="/media/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/media/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/media/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/media/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/media/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/media/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/media/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/media/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/media/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/media/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/media/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/media/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/media/favicon/favicon-16x16.png">
<link rel="manifest" href="/media/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#444444">
<meta name="msapplication-TileImage" content="/media/favicon/ms-icon-144x144.png">


<!-- ~ iOS ~ -->
<!-- Disable automatic detection and formatting of possible phone numbers -->
<meta name="format-detection" content="telephone=no">
<!-- Launch Screen Image -->
<!-- <link rel="apple-touch-startup-image" href="/path/to/launch.png"> -->
<!-- Launch Icon Title -->
<meta name="apple-mobile-web-app-title" content="<?= WordPress::get( 'apple / ios_app_title' ) ?>">
<!-- Enable standalone (full-screen) mode -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Status bar appearance (has no effect unless standalone mode is enabled) -->
<meta name="apple-mobile-web-app-status-bar-style" content="<?= WordPress::get( 'apple/ios_status_bar_style' ) ?? 'default' ?>">

<!-- ~ Android ~ -->
<!-- Add to home screen -->
<meta name="mobile-web-app-capable" content="yes">
<!-- More info: https://developer.chrome.com/multidevice/android/installtohomescreen -->


<!--
*
*	Social
*
- -->
<!-- Facebook Meta Tags -->
  <meta property="og:url" content="https://whitegold.money/">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Sell Gold for Cash in Bangalore | Top Gold Buyers : White Gold">
  <meta property="og:description" content="White Gold is the top trusted gold buyers in Bangalore. We buy all kinds of used gold and silver jewelry at the best prices with instant cash in Bangalore, Chennai and Kerala.">
  <meta property="og:image" content="https://whitegold.money/media/logo.png">

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta property="twitter:domain" content="whitegold.money">
  <meta property="twitter:url" content="https://whitegold.money/">
  <meta name="twitter:title" content="Sell Gold for Cash in Bangalore | Top Gold Buyers : White Gold">
  <meta name="twitter:description" content="White Gold is the top trusted gold buyers in Bangalore. We buy all kinds of used gold and silver jewelry at the best prices with instant cash in Bangalore, Chennai and Kerala.">
  <meta name="twitter:image" content="https://whitegold.money/media/logo.png">
<meta name="google-site-verification" content="vIWw9DkMi1ZpJJDaL-bW6tk7Uv0dxvzguekOduVypnQ" />
  <!-- Meta Tags Generated via https://www.opengraph.xyz -->

<!-- Stylesheet -->
<?php require_once __ROOT__ . '/style.php'; ?>

<script type="text/javascript">

	window.__BFS = window.__BFS || { };
	window.__BFS.CONF = {
		trackingURL: "<?= BFS_TRACKING_URL ?>",
		cupid: {
			client: "<?= CUPID_CLIENT ?>",
			clientSlug: "<?= CUPID_CLIENT_SLUG ?>",
			sourceMedium: "<?= CUPID_SOURCE_MEDIUM ?>",
			cupidApiEndpoint: "<?= CUPID_API_ENDPOINT ?>",
			authCookieName: "<?= CUPID_AUTH_COOKIE_NAME ?>",
			forceLogoutIfLoggedInBefore: "<?= CUPID_FORCE_LOGOUT_IF_LOGGED_IN_BEFORE ?>"
		},
		goldRates: {
			apiEndpoint: "<?= GOLD_RATE_API_ENDPOINT ?>",
			sessionDurationLimit: <?= GOLD_RATE_SESSION_DURATION_LIMIT ?>
		}
	};

</script>

<!-- jQuery 3 -->
<script type="text/javascript" src="/plugins/jquery/jquery-v3.6.0.min.js<?= $ver ?>"></script>
<!-- Slick Carousell -->
<link rel="stylesheet" type="text/css" href="/plugins/slick/slick.css<?= $ver ?>"/>
<link rel="stylesheet" type="text/css" href="/plugins/slick/slick-theme.css<?= $ver ?>"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/css/custom.css<?= $ver ?>"/>

<!--
*
*	Prevent browsers from (non-smooth) scrolling when a hash is in the URL
*
- -->
<script type="text/javascript">

	if ( window.location.hash ) {
		window.__BFS = window.__BFS || { };
		window.__BFS.scrollTo = window.location.hash;
		window.history.replaceState( { }, "", location.origin + location.pathname + location.search )
	}

</script>

<?= WordPress::get( 'fonts_and_icons_embed' ) ?? <<<ARB
<!-- Fonts -->
<link rel="stylesheet" href="https://use.typekit.net/blr6yui.css">
<!-- Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
ARB
?>
<script>
  function loadGTM() {
    (function(w,d,s,l,i){
      w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});
      var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
      j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
      f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TLN9437');
  }

  window.addEventListener('scroll', loadGTM, {once: true});
  // or
  // window.addEventListener('click', loadGTM, {once: true});
</script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '378972624641028');
    fbq('track', 'PageView');
  });
</script>
<script>
  function loadGTM() {
    (function(w,d,s,l,i){
      w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});
      var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
      j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
      f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T46NWRFW');
  }

  window.addEventListener('scroll', loadGTM, {once: true});
  // or
  // window.addEventListener('click', loadGTM, {once: true});
</script>

<!-- Meta Pixel Code -->
<!--<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '378972624641028');
fbq('track', 'PageView');
</script><!--
<!-- End Meta Pixel Code -->

<!-- Google Tag Manager -->
<!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T46NWRFW');</script> <!--
<!-- End Google Tag Manager -->

<meta name="google-site-verification" content="1nemmZSVubYLzPkoY33xHUkJZioUNuJl98QiDsWoOhI" />
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11480259755"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11480259755');
</script>


<?php
if (strpos($_SERVER['REQUEST_URI'], '/ka') !== false) { ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ImageObject",
  "contentUrl": "https://whitegold.money/content/cms/gold-buyers-og-image.png",
  "name": "Gold Buyers",
  "description": "White Gold - Your Trusted Gold Buyers for competitive prices and fast transactions.",
  "url": "https://whitegold.money/ka",
  "license": "https://whitegold.money/ka",
  "author": {
    "@type": "Organization",
    "name": "White Gold"
  },
  "keywords": "Gold Buyers, Sell Gold, Buy Gold, Gold Selling Service, Trusted Gold Buyers"
}
</script>   
<?php } ?>


