<section class="contact">
  <div class="container-xl">
    <div class="row flex-wrap-reverse">
      <div class="col-lg-5 col-md-6 wpcf7-form-wrap">
        <?php the_sub_field('feedback_form'); ?>
      </div>
      <div class="col-lg-6 col-md-6 offset-lg-1 contact-block-wrap">
        <h2 class="block-title" data-bg-text="<?php echo (get_sub_field('text_bg')) ? the_sub_field('text_bg') : 'usługa'; ?>"><?php echo (get_sub_field('title')) ? the_sub_field('title') : 'jak wygląda współpraca'; ?></h2>
        <?php $rows = get_sub_field('blocks'); if( $rows ) { $i = 1; foreach( $rows as $row ) { ?>
          <div class="contact-block d-flex">
            <div class="img-wrap">
              <img width="126" height="126" class="contact-block-img" src="<?php echo ($row['img']) ? wp_get_attachment_image_src($row['img'], 'contact-img')[0] : get_template_directory_uri().'/static/img/bez-zdjęć.jpg'; ?>" alt="<?= get_post_meta($row['img'], '_wp_attachment_image_alt', true); ?>">
            </div>
            <div class="text-wrap">
              <h4 class="name"><?php echo ($row['name']) ? $row['name'] : 'imię osoby'; ?></h4>
              <span class="position"><?php echo ($row['position']) ? $row['position'] : 'imię osoby'; ?></span>
              <a class="phone" href="tel:<?php echo ($row['phone']) ? $row['phone'] : 'phone';?>">
                <svg class="link-icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.0009 14.5H12.9159C3.09086 13.935 1.69586 5.645 1.50086 3.115C1.48514 2.91829 1.5084 2.72041 1.56929 2.53271C1.63019 2.345 1.72752 2.17115 1.85571 2.02113C1.98391 1.8711 2.14045 1.74784 2.31636 1.65842C2.49227 1.569 2.6841 1.51516 2.88086 1.5H5.63586C5.83613 1.49981 6.03186 1.55976 6.19767 1.67208C6.36349 1.78441 6.49175 1.94394 6.56586 2.13L7.32586 4C7.39903 4.18177 7.41719 4.38104 7.37808 4.57305C7.33897 4.76505 7.24431 4.94134 7.10586 5.08L6.04086 6.155C6.20721 7.10037 6.65995 7.97183 7.3378 8.65148C8.01566 9.33112 8.88592 9.78615 9.83086 9.955L10.9159 8.88C11.0566 8.74308 11.2345 8.65063 11.4275 8.61417C11.6204 8.57771 11.8199 8.59887 12.0009 8.675L13.8859 9.43C14.0691 9.50644 14.2255 9.63571 14.335 9.80134C14.4445 9.96696 14.5023 10.1614 14.5009 10.36V13C14.5009 13.3978 14.3428 13.7794 14.0615 14.0607C13.7802 14.342 13.3987 14.5 13.0009 14.5ZM3.00086 2.5C2.86825 2.5 2.74107 2.55268 2.6473 2.64645C2.55353 2.74022 2.50086 2.86739 2.50086 3V3.04C2.73086 6 4.20586 13 12.9709 13.5C13.0365 13.5041 13.1024 13.4951 13.1646 13.4737C13.2268 13.4522 13.2842 13.4187 13.3334 13.375C13.3827 13.3314 13.4228 13.2784 13.4515 13.2192C13.4803 13.16 13.497 13.0957 13.5009 13.03V10.36L11.6159 9.605L10.1809 11.03L9.94085 11C5.59086 10.455 5.00086 6.105 5.00086 6.06L4.97086 5.82L6.39086 4.385L5.64086 2.5H3.00086Z" fill="#C59D5F"/></svg>
                <?php echo ($row['phone']) ? chunk_split($row['phone'], 3, ' ') : 'phone';?>
              </a>
              <a class="email" href="mailto:<?php echo ($row['email']) ? $row['email'] : 'email'; ?>">
                <svg class="link-icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 3H2C1.73478 3 1.48043 3.10536 1.29289 3.29289C1.10536 3.48043 1 3.73478 1 4V12C1 12.2652 1.10536 12.5196 1.29289 12.7071C1.48043 12.8946 1.73478 13 2 13H14C14.2652 13 14.5196 12.8946 14.7071 12.7071C14.8946 12.5196 15 12.2652 15 12V4C15 3.73478 14.8946 3.48043 14.7071 3.29289C14.5196 3.10536 14.2652 3 14 3ZM12.9 4L8 7.39L3.1 4H12.9ZM2 12V4.455L7.715 8.41C7.7987 8.46806 7.89813 8.49918 8 8.49918C8.10187 8.49918 8.2013 8.46806 8.285 8.41L14 4.455V12H2Z" fill="#C59D5F"/></svg>
                <?php echo ($row['email']) ? $row['email'] : 'email'; ?>
              </a>
            </div>
          </div>
          <span class="what_block-text">
            <?php echo $row['text']?>
          </span>
        <?php $i++; }}; ?>
      </div>
    </div>
  </div>
</section>