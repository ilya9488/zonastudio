<nav class="navbar navbar-expand-md">
    <div class="nav-grid">
        <div class="navbar-brand">
            <?php
            $custom_logo_link = get_option('menu_logo');
            if (!empty($custom_logo_link)) :
            ?>
            <a href="<?php echo home_url() ?>"><img class="brand-logo" src="<?php echo $custom_logo_link; ?>" alt=""
                    srcset=""></a>
            <?php else : ?>
            <a href="<?php echo home_url() ?>">
                <h3><?php echo esc_html(bloginfo()); ?></h3>
            </a>
            <?php endif; ?>
        </div>
        <div class="navigator-toggler d-flex justify-content-end  align-items-center d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="navigator">
            <?php
            wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'depth' => 2,
                    'menu_class' => 'navbar-nav mx-auto',
                    'theme_location' => 'primary',
                    'container_id' => 'navbarSupportedContent',
                    'container_class' => 'collapse navbar-collapse ',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                )
            );
            ?>
        </div>
        <?php
        $contact_phone_number =  get_option('menu_contanct_phone_number');
        if (!empty($contact_phone_number)) :
        ?>
        <div class="nav-contact">
            <span><?php echo esc_attr__($contact_phone_number); ?></span>
        </div>
        <?php endif; ?>
    </div>
</nav><!-- #site-navigation -->