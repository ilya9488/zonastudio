<section class="home-last-posts">
  <div class="container-xl">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="block-title pb-60" data-bg-text="<?php echo (get_sub_field('text_bg')) ? the_sub_field('text_bg') : 'portfolio'; ?>"><?php echo (get_sub_field('title')) ? the_sub_field('title') : 'Inne projekty'; ?></h2>
      </div>
      <?php $my_posts = get_posts( array('numberposts' => 9, 'post_type' => 'post', 'suppress_filters' => true, )); 
        global $post; $i = 0; foreach( $my_posts as $post ){ setup_postdata( $post ); ?>
        <div class="col-md-4 col-6 px-md-10" <?php if (have_rows('fields')): while (have_rows("fields")) : the_row(); if( get_sub_field('project_photo') ): ?> data-toggle="modal" data-target="#modal_<?= $i; ?>" data-whatever="@getbootstrap" <?php else: ?> title="Brak zdjęć projektu." data-photo="false" <?php endif; ?> <?php endwhile; else: ?> title="Brak zdjęć projektu." data-photo="false" <?php endif; ?>>
          <div class="wrap" style="background-image: url(<?php if(get_the_post_thumbnail()){ echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-small')[0]; }else{ if(have_rows('fields')): while (have_rows("fields")) : the_row(); $images = get_sub_field('project_photo'); echo($images) ? esc_url($images[0]['sizes']['post-small']) : get_template_directory_uri().'/static/img/bez-zdjęć.jpg'; endwhile; else: echo get_template_directory_uri().'/static/img/bez-zdjęć.jpg'; endif; } ?> );">
            <div class="text-wrap hover-wrap">
              <h4 class="title"><?php the_title(); ?></h4>
              <?php if (have_rows('fields')): while (have_rows("fields")) : the_row(); ?>
                <?php if(get_sub_field('apartament_mkv')):?>
                  <div class="delimer"></div>
                  <span class="apartament">Apartament <?php the_sub_field('apartament_mkv');?> mkv</span>
                <?php endif;?>
              <?php endwhile; endif; ?>
              <div class="line-1"></div><div class="line-2"></div><div class="line-3"></div><div class="line-4"></div>
            </div>
          </div>
        </div>
          
        <?php if (have_rows('fields')): while (have_rows("fields")) : the_row(); $images = get_sub_field('project_photo'); if( $images ): ?>
        <div class="modal" id="modal_<?= $i; ?>" tabindex="-1" aria-hidden="true">
          <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <svg class="close-icon" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M30 60C13.4315 60 0 46.5685 0 30C0 13.4315 13.4315 0 30 0C46.5685 0 60 13.4315 60 30C60 46.5685 46.5685 60 30 60Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M29 29.7499L42.252 17L44 18.6833L32.5011 29.7499L44 40.8167L42.252 42.5L29 29.7499V29.7499Z" fill="#C59D5F"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M32 29.7499L18.748 17L17 18.6833L28.4989 29.7499L17 40.8167L18.748 42.5L32 29.7499V29.7499Z" fill="#C59D5F"/>
              </svg>
            </button>
            <div class="site-slider">
              <input type="checkbox" name="width-img-fix" id="width-img-fix">
              <div id="slider_gullery_<?= $i; ?>" class="slider-gullery">
                <div class="swiper-wrapper">
                  <?php $i = 0; foreach( $images as $image ): ?>
                    <div class="swiper-slide slider-item <?php if($i === 0) echo 'active'; ?>">
                      <img class="slider-gullery-img" src="<?php echo esc_url($image['sizes']['post-full']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                  <?php $i++; endforeach; ?>
                </div>
                <div class="prev-arrow slider-arrow"><svg class="prev-arrow slider-arrow-img" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M30 60C13.4315 60 0 46.5685 0 30C0 13.4315 13.4315 0 30 0C46.5685 0 60 13.4315 60 30C60 46.5685 46.5685 60 30 60Z" fill="white"/><path fill-rule="evenodd" clip-rule="evenodd" d="M20.25 29.9999L33.502 17.25L35.25 18.9333L23.7511 29.9999L35.25 41.0667L33.502 42.75L20.25 29.9999Z" fill="#C59D5F"/></svg></div>
                <div class="next-arrow slider-arrow"><svg class="next-arrow slider-arrow-img" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M30 60C46.5685 60 60 46.5685 60 30C60 13.4315 46.5685 0 30 0C13.4315 0 0 13.4315 0 30C0 46.5685 13.4315 60 30 60Z" fill="white"/><path fill-rule="evenodd" clip-rule="evenodd" d="M39.75 29.9999L26.498 17.25L24.75 18.9333L36.2489 29.9999L24.75 41.0667L26.498 42.75L39.75 29.9999Z" fill="#C59D5F"/></svg></div>
                <div class="slider-pagination"></div>
                <div class="permalink site-link-wrap">
                  <a class="site-btn-arrow" href="<?= get_permalink(); ?>" rel="noopener noreferrer">zobacz ten projekt</a>
                </div>
                <label for="width-img-fix" class="width-img-fix">
                  <svg width="19" height="28" viewBox="0 0 19 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.0329471 10.5551L2.32228 10.5479L2.30032 3.54951L6.87899 3.53514L6.868 0.0359396L0 0.0574951L0.0329471 10.5551Z" fill="#C59D5F"/>
                    <path d="M0.0329471 10.5551L2.32228 10.5479L2.30032 3.54951L6.87899 3.53514L6.868 0.0359396L0 0.0574951L0.0329471 10.5551Z" fill="#C59D5F"/>
                    <path d="M11.4467 0.0216064L11.4576 3.52081L16.0363 3.50644L16.0583 10.5048L18.3476 10.4977L18.3147 5.09695e-05L11.4467 0.0216064Z" fill="#C59D5F"/>
                    <path d="M11.4467 0.0216064L11.4576 3.52081L16.0363 3.50644L16.0583 10.5048L18.3476 10.4977L18.3147 5.09695e-05L11.4467 0.0216064Z" fill="#C59D5F"/>
                    <path d="M16.1022 24.5015L11.5236 24.5159L11.5345 28.0151L18.4025 27.9935L18.3696 17.4959L16.0803 17.5031L16.1022 24.5015Z" fill="#C59D5F"/>
                    <path d="M16.1022 24.5015L11.5236 24.5159L11.5345 28.0151L18.4025 27.9935L18.3696 17.4959L16.0803 17.5031L16.1022 24.5015Z" fill="#C59D5F"/>
                    <path d="M2.34414 17.5462L0.0548096 17.5533L0.0877567 28.0509L6.95576 28.0294L6.94478 24.5302L2.36611 24.5446L2.34414 17.5462Z" fill="#C59D5F"/>
                    <path d="M2.34414 17.5462L0.0548096 17.5533L0.0877567 28.0509L6.95576 28.0294L6.94478 24.5302L2.36611 24.5446L2.34414 17.5462Z" fill="#C59D5F"/>
                  </svg>
                </label>
              </div>
            </div>
          </div>
        <!-- <div class="permalink">
          <a class="site-btn" href="<?= get_permalink(); ?>" rel="noopener noreferrer">zobacz ten projekt</a>
        </div> -->
      </div>
      <?php endif; endwhile; endif; ?>
      <?php $i++; } wp_reset_postdata(); ?>
      <div class="col-12 text-center btn-wrap">
        <a class="site-btn" href="<?php echo (get_sub_field('page_link')) ? esc_url(get_term_link(get_sub_field('page_link'))) : get_category_link(1); ?>">
          <?php echo (get_sub_field('page_title')) ? get_sub_field('page_title') : 'ZOBACZ PORTFOLIO'; ?>
        </a>
      </div>
    </div>
  </div>
</section>