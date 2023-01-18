    <?php
    $front_page_images = get_option('front_page_image');
    if (!empty($front_page_images)) :
    ?>
    <div class="w-100">
        <div id="frontPageSlider" class="carousel slide" data-rider="carousel">
            <div class="carousel-inner">
                <?php foreach ($front_page_images as $key => $slide) : ?>
                <div class="front-page-image carousel-item <?php if ($key == 0) {
                                                                        echo 'active';
                                                                    } ?>">
                    <div style="background-image:url('<?php echo wp_get_attachment_image_url($slide, 'full') ?>')"
                        class="d-block w-100 img-fluid slider-image"></div>
                </div>
                <?php endforeach; ?>
            </div>
            <a class="slider-control slider-control-next" href="#frontPageSlider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="slider-control slider-control-next" href="#frontPageSlider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="goto-button">
        <div></div>
        <div></div>
    </div>
    <?php endif; ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-content" id="main-section">

            <?php
            the_content();

            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'zona_studio'),
                    'after'  => '</div>',
                )
            );
            ?>
        </div><!-- .entry-content -->

        <?php if (get_edit_post_link()) : ?>
        <footer class="entry-footer">
            <?php
                edit_post_link(
                    sprintf(
                        wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                            __('Edit <span class="screen-reader-text">%s</span>', 'zona_studio'),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        wp_kses_post(get_the_title())
                    ),
                    '<span class="edit-link">',
                    '</span>'
                );
                ?>
        </footer><!-- .entry-footer -->
        <?php endif; ?>
    </article><!-- #post-<?php the_ID(); ?> -->