<section class="wspolzalozyciel-mistrz projektant">
  <div class="container">
    <div class="row flex-md-row-reverse justify-content-between">

      <div class="col-md-5 offset-md-1 mx-auto img-wrap decor-two-lines-right">
        <?php echo wp_get_attachment_image(get_sub_field('image'), 'about-us', '', ['class' => 'about-us-img']);?>
      </div>

      <div class="col-md-6 mx-md-0 mx-auto text-wrap">
        <h2 data-bg-text="<?php the_sub_field('text_bg'); ?>"><?php the_sub_field('title'); ?></h2>
        <div class="text"><?php the_sub_field('text'); ?></div>
      </div>

    </div>
  </div>
</section>
