<?php if( have_rows('add_benefits') ): ?>
<section class="service-box fill-blue-5 space-200-top space-200-bottom">
<div class="container">  
<div class="text-center-lg">
    <div class="text-center">
<h2 class="mb-3 text-center"><?php the_field('add_box_section_heading'); ?></h2></div>
<p class="text-white mt-3 text-center">The Price of gold is influenced by a variety of factors that can cause fluctuations in its value.</p>
<div class="row mt-4"> <!-- row starts -->
<?php while( have_rows('add_benefits') ): the_row(); ?>
<div class="columns small-6 large-3 mb-3 mt-3"><!-- col starts -->
<div class="inner-box">
<img src="<?php the_sub_field('upload_icon'); ?>" class="img-fluid mx-auto-lg mb-3" alt="<?php the_sub_field('add_title'); ?>">
<h3 class="mt-3 mb-3"><?php the_sub_field('add_title'); ?></h3>
<p class="mt-2 mb-2"><?php the_sub_field('add_content'); ?></p>
</div>
</div><!-- col end-->
<?php endwhile; ?>
</div><!-- row ends -->
</div>
</div>
</section>
<?php endif; ?>

<style>
.service-box h2 {font-weight: 800;font-size: 32px;color:white;}
.service-box .inner-box{background: #1E50CC;border-radius: 16px;display:grid;padding: 15px;height:100%;}
.service-box .inner-box p{color:#FFFFFF;}
.service-box .inner-box h3{font-weight: 700;font-size: 24px;color:white;line-height: 27px;}
@media (min-width: 992px){
    .text-center-lg{text-align:center;}
    .mx-auto-lg {
    margin-right: auto!important;
    margin-left: auto!important;
}
    .service-box .inner-box p{font-size:16px;}
}
@media (max-width: 991px){
    .service-box .inner-box p{font-size:14px;}
}
</style>