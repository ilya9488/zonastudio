<section class="oferta-biuro-projektowe">
  <div class="container-xl container-fluid">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="block-title pb-60" data-bg-text="<?php echo (get_sub_field('text_bg')) ? the_sub_field('text_bg') : 'usługi'; ?>"><?php echo (get_sub_field('title')) ? the_sub_field('title') : 'oferta biuro projektowe'; ?></h2>
      </div>

      <?php $rows = get_sub_field('tariff_plan'); if( $rows ) { foreach( $rows as $row ) { ?>
        <div class="col-lg-4 col-md-6 col-sm-12 tariff-plan">
          <div class="header">
            <h5 class="tariff-title">
              <?php echo ($row['title']) ? $row['title'] : 'Projekt koncepcyjny'; ?>
            </h5>
            <div class="img-wrap">
              <img class="tariff-img" src="<?php echo ($row['img']) ? wp_get_attachment_image_src($row['img'], 'tariff-plan')[0] : get_template_directory_uri().'/static/img/bez-zdjęć.jpg'; ?>" alt="<?= get_post_meta($row['img'], '_wp_attachment_image_alt', true); ?>">
            </div>
          </div>
          <div class="body site-list-wrap">
            <ul class="tarif-list">
              <?php $sub_rows = $row['tarif_list']; if( $sub_rows ) { foreach( $sub_rows as $sub_row ) { ?>
                <li class="tarif-item"><?php echo $sub_row['list_item']; ?></li>
              <?php } } ?>
            </ul>
            <div class="link-wrap site-link-wrap">
              <!-- <a class="site-btn-arrow" href="#">ZAPYTAJ NAS O SZCZEGÓŁY</a> -->
              <a class="site-btn-arrow" href="<?php echo $row['page_link']; ?>">
                <?php echo $row['page_title']; ?>
              </a>
            </div>
          </div>
        </div>
      <?php } } ?>

    </div>
  </div>
</section>