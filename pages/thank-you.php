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
	return require_once __ROOT__ . '/pages/home.php';

\BFS\Router::$httpResponseCode = 404;

require_once __ROOT__ . '/pages/partials/header.php';

?>

<?php require_once __ROOT__ . '/pages/section/header.php'; ?>

<div class="pageWrapper section">

    <div class="container">
          
    <div class="thankYou">

           <div class="text-center">
 
			   			   <img src="/cms/../content/cms/thankyou-whitegold.png" class="img-fluid"><br>

			   <h1>Thanks for reaching out!</h1><br>
<h4>Your enquiry has been received and we will be contacting you shortly! If you would like to speak to our representative immediately, please call - <a href="tel://9590704444">9590704444</a></h4>
			   			               </div>
                                       <div class="text-center">
                                          <a href="/"><div class="button fill-blue-5 mt-5">Back to Home</div></a></div>
    </div>
        
    </div>

</div>
<style>.img-fluid {
    max-width: 100%;
    height: auto;
}
.thankYou h1 {
    font-size: 32px!important;
    font-weight: 500;
}
.thankYou h4 a{
    color:#0032a0;
}
</style>
<?php
require_once __ROOT__ . '/pages/partials/footer.php';

