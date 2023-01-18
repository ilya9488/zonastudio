<section class="remontowe-spelniamy-wasze-marzenia">
  <div class="container-xl container-fluid">
    <div class="row flex-md-row-reverse">
      <div class="col-lg-5 col-md-6 img-wrap">
        <img width="445" height="600" class="tariff-img" src="<?php echo (get_sub_field('img')) ? wp_get_attachment_image_src(get_sub_field('img'), 'about-us')[0] : get_template_directory_uri().'/static/img/bez-zdjęć.jpg'; ?>" alt="<?= get_post_meta(get_sub_field('img'), '_wp_attachment_image_alt', true); ?>">
      </div>
      <div class="col-lg-7 col-md-6 mr-auto">
        <div class="text-wrap site-list-wrap">
          <h2 data-bg-text="<?php echo (get_sub_field('text_bg')) ? the_sub_field('text_bg') : 'usługi'; ?>"><?php echo (get_sub_field('title')) ? the_sub_field('title') : 'spełniamy wasze marzenia'; ?></h2>
          <?php echo (get_sub_field('text')) ? the_sub_field('text') : 'lorem text...'; ?>
          <ul>
            <?php $rows = get_sub_field('list'); if( $rows ) { foreach( $rows as $row ) { ?>
              <li>
                <?php echo $row['list_item']?>
              </li>
            <?php } }; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
