<section class="projekt-to-proces">
  <div class="container-xl container-fluid">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="block-title pb-60" data-bg-text="<?php echo (get_sub_field('text_bg')) ? the_sub_field('text_bg') : 'usługi'; ?>"><?php echo (get_sub_field('title')) ? the_sub_field('title') : 'oferta biuro projektowe'; ?></h2>
      </div>
      <?php $rows = get_sub_field('project_to_process_list'); if( $rows ) { foreach( $rows as $row ) { ?>
        <div class="col-lg-6 col-md-6 col-sm-12 processes-wrap">
          <div class="img-wrap">
            <img class="projekt-img" width="70" height="70" src="<?php echo ($row['img']) ? wp_get_attachment_image_src($row['img'], 'what-we-do')[0] : get_template_directory_uri().'/static/img/bez-zdjęć.jpg'; ?>" alt="<?= get_post_meta($row['img'], '_wp_attachment_image_alt', true); ?>">
          </div>
          <div class="text-wrap">
            <h4 class="projekt-title">
              <?php echo ($row['title']) ? $row['title'] : 'Proces Nagłówek'; ?>
            </h4>
            <p>
              <?php echo ($row['text']) ? $row['text'] : 'W tym miejscu możesz napisać swój tekst za pomocą panelu administracyjnego'; ?>
            </p>
          </div>
        </div>
      <?php } }; ?>
    </div>
  </div>
</section>