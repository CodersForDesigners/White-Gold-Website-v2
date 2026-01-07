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

<main id="site-content" class="content-block">


<div class="blog-listing">

<?php 
                    $image = get_field('add_blog_banner_desktop');
                    if( !empty( $image ) ): ?>
<section class="slider-banner fill-blue-5 space-200-top d-none d-md-block" style="
background-image: url(<?php echo esc_url($image['url']); ?>);background-position: right 0% bottom 45%;background-size: contain;background-repeat: no-repeat;" alt="<?php echo esc_attr($image['alt']); ?>">
<?php endif; ?>
<div class="container">
		<!-- row starts -->
<div class="row">
<div class="columns small-12 large-6 medium-12">
<h1 class="mt-5 mb-4"><?php the_field('add_blog_banner_title');?></h1>
<p><?php the_field('add_blog_banner_description');?></p>
</div>

<div class="columns small-12 large-6 medium-12">
</div>
<div>
<!-- row ends -->
</div>
</section>
<!-- banner section desktop version ends -->


<!-- banner mobile version starts -->
<div class="blog-mobile-banner d-lg-none">
<section class="slider-banner fill-blue-5 space-100-top">

<div class="container">
		<!-- row starts -->
<div class="row">
<div class="columns small-12 large-4 medium-12">
<h1 class="mb-4"><?php the_field('add_blog_banner_title');?></h1>
<p><?php the_field('add_blog_banner_description');?></p>
</div>

<div class="columns small-12 large-4 medium-12">
    <?php
$imagemobile = get_field('add_blog_banner_mobile');
                    if( !empty( $imagemobile ) ): ?>
	<div class="bg-mobile" style="background-image: url(<?php echo esc_url($imagemobile['url']); ?>);background-position: right 0% bottom 45%;background-size: cover;background-repeat: no-repeat;height: 232px;position:relative;
    left:4.5%;top:-8%;" alt="<?php echo esc_attr($imagemobile['alt']); ?>">
	</div><?php endif; ?>
</div>

<div>
<!-- row ends -->

</div>
</section></div>

<!-- banner mobile version ends -->


<!-- <nav class="navbar navbar-expand-lg navbar-light bg-white">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  <div class="container">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link filters__btn  js-filter" data-color="all" href="javascript:void(0)">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link filters__btn  js-filter" data-color="Gold" href="javascript:void(0)">Gold</a>
      </li>
      <li class="nav-item">
        <a class="nav-link filters__btn  js-filter" data-color="Investment" href="javascript:void(0)">Investment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link filters__btn  js-filter" data-color="Selling-gold" href="javascript:void(0)">Selling gold</a>
      </li>
      <div class="search">
      <i class="fa fa-search fa-fw" aria-hidden="true"></i>
            <input type="text" placeholder="Search Here" data-search="" style="
    background-color: #E9E9E7!important;
    padding-left: 50px!important;border-radius: 50px!important;
">
            
            <a class="btn-custom-blue" href="#subscribenow">Subscribe Now</a>
        </div>
        
    </ul> 
    
  </div>
  </div>
</nav> -->

<!-- Navbar 3 -->
<div class="blog-listing-menu container">
<nav class="nav nav-3 d-none d-md-block">
    <li>
      <a href="JavaScript:void(0);" data-color="all" class="filters__btn  js-filter" onclick="geeksforgeeks()">Home</a>
    </li> 
<?php 
                    $args01 = array(
                        'taxonomy'=>'category',
                        'hide_empty'=>'false'
                    );
                    $cats =get_categories($args01);
                    foreach ($cats as $cat): $selector = 'category_' . $cat->term_id; ?>

    <li>
      <a href="JavaScript:void(0);" data-color="<?php echo $cat->name; ?>" class="filters__btn  js-filter"> <?php echo $cat->name; ?></a>
    </li>
    <?php endforeach; ?>
  <div class="search">
      <i class="fa fa-search fa-fw" aria-hidden="true"></i>
            <input type="text" placeholder="Search Here" data-search="" style="
    background-color: #E9E9E7!important;color: black;
    padding-left: 50px!important;border-radius: 50px!important;margin-right: 20px;
">
            
            <a class="btn-custom-blue" href="#subscribenow">Subscribe Now</a>
        </div>
</nav></div>
</div>


<section class="search-bar-mobile d-lg-none d-md-none">

<div class="search text-center mt-4">
      <i class="fa fa-search fa-fw" aria-hidden="true"></i>
            <input type="text" placeholder="Search Here" data-search / style="
    background-color: #E9E9E7!important;
    padding-left: 82px!important;
    border-radius: 50px!important;
