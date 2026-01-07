<?php if( have_rows('add_service_section') ): ?>
<section class="what-we-do-sec fill-blue-5 space-200-top-bottom">
    <div class="container">
    <div class="text-center mb-5">
        <h2><?php the_field('add_title3'); ?></h2>
        <p class="mt-4"><?php the_field('add_sub_title3'); ?></p>
    </div>
    <!-- row starts  -->
    <div class="row justify-content-center"> 
        <!-- col starts  --> 
        <?php while( have_rows('add_service_section') ): the_row(); ?>
    <div class="small-12 large-4 medium-6 mt-3 mb-3">
        <div class="box-3" alt="<?php the_sub_field('add_title'); ?>" style="background-image: url(<?php the_sub_field('add_image'); ?>);background-position: bottom;background-size: cover;background-repeat: no-repeat;">
     <!-- box content starts  -->
    <div class="inner-box-section">
        <div class="mt-3 mb-3">
<h5 class=""><?php the_sub_field('add_title'); ?></h5></div>
<p class=""><?php the_sub_field('add_content'); ?></p>
<?php 
                        $link1 = get_sub_field('add_button');
                        if( $link1 ): 
                        $link1_url = $link1['url'];
                        $link1_title = $link1['title'];
                        $link1_target = $link1['target'] ? $link1['target'] : '_self';
                        ?>
<a class="btn-custom-white" target="<?php echo esc_attr( $link1_target ); ?>" href="<?php echo esc_url( $link1_url ); ?>"><?php echo esc_html( $link1_title ); ?></a>
<?php endif; ?>
</div>
<!-- box content ends  -->
</div></div>
<!-- col ends  --><?php endwhile; ?> 

</div> 
<!-- row ends  --> 
</div>
</section><?php endif; ?>


