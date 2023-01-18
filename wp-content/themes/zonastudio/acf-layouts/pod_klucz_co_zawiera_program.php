<!-- Co Zawiera Program - What's included in the program -->
<section class="included-program">
  <div class="container-xl container-fluid">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="block-title pb-60" data-bg-text="<?php echo (get_sub_field('text_bg')) ? the_sub_field('text_bg') : 'usługa'; ?>"><?php echo (get_sub_field('title')) ? the_sub_field('title') : 'co zawiera program'; ?></h2>
      </div>
      <?php $rows = get_sub_field('blocks'); if( $rows ) { foreach( $rows as $row ) { ?>
        <div class="col-lg-2 col-md-4 col-6 mx-lg-auto program">
          <div class="program-img-wrap">
            <img width="90" height="90" class="program-img" src="<?php echo ($row['img']) ? wp_get_attachment_image_src($row['img'], 'included-program')[0] : get_template_directory_uri().'/static/img/bez-zdjęć.jpg'; ?>" alt="<?= get_post_meta($row['img'], '_wp_attachment_image_alt', true); ?>">
          </div>
          <span class="program-label">
            <?php echo $row['text']?>
          </span>
        </div>
      <?php } }; ?>
    </div>
  </div>
</section>