">
            
            <a class="btn-custom-blue mt-4 mb-4" href="#subscribenow">Subscribe Now</a>
        </div>
                  </section>
<section class="d-lg-none d-md-none" style="background-color:#FFC980;">
        <div class="menu-list">
 
 <!-- Logo and navigation menu -->
 <div class="geeks container">
     <a href="javascript:void(0)" data-color="all" class="filters__btn  js-filter" onclick="geeksforgeeks()">Home</a>
     <?php 
                    $args02 = array(
                        'taxonomy'=>'category',
                        'hide_empty'=>'false'
                    );
                    $cats =get_categories($args02);
                    foreach ($cats as $cat): $selector = 'category_' . $cat->term_id; ?>
     <div id="menus">
         <a href="javascript:void(0)" class="filters__btn  js-filter" data-color="<?php echo $cat->name; ?>"><?php echo $cat->name; ?></a>
         
         <?php endforeach; ?>
     </div>

     <!-- Bar icon for navigation -->
     <a href="javascript:void(0);" class="icon"
             onclick="geeksforgeeks()">

         <i onclick="myFunction(this)"
                 class="fa fa-angle-down">
         </i>
     </a>
 </div>
</div>
</section>






<?php
// Example for any archive page using the Wordpress Loop
if ( have_posts() ) {
    while ( have_posts() ) { ?>
        <?php the_post(); ?>
        <?php global $post; ?>
    <?php } // end while ?>
    <?php wp_pagenavi(); ?>
<?php } // end if ?>
<section class="blog-grid space-100-top space-200-bottom bg-dark-grey items">
    <div class="container">
        <div class="row">
        <div class="blog-grid-inner">
        <?php 
// Example for adding WP PageNavi to a new WP_Query call
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array('post_type' => 'post', 'posts_per_page' => 9, 'paged' => $paged);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();?>
<div class="columns small-12 large-4 medium-6 pd-10 mb-4 js-filterable" data-filter-item data-filter-name="<?php the_title(); ?>" data-color="">
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
<div class="d-flex mb-4 justify-content-between align-items-center mt-4">
<h6><?php the_category(); ?></h6>
<p class="time-text">5min read</p>
</div>
<a href="<?php the_permalink(); ?>"><div class="except mb-4">
<?php the_title(); ?></div></a>
<div class="d-flex-all mt-2">
<img src="https://whitegold.money/cms/../content/cms/Group-36-1.png" class="img-fluid" style="width:26px;height:26px;margin-bottom: -6px;" alt="whitegold">
<p class="author-name"><?php the_field('author_name');
	?></p>
</div>
</div></a>
<?php endwhile; ?>
<?php wp_pagenavi( array( 'query' => $loop ) ); ?></div>
</div></div>
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


</main><!-- #site-content -->



<style>

.blog-listing-menu .nav li{
    text-decoration:none;
    list-style:none;
}

.blog-listing-menu .nav li a{
    font-size: 16px;
    color: #212322;
    font-weight: 500;
    padding: 13px 12px 0px 12px;
    text-decoration:none;
}

    .time-text{
        line-height: 32px!important;
    }

    /* js filter css starts */
.is-hidden {
  display: none;
}
.hidden {
	display: none;
}
/* js filter css ends */

    /* blog list style starts */
    .blog-grid a{
        text-decoration:none;
    }

    .d-flex-all{

        display:flex!important;
    }
    .blog-grid-inner .justify-content-between {
    justify-content: space-between!important;
}

    .bg-dark-grey{
  background-color: #E9E9E7;
}

    /* blog list style ends */
    
    .blog-listing .btn-custom-blue {
    padding: 15px 72px 13px 71px!important;
}

.blog-listing .search .fa {
    -webkit-text-stroke: 0.5px #eaeaea;
    position: absolute;
    z-index: 2;
    display: block;
    width: 5.375rem;
    height: 2.375rem;
    line-height: 4.899rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
    font-size: 16px;
    font-weight: 600;
}

.btn-custom-blue {
    color: white!important;
    background-color: #0032A0;
    padding: 15px 15px 13px 15px;
    border-radius: 8px;
    text-decoration: none!important;
    font-weight: 700;
}  


.geeks {
    text-align: center;
    overflow: hidden;
    background-color: #FFC980;
    position: relative;
}
.geeks a {
    text-decoration: none;
    color: #0032A0;
    padding: 14px 16px;
    font-size: 16px;
    display: block;
}
.geeks a.icon {
    display: block;
    position: absolute;
    right: 33%;
    top: 0;
}

