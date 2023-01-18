<section class="about-advisory" style="background-image: url(<?php echo get_template_directory_uri();?>/static/img/About/about-bg.png);">
  <div class="container-xl container-fluid">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10 mx-auto text-center text-lg-left">
        <div class="img-block">
          <?php if (get_sub_field('image_1')){
            echo wp_get_attachment_image( get_sub_field('image_1'), 'advistory-img' ); 
          } else{ ?>
            <img src="<?php echo get_template_directory_uri();?>/static/img/About/icons/medical.svg" alt="#">
          <?php } ?>
        </div>
        <div class="img-block">
          <?php if (get_sub_field('image_2')){
            echo wp_get_attachment_image( get_sub_field('image_2'), 'advistory-img' ); 
          } else{ ?>
            <img src="<?php echo get_template_directory_uri();?>/static/img/About/icons/car-crashers.svg" alt="#">
          <?php } ?>
        </div>
        <div class="img-block">
          <?php if (get_sub_field('image_3')){
            echo wp_get_attachment_image( get_sub_field('image_3'), 'advistory-img' ); 
          } else{ ?>
            <img src="<?php echo get_template_directory_uri();?>/static/img/About/icons/injuries.svg" alt="#">
          <?php } ?>
        </div>
        <div class="img-block">
          <?php if (get_sub_field('image_4')){
            echo wp_get_attachment_image( get_sub_field('image_4'), 'advistory-img' ); 
          } else{ ?>
            <img src="<?php echo get_template_directory_uri();?>/static/img/About/icons/lawsuits.svg" alt="#">
          <?php } ?>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 mx-auto">
        <div class="text-wrap">
          <?php the_sub_field('text'); ?>
        </div>
      </div>
    </div>
  </div>
</section>