<!-- What We Do - Czym Sie Zajmujemy -->
<section class="what-we-do">
  <div class="container-xl container-fluid">
    <div class="row justify-content-center">
      <div class="col-12 text-center title-wrap">
        <h2 class="block-title pb-60" data-bg-text="<?php echo (get_sub_field('text_bg')) ? the_sub_field('text_bg') : 'usługa'; ?>"><?php echo (get_sub_field('title')) ? the_sub_field('title') : 'jak wygląda współpraca'; ?></h2>
      </div>
      <?php $rows = get_sub_field('blocks'); if( $rows ) { $i = 1; foreach( $rows as $row ) { ?>
        <div class="col-md-4 col-6 what_block-wrap">
          <div class="what_block">
            <div class="what_block-img-wrap <?php echo ($row['img']) ?'': 'no-image' ?>" <?php echo ($row['img']) ?'':'data-image="Nie Wybrano Obrazu"'; ?>>
              <?php if (!$row['img']) : ?>
                <svg style="transform: rotate(-0.<?php switch ($i) { case 2: echo 25; break; case 3: echo 75; break; case 4: echo 5; break; case 5: echo 25; break; case 7: echo 25; break; case 8: echo 75; break; }?>turn);" class="what_block-img" width="70" height="70" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="45" cy="45" r="45" fill="#C59D5F"/>
                  <path d="M81.2155 59.5C83.0118 55.0176 84 50.1242 84 45C84 23.4609 66.5391 6 45 6C23.4609 6 6 23.4609 6 45C6 66.5391 23.4609 84 45 84C51.4928 84 57.6149 82.4134 63 79.6067" stroke="white" stroke-linecap="round"/>
                </svg>
              <?php else : ?>
                <img width="70" height="70" class="what_block-img" src="<?php echo ($row['img']) ? wp_get_attachment_image_src($row['img'], 'what-we-do')[0] : get_template_directory_uri().'/static/img/bez-zdjęć.jpg'; ?>" alt="<?= get_post_meta($row['img'], '_wp_attachment_image_alt', true); ?>">
              <?php endif; ?>
            </div>
            <h5><?php echo ($row['title']) ? $row['title'] : $row['title'] ?></h5>
            <span class="what_block-text">
              <?php echo $row['text']?>
            </span>
          </div>
        </div>
      <?php $i++; }}; ?>
    </div>
  </div>
</section>
