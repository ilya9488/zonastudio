<section class="spelniamy-wasze-marzenia" style="background-image: url(<?php echo get_template_directory_uri();?>/static/img/spełniamy-wasze-marzenia-1.png), url(<?php echo get_template_directory_uri();?>/static/img/spełniamy-wasze-marzenia-2.png);">
  <div class="container-xl container-fluid">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="block-title pb-60" data-bg-text="<?php echo (get_sub_field('text_bg')) ? the_sub_field('text_bg') : 'usługi'; ?>"><?php echo (get_sub_field('title')) ? the_sub_field('title') : 'oferta biuro projektowe'; ?></h2>
      </div>
      <?php if(get_sub_field('left_blok')){ ?>
        <div class="<?php echo (!get_sub_field('right_blok')) ? 'col-12' : 'col-lg-5 col-md-6 col-sm-12 mx-auto' ;?>">
          <?php echo get_sub_field('left_blok'); ?>
        </div>
      <?php }; ?>
      <?php if(get_sub_field('right_blok')){ ?>
        <div class="<?php echo (!get_sub_field('left_blok')) ? 'col-12' : 'col-lg-5 col-md-6 col-sm-12 mx-auto' ;?>">
          <?php echo get_sub_field('right_blok'); ?>
        </div>
      <?php }; ?>
    </div>
  </div>
</section>