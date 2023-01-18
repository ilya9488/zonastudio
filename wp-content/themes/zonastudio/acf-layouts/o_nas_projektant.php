<section class="projektant">
  <div class="container">
    <div class="row">

      <div class="col-md-6 mx-md-0 mx-auto img-wrap decor-two-lines">
        <?php echo wp_get_attachment_image(get_sub_field('image'), 'about-us', '', ['class' => 'about-us-img']);?>
      </div>

      <div class="col-md-6 mx-md-0 mx-auto text-wrap">
        <h2 data-bg-text="<?php the_sub_field('text_bg'); ?>"><?php the_sub_field('title'); ?></h2>
        <div class="text"><?php the_sub_field('text'); ?></div>
      </div>

    </div>
  </div>
</section>
