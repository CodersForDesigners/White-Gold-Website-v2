<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();

?>
<?php wp_head(); ?>
<?php require_once __ROOT__ . '/pages/partials/header-cms.php'; ?>

<section class="blog-detail bg-grey2 space-100-top space-100-bottom">
<div class="container">
<?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs"style="display:none;">','</p>' );
}
?>
<div class="blog-detail-box mt-3">
	<div class="mb-4">
<h6 class="category mb-4"><?php the_category(); ?></h6></div>
<h1><?php the_title(); ?></h1>

<div class="d-flex-lg mt-5 company">
	<img src="/cms/../content/cms/Group-36-2.png" class="img-fluid logo-company" alt="whiteGold-logo">
	<p class="author">written by<br><b><?php the_field('author_name');
	?></b></p>
	<div class="date">
	<i class="fa fa-calendar" aria-hidden="true">	
	</i><?php the_date('F j, Y'); ?></div>
	<p class="duration">5min read</p>
</div>
<div class="post-thumbnail mt-5 mb-2">

<?php 
$image =get_field('add_blog_inner_cover_image');
if( !empty($image )): ?>

<img src="<?php echo esc_url($image['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" /><?php endif; ?>
</div>
<?php if( have_rows('tags') ): ?>
	
<?php while( have_rows('tags') ): the_row(); ?><div class="tags"><?php the_sub_field('add_tags');?></div><?php endwhile; ?> 
<?php endif; ?>
<div class="blog-description mt-4 mb-4">
<?php the_content(); ?>
</div>

</div>
<div class="share-icons text-center mt-5 mb-5">
	<h5>Share</h5>
<a href="https://api.whatsapp.com//send?text=<?php the_permalink(); ?>"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
<a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
<a href="https://twitter.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
</div>



<div class="releated-blogs space-100-top space-100-bottom">
<div class="container">
	<div class="text-center mt-4 mb-5">
<h2>Related Blogs</h2></div>
<div class="row">
<?php 
                    $wpb_all_query = new WP_Query(array(
                        'post_type'=>'post',
                        'post_status' => 'publish',
                        'posts_per_page'=> 6,
                        'orderby' => 'date',
                        'order' => 'rand',
                    )); ?>
					<?php if ( $wpb_all_query->have_posts() ) : ?>
						<div class="blog-grid-inner">
						<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
						
<div class="columns small-12 medium-6 large-4 pd-10 mb-4">
<a href="<?php the_permalink(); ?>"><?php
// Get the post thumbnail ID
$thumbnail_id = get_post_thumbnail_id( get_the_ID() );

// Get the alt text for the post thumbnail
$thumbnail_alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );

// Display the post thumbnail with alt text
if ( has_post_thumbnail() ) {
    the_post_thumbnail('full', array(
        'class' => 'img-fluid',
        'alt'   => esc_attr($thumbnail_alt)
    ));
}
?>
<div class="d-flex mb-4 justify-content-between align-items-center mt-4">
<h6><?php the_category(); ?></h6>
<p class="time-text">5min read</p>
</div><a href="<?php the_permalink(); ?>">
<div class="except mb-4">
<?php the_title(); ?></div></a>
<div class="d-flex mt-2">
<img src="https://whitegold.money/cms/../content/cms/Group-36-1.png" class="img-fluid" style="width:26px;height:26px;margin-bottom: -6px;" alt="whitegold-logo">
<p class="author-name"><?php the_field('author_name');
	?></p>
</div>
</div></a>
<?php endwhile; ?></div>
	