.search-bar-mobile .search .fa {
    left: 42px;
    -webkit-text-stroke: 0.5px #eaeaea;
    position: relative;
    z-index: 2;
    line-height: 4.899rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
    font-size: 19px;
    top: 1px;
}


.nav {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  font-family: Montserrat, sans-serif;
  background-color: var(--nav-bg);
  padding: 20px 30px;
  color: var(--nav-color);
  margin-bottom: 1em;
  border-bottom: var(--nav-border) solid 1px;
}

.nav-logo {
  font-weight: bold;
  font-size: 1.1em;
  color: var(--nav-logo);
  text-decoration: none;
}

.nav-list {
  list-style: none;
}

.nav-list li {
  display: inline-block;
  margin-left: 1em;
}

.nav-list a {
  color: var(--nav-link);
  text-decoration: none;
  transition: color 0.3s ease;
}

.nav-list a:hover {
  color: var(--nav-link-hover);
}

/* Navbar 2 */
.nav-2 {
  justify-content: space-between;
}

/* Navbar 3 */
.nav-3 {
  justify-content: space-between;
}

/* Contact button */
.nav-btn {
  background-color: var(--nav-btn);
  border: none;
  color: #fff;
  padding: 10px 20px;
  border-radius: 10px;
  cursor: pointer;
}




.navbar {

display: flex;

align-items: center;

justify-content: space-between;

padding: 20px;

background-color: teal;

color: #fff;

}

.nav-links a {

color: #fff;

}

/* LOGO */

.logo {

font-size: 32px;

}

/* NAVBAR MENU */

.menu {

display: flex;

gap: 1em;

font-size: 18px;

}

.menu li:hover {

background-color: #4c9e9e;

border-radius: 5px;

transition: 0.3s ease;

}

.menu li {

padding: 5px 14px;

}

/* DROPDOWN MENU */

.services {

position: relative;

}

.dropdown {

background-color: rgb(1, 139, 139);

padding: 1em 0;

position: absolute; /*WITH RESPECT TO PARENT*/

display: none;

border-radius: 8px;

top: 35px;

}

.dropdown li + li {

margin-top: 10px;

}

.dropdown li {

padding: 0.5em 1em;

width: 8em;

text-align: center;

}

.dropdown li:hover {

background-color: #4c9e9e;

}

.services:hover .dropdown {

display: block;

}











/* navbar css starts */
.navbar-collapse {
    flex-basis: 100%;
    flex-grow: 1;
    align-items: center;
}



/* navbar css ends */


/* banner section style starts */
.blog-listing .slider-banner p {
    color: white;
    padding-bottom: 33%;
    font-size: 18px!important;
}

.blog-listing .slider-banner h1 {
    font-size: 42px;
    font-weight: 800;
   
}
p {
    display: inline-block;
    font-size: 18px;
    color: #212322;
}

/* banner sectoion style ends */



/* form style start	 */
.blog-newsletter p {
    color: white;
    font-size: 18px;
}

.blog-newsletter h2 {
    font-size: 32px;
    font-weight: 800;
    color: white;
}
.btn-custom-primary {
    font-size: 14px;
    color: #0032A0!important;
    background-color: white!important;
    border-radius: 7px;
    text-decoration: none!important;
    font-weight: 700;
    padding: 14px 15px 13px 15px;
    position: relative;
}
.blog-newsletter ::-webkit-input-placeholder { /* WebKit browsers */
    color: #ffffff !important;
    opacity: 0.56;
}
.blog-newsletter :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
    color: #ffffff !important;
    opacity: 0.56;
}
.blog-newsletter ::-moz-placeholder { /* Mozilla Firefox 19+ */
    color: #ffffff !important;
    opacity: 0.56;
}
.blog-newsletter :-ms-input-placeholder { /* Internet Explorer 10+ */
    color: #ffffff !important;
    opacity: 0.56;
}

