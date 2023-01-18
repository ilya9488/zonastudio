<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zonastudio
 */

?>

<footer id="colophon" class="site-footer d-flex flex-column">
    <div class="footer-data">
        <div class="footer__logo">
            <?php $custom_logo_link = get_option('menu_logo');
            if (!empty($custom_logo_link)) :
            ?>
            <img class="" src="<?php echo $custom_logo_link; ?>" alt="">
            <?php endif; ?>
        </div>
        <div class="footer__contact-data">
            <div class="d-none d-md-flex flex-md-column">
                <span><?php echo esc_attr__(get_option('footer_email')); ?></span>
                <span><?php echo esc_attr__(get_option('footer_phone_number')); ?></span>
                <span>Zielona Góra</span>
            </div>
        </div>
        <div class="footer__social-media text-right">
            <?php
            $social_facebook = get_option('facebook_link');
            $social_instagram = get_option('instagram_link');
            if (!empty($social_facebook)) :
            ?>
            <div class="social-media__link d-inline-block">
                <a href="<?php echo esc_url_raw($social_facebook) ?>"><i class="bi bi-facebook"></i></a>
            </div>
            <?php endif;
            if (!empty($social_instagram)) :
            ?>
            <div class="social-media__link d-inline-block">
                <a href="<?php echo esc_url_raw($social_instagram) ?>"><i class="bi bi-instagram"></i></a>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="author m-2 text-center">&copy All rights reserved | made by <a href="fb.com/lpastucha">lpastucha</a>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>