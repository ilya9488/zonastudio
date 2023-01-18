<section class="home-what-do-we-offer">
  <div class="container-fluid">
    <div class="row d-flex justify-content-center flex-wrap site-link-wrap site-list-wrap">
      <?php $rows = get_sub_field('offers'); if( $rows ) { $i = 0; foreach( $rows as $row ) { ?>
        <div class="col-lg-4 col-md-6 col-block-<?php echo $i+1;?>" style="background-image: url(<?php echo wp_get_attachment_image_src($row['img'], 'what-do-we-offer')[0]; ?>);">
          <div class="wrapper">
            <?php echo $row['text']; ?>
          </div>
        </div>
      <?php $i++; } } ?>
    </div>
  </div>
</section>