.form-control {
    display: block;
    width:97%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.375rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
/* form style end	 */


.duration::before{
	top: -2px;
    position: relative;
	padding-right: 13px;
    content: url(https://whitegold.money/cms/../content/cms/Vector.svg);
    padding-left: 19px;
}


.time-text::before{
	position: relative;
    content: url(https://whitegold.money/cms/../content/cms/fa-solid_book-open.svg);
    right: 7px;
    top: 2px;

}
.blog-grid-inner .author-name {
    padding-top: 4px;
    padding-left: 10px;
}

.blog-grid-inner .except {
	font-size:20px;
    font-weight: 700;
}

.except::after{
	position: relative;
    content: url(https://whitegold.money/cms/../content/cms/charm_arrow-right.svg);
    left: 5px;
    top: 3px;
}

.time-text{
	float:right;
}
	.align-items-center {
    align-items: center!important;
}
.blog-grid-inner .author-name {
    padding-left: 10px;
}

.blog-grid-inner h6 {
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
.blog-grid-inner .post-categories{
    margin:0 auto;
    list-style:none;
}

.content-block ul:not(.slick-slider) {
    list-style-position: outside;
    padding-left: 0px;
}



.justify-content-between{
justify-content: space-between!important;
}

	.pd-10{
padding:10px;
	}
.share-icons h5{
	font-weight:700;
	margin-right: 15px;
	font-size:24px;
	color:#0032A0;

}

.share-icons .fa{
	margin-right: 13px;
    font-size: 16px;
    font-weight: 900;
    background-color: white;
    color: #0032A0;
    padding: 14px;
    border-radius: 50px;
    width: 43px;
    height: auto;
}

.text-justify{
text-align: justify;

}
.tags{
	display: unset;
    margin-left: 10px;
}

.date{
	margin-left: auto;
}

.blog-detail-box .fa{
	margin-top: -4px;
	font-size:24px;
color:#0032A0;
padding-right: 14px;
margin-left: auto;

}

	.author{
		padding-left: 15px;
	}
.logo-company{
	width: 50px;
    height: 50px;
}

/* .d-flex{
	display:flex;
} */

p {
    display: inline-block;
    font-size: 18px;
    color: #212322;
}


.blog-detail-box{
	border-radius: 16px;
	background-color:white;
	padding:20px;
}

h2{
	font-size:32px;
	font-weight:800;
}

.bg-grey2{
	background-color:#F1F1F1;
}
.mt-5 {
    margin-top: 3rem!important;
}

.mb-5 {
    margin-bottom: 3rem!important;
}
.mb-4 {
    margin-bottom: 1.5rem!important;
}

.mt-4 {
    margin-top: 1.5rem!important;
}
.mt-2 {
    margin-top: 0.5rem!important;
}
.mb-2 {
    margin-bottom: 0.5rem!important;
}

.blog-detail-box .category{
	display: table-cell;
	background-color: #FFC980;
    padding: 7px 15px 7px 15px;
    border-radius: 4px;
    font-size: 16px;
    font-weight: 600;
    color: #0032A0;
}

.blog-detail-box .category .post-categories{
	background-color: #FFC980;
    padding: 7px;
    border-radius: 4px;
    font-size: 16px;
    font-weight: 600;
    color: #0032A0;
	list-style:none;
}

@media screen and (min-width:1440px){
    .blog-listing-menu .search .fa {
    -webkit-text-stroke: 0.5px #eaeaea;
    width: 6.375rem;
    height: 2.375rem;
    line-height: 5.999rem;
    font-size: 23px!important;
}
    .blog-listing-menu .nav{
    padding: 13px 12px 0px 12px;
}
}

@media screen and (min-width: 1040px) {
.blog-listing-menu .nav {
    padding: 13px 12px 0px 12px;
}

/* navbar style starts */
.navbar-expand-lg .navbar-collapse {
    display: flex!important;
    flex-basis: auto;
}
.navbar-expand-lg {
    flex-wrap: nowrap;
    justify-content: flex-start;
}
/* navbar style ends */

    .duration::before{
	top: -2px;
    position: relative;
	padding-right: 13px;
    content: url(https://whitegold.money/cms/../content/cms/Vector.svg);
    padding-left: 19px;
}

	.d-lg-none{
		display:none!important;
	} 
	
	.d-md-none{
		display:none!important;
	}

	.duration{
		font-size: 1.4rem;
	display: flex;
	justify-content: center;
}

	.d-flex-lg{
	display:flex;
}

}


@media (max-width: 600px){
    /* banner css for mobile starts */

    .blog-grid .container {
    max-width: 380px;
}


    .blog-listing .slider-banner p {
    color: white;
    padding-bottom: 12%!important;
}


    .duration::before{
	top: -2px;
    position: relative;
	padding-right: 13px;
    content: url(https://whitegold.money/cms/../content/cms/book-icon-mobile.svg);
    padding-left: 19px;
}



    .blog-detail-box .fa {
    font-size: 16px;  
}


	.d-md-block{
		display:none!important;
	}

	.duration::before {
    top: 0px;
    position: relative;
   
}

	.author {
   font-size: 16px;
    position: relative;
    padding-left: 7px;
    /* padding-top: 4px; */
    top: -7px;
}

	.date {
    float: right;
}

.duration{
        margin-top: -24px;
    float: right;
    margin-right: 55px;
    font-size: 1.4rem;
}



}


@media only screen and (min-device-width: 480px) 
                   and (max-device-width: 1000px) 
                   and (orientation: landscape) {


                    .blog-listing .slider-banner p {
    color: white;
    padding-bottom: 3%;
    font-size: 18px!important;
}

                    .duration::before{
	top: -2px;
    position: relative;
	padding-right: 13px;
    content: url(https://whitegold.money/cms/../content/cms/Vector.svg);
    padding-left: 19px;
}

					.date {float: right;}
.duration::before {top: 3px;position: relative;padding-right: 13px;}
.duration{
	position: relative;
    left: 36.5%;
    top: 8px;
}
.d-md-block{
		display:none!important;
	}
	   }

	   @media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 480px)
  and (-webkit-min-device-pixel-ratio: 2)
  and (orientation: landscape) {
    .blog-listing .slider-banner p {
    color: white;
    padding-bottom: 3%;
    font-size: 18px!important;
}

	.date {float: right;}
.duration::before {top: 3px;position: relative;padding-right: 13px;}
.duration{
	position: relative;
    left: 36.5%;
    top: 8px;
}
.d-md-block{
		display:none!important;
	}

  }
  .geeks #menus {
            display: none;
        }

        .search-bar-mobile .input-field, input[type="text"] {
    margin-right: 20px;
        }

@media only screen and (min-width: 769px) and (max-width: 1100px) { 

.geeks a.icon{ right:40%!important; }
}

/* pagination style starts */

.wp-pagenavi span.current {
    color: white;
    font-size: 16px;
    background-color: #0032A0;
    font-weight: bold;
    border: 1px solid #0032A0;
    padding: 8.8px 12px;
    border-radius: 4px;
}
.wp-pagenavi .larger, .wp-pagenavi .smaller{
    margin: 10px;
    padding: 5.6px 11px;
    border-radius: 4px;
    color: #0032A0;
    font-size: 16px;
    background-color: #E9E9E7;
    font-weight: bold;
    border: 1px solid #0032A0;
    border-radius: 4px;
}

.wp-pagenavi .larger:hover, .wp-pagenavi .smaller:hover{
    background-color: #0032A0;
    color: white!important;
}
.wp-pagenavi .nextpostslink, .wp-pagenavi .previouspostslink{
    color: #0032A0;
    font-size: 16px;
    background-color: #E9E9E7;
    font-weight: bold;
    border: none;
}

.wp-pagenavi {
    text-align: center;
    clear: both;
}
.wp-pagenavi .extend, .wp-pagenavi .last, .wp-pagenavi .first{display:none;}

/* pagination style ends */
</style>




<?php wp_footer(); ?>
<?php get_footer(); ?>
<script>

$('[data-search]').on('keyup', function() {
	var searchVal = $(this).val();
	var filterItems = $('[data-filter-item]');

	if ( searchVal != '' ) {
		filterItems.addClass('hidden');
		$('[data-filter-item][data-filter-name*="' + searchVal.toLowerCase() + '"]').removeClass('hidden');
	} else {
		filterItems.removeClass('hidden');
	}
});
    </script>

<!-- filter js starts -->
<script>
jQuery(function($) {
    $( '.js-filter' ).on( 'click', function() {
  
  var $color = $(this).attr('data-color');
  
  if ( $color == 'all' ) {
    $( '.js-filterable' ).removeClass( 'is-hidden' );    
  } else {
    $( '.js-filterable' ).addClass( 'is-hidden' );
    $( '.js-filterable[data-color=' + $color + ']' ).removeClass( 'is-hidden' );
  }
  
});
s
});
    </script><!-- filter js end -->

<script>
       
       // Function to toggle the bar
       function geeksforgeeks() {
           var x = document.getElementById("menus");
           if (x.style.display === "block") {
               x.style.display = "none";
           } else {
               x.style.display = "block";
           }
       }
   </script>

   <script>
      
       // Function to toggle the plus menu into minus
       function myFunction(x) {
           x.classList.toggle("fa-minus-circle");
       }
   </script>

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
