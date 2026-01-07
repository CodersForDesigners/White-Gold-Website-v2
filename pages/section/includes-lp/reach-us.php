
<?php if( get_field('add_address') ): ?>
<section class="reach-us space-100-bottom space-80-top">

    <div class="container">
    <div class="text-center mb-4">
            <h2>Reach Us</h2>
        </div>   
<div class="row mb-5">
<div class="col-lg-1 col-md-12 col-xs-12"></div>
<div class="widget-area col-lg-10 col-md-12 col-xs-12">
                        <aside class="widget widget-text cmt-bgcolor-skincolor pd1030 item4">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-before-content">
                                <div class="featured-icon">
                                    <div class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-darkgrey cmt-icon_element-size-sm cmt-icon_element-style-square">
                                    <img src="<?php the_field('add_image');?>" class="img-fluid" alt="<?php the_field('add_location');?>">
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                    <h4 class="mb-2"><?php the_field('add_location');?></h4>
                                   <a href="<?php the_field('add_map_location');?>" target="_blank"><p class="address d-flex mb-3 mt-2"><?php the_field('add_address');?></p></a>
<a href="tel://<?php the_field('add_number');?>"><p class="number d-flex"><?php the_field('add_number');?></p></a>

                                </div>
                                    <div class="featured-desc mb-3 mt-2">
                                    <p><span class="mb-1">Nearby Landmarks</span>
                                    <?php the_field('near_by_landmarks');?>
</p>
									</div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </aside>
					</div>
                    <div class="col-lg-1 col-md-12 col-xs-12"></div></div>
                    </div>
                    </section>
<style>
/* start reach us  */

  .item4{
    padding:10px;
    background-color:white;
    box-shadow: 0px 0px 33.9723px rgba(0, 50, 160, 0.1);
    border-radius: 15.9869px;
    position: relative;
}

/* .reach-us  h2{
font-size:32px;
font-weight:700;
}
.reach-us h4{
    font-size:24px;
    font-weight:700;
    display: table-cell;
    vertical-align: middle;
} */

.reach-us span{
    font-weight: 500;
    color: #00000075;
    display: table-cell;
    vertical-align: middle;
}



/* .reach-us p {
    display: inline-block;
    font-size: 16px;
    color: #212322;
} */

.widget-area .widget {
    padding: 7px 13px;
    position: relative;
}
.featured-icon-box {
    position: relative;
    margin: 15px 0;
}

.featured-icon-box.icon-align-before-content .featured-content, .featured-icon-box.icon-align-before-title .featured-title {
    padding-left: 15px;
}

.reach-us .address::before{
    margin-right: 12px;
    content:url('https://staging.whitegold.money/cms/../content/cms/gps-2-1-1.svg');  
}

.reach-us .number::before{
    position: relative;
    top: -5px;
    margin-right: 13px;
    content:url('https://staging.whitegold.money/cms/../content/cms/telephone-1-1.svg');  
}
 
@media (max-width: 480px){
    .featured-icon-box.icon-align-before-content .featured-icon, .featured-icon-box.icon-align-before-content .featured-content, .featured-icon-box.icon-align-before-title .featured-title, .featured-icon-box.icon-align-before-title .featured-icon {
        padding-top: 0px;
        display: block;
    }

    .reach-us  h2{
font-size:32px;
font-weight:700;
}
.reach-us h4{
    font-size:16px;
    font-weight:700;
    display: table-cell;
    vertical-align: middle;
}
.reach-us .container {
    max-width: 380px!important;
}
.reach-us p {
    display: block;
    font-size: 14px;
    color: #212322;
}

}

@media (min-width: 600px){
    .featured-icon-box.icon-align-before-content .featured-icon, .featured-icon-box.icon-align-before-content .featured-content, .featured-icon-box.icon-align-before-title .featured-title, .featured-icon-box.icon-align-before-title .featured-icon {
        display: table-cell;
        vertical-align: middle;
    }
    .reach-us  h2{
font-size:32px;
font-weight:700;
}
.reach-us h4{
    font-size:24px;
    font-weight:700;
    display: table-cell;
    vertical-align: middle;
}
    .reach-us p {
    display: block;
    font-size: 16px;
    color: #212322;
}
}

@media (min-width: 1800px){

    .highlight .slick-list{
        padding-left: 30%!important;
    }
}

@media only screen and (min-width: 769px) and (max-width: 1100px) { 
	.d-tab-none{display:none!important;}
}
  /* END reach us */

</style>
<?php endif; ?>