<p><?php ( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>

</div>
</div>


</div>

</section>


<section class="blog-newsletter fill-blue-5 space-200-top space-200-bottom" id="subscribenow">
<div class="container">
<div class="row">

<div class="columns small-12 large-12">
  <div class="mt-4 mb-5">
<h2 class="mt-4 mb-5">Subscribe To Our Blog Updates</h2></div>
<div class="mb-5"><p class="">Thank you for visiting our Blog Page, we hope you find our content informative and useful. Subscribe to our blog updates to explore more fascinating topics. </p>
</div>
<?php echo do_shortcode('[contact-form-7 id="1467" title="Contact form 1"]'); ?>

</div>

</div>

</div>

</section>
<style>
.blog-description ul{list-style: circle;margin: 20px 0px 0px 20px;}
.blog-detail-box .post-categories{margin:0 auto;list-style:none;}
.content-block ul:not(.slick-slider) {padding-left: 0px;}
/* form style start	 */
.blog-newsletter p {color: white;font-size: 18px;}
.blog-newsletter h2 {font-size: 32px;font-weight: 800;color: white;}
.btn-custom-primary {font-size: 14px;color: #0032A0!important;background-color: white!important;border-radius: 7px;text-decoration: none!important;font-weight: 700;padding: 14px 15px 13px 15px;position: relative;}
.blog-newsletter ::-webkit-input-placeholder { /* WebKit browsers */color: #ffffff !important;opacity: 0.56;}
.blog-newsletter :-moz-placeholder { /* Mozilla Firefox 4 to 18 */color: #ffffff !important;opacity: 0.56;}
.blog-newsletter ::-moz-placeholder { /* Mozilla Firefox 19+ */color: #ffffff !important;opacity: 0.56;}
.blog-newsletter :-ms-input-placeholder { /* Internet Explorer 10+ */color: #ffffff !important;opacity: 0.56;}
.form-control {display: block;width:97%;padding: 0.375rem 0.75rem;font-size: 1rem;font-weight: 400;line-height: 1.5;color: #212529;background-color: #fff;background-clip: padding-box;border: 1px solid #ced4da;-webkit-appearance: none;-moz-appearance: none;appearance: none;border-radius: 0.375rem;transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
/* form style end	 */.duration::before{top: -2px;position: relative;padding-right: 13px;content: url(https://whitegold.money/cms/../content/cms/Vector.svg);padding-left: 19px;}
.time-text::before{position: relative;content: url(https://whitegold.money/cms/../content/cms/fa-solid_book-open.svg);right: 7px;top: 2px;}
.blog-grid-inner .author-name {padding-left: 10px;}
.blog-grid-inner .except {font-size:20px;font-weight: 700;}
.except::after{position: relative;content: url(https://whitegold.money/cms/../content/cms/charm_arrow-right.svg);left: 5px;top: 3px;}
.time-text{float:right;}.align-items-center {align-items: center!important;}
.blog-grid-inner h6 {margin: 0 auto;text-align: center;line-height: 8px;display: inline-flex;background-color: #B3D4FC;padding: 7px;border-radius: 4px;font-size: 14px;font-weight: 600;color: #0032A0;width: 119px;height: 38px;}
.blog-grid-inner .post-categories {margin: 0 auto;list-style: none;}
.justify-content-between{justify-content: space-between!important;}
.pd-10{padding:10px;}.share-icons h5{font-weight:700;margin-right: 15px;font-size:24px;color:#0032A0;}
.share-icons .fa{margin-right: 13px;font-size: 16px;font-weight: 900;background-color: white;color: #0032A0;padding: 14px;border-radius: 50px;width: 43px;height: auto;}
.text-justify{text-align: justify;}
.tags{display: unset;margin-left: 10px;}
.date{margin-left: auto;}
.blog-detail-box .fa{margin-top: -4px;font-size:24px;color:#0032A0;padding-right: 14px;margin-left: auto;}
.author{padding-left: 15px;}.logo-company{width: 50px;height: 50px;
}p {display: inline-block;font-size: 18px;color: #212322;}
.blog-detail-box{border-radius: 16px;background-color:white;padding:20px;}
h2{font-size:32px;font-weight:800;}
h1{font-size:32px;font-weight:800;}
.bg-grey2{background-color:#F1F1F1;}
.mt-5 {margin-top: 3rem!important;}
.mb-5 {margin-bottom: 3rem!important;}
.mb-4 {margin-bottom: 1.5rem!important;}
.mt-4 {margin-top: 1.5rem!important;}
.mt-2 {margin-top: 0.5rem!important;}
.mb-2 {margin-bottom: 0.5rem!important;}
.blog-detail-box .category{margin: 0 auto;text-align: center;line-height: 8px;display: inline-flex;padding: 7px;border-radius: 4px;font-size: 14px;font-weight: 600;color: #0032A0;width: 119px;height: 38px;}
.blog-detail-box .category .post-categories{margin-left: -12px;border-radius: 4px;font-size: 16px;font-weight: 600;color: #0032A0;list-style:none;}
@media screen and (min-width: 1040px) {
.duration::before{top: -2px;position: relative;padding-right: 13px;content: url(https://whitegold.money/cms/../content/cms/Vector.svg);padding-left: 19px;
}.d-lg-none{display:none!important;} 
.d-md-none{display:none!important;}
.duration{font-size: 1.4rem;display: flex;justify-content: center;}.d-flex-lg{display:flex;}}
@media (max-width: 767px){.date {margin-right: 0px;}}
@media (max-width: 600px){
.duration::before{top: -2px;position: relative;padding-right: 13px;content: url(https://whitegold.money/cms/../content/cms/book-icon-mobile.svg);padding-left: 19px;}
.blog-detail-box .fa {font-size: 16px;  }
.d-md-block{display:none!important;}
.duration::before {top: 0px;position: relative; }
.author {font-size: 16px;position: relative;padding-left: 7px;top: -7px;}.date {float: right;}
.duration{margin-top: -24px;float: right;margin-right:auto;font-size: 1.4rem;}
.blog-detail .container {max-width: 380px!important;}}
@media only screen and (min-device-width: 480px) and (max-device-width: 1000px) and (orientation: landscape) {
.duration::before{top: -2px;position: relative;padding-right: 13px;content: url(https://whitegold.money/cms/../content/cms/Vector.svg);padding-left: 19px;}
.date {float: right;}.duration::before {top: 3px;position: relative;padding-right: 13px;}.duration{position: relative;left: 30.5%;top: 8px;}
.d-md-block{display:none!important;}}
@media only screen and (min-device-width: 320px) and (max-device-width: 480px)and (-webkit-min-device-pixel-ratio: 2)and (orientation: landscape) {.date {float: right;}
.duration::before {top: 3px;position: relative;padding-right: 13px;}
.duration{position: relative;left: 36.5%;top: 8px;}
.d-md-block{display:none!important;}}
  .blog-detail-box .category .post-categories li{border-radius: 4px;padding: 17px 18px 22px 20px;background-color: #B3D4FC;margin-left: 8px;}
  .blog-detail-box .category .post-categories{display:flex;}
  table {width: 100%;border: 1px solid #000;}
td {border: 1px solid;padding: 10px !important;}

.blog-detail-box li span{
display: inline-block;
    font-size: 13px;
}
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Find all anchor tags with specific rel attribute
        var anchorTags = document.querySelectorAll('a[rel="category tag"]');

        // Loop through each anchor tag
        anchorTags.forEach(function(anchorTag) {
            // Create a new span element
            var spanTag = document.createElement('span');

            // Copy the content of the anchor tag to the span tag
            spanTag.innerHTML = anchorTag.innerHTML;

            // Replace the anchor tag with the new span tag
            anchorTag.parentNode.replaceChild(spanTag, anchorTag);
        });
    });
</script>


<?php wp_footer(); ?>
<?php get_footer(); ?>
