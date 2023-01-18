<?php
require 'view-options.php';
add_action('admin_init', 'init_custom_settings');
add_action('admin_menu', 'init_options_page');

function init_options_page()
{
    wp_enqueue_media();
    wp_register_script('options-front-page', get_template_directory_uri() . '/options/options-front-page.js', array('jquery', 'wp-api'));
    wp_enqueue_script('options-front-page');
    add_theme_page("Zona Studio", "Zona Studio Opcje", "manage_options", "zona_studio_options", "theme_options_page", 0);
}

function init_custom_settings()
{

    init_front_page_settings();
    init_menu_settings();
    init_footer_settings();
}

function init_front_page_settings()
{
    add_settings_section("front-page-section", "Ustawienia strony głównej", 'front_page_setting_desctiption', 'zona_studio_options');
    add_option('front_page_image', "");
    add_settings_field('front_page_image', 'Zdjęcie główne', 'front_page_image_input_callback', 'zona_studio_options', 'front-page-section');
    add_option('banner_main_text', "");
    add_settings_field('banner_main_text', 'Tekst główny', 'banner_main_text_callback', 'zona_studio_options', 'front-page-section');
    add_option('banner_secondary_text', "");
    add_settings_field('banner_secondary_text', 'Tekst drugi', 'banner_secondary_text_callback', 'zona_studio_options', 'front-page-section');
    register_setting('zona_studio_options_grp', 'front_page_image');
    register_setting('zona_studio_options_grp', 'banner_main_text');
    register_setting('zona_studio_options_grp', 'banner_secondary_text');
    add_action('admin_head', 'custom_theme_admin_style');

    function custom_theme_admin_style()
    {
        echo <<<EOL
        <style>
            .image_presenter{
                display:flex;
                flex-direction:row;
                justify-content: flex-start;
                align-items:center;
                margin: 20px 0;
            }
            .image-presenter__entry {
                width: 100px;
                height:100px;
                background-size:cover;
                background-position:center;
                background-repeat: no-repeat;
                box-shadow: inset 0 0 15px rgb(0 0 0 / 10%), inset 0 0 0 1px rgb(0 0 0 / 5%);
                background: #f0f0f1;
                margin: 0 5px;
            } 
        </style>
        EOL;
    }

    function front_page_setting_desctiption()
    {
        echo '<p>Ustawienia baneru</p>';
    }

    function front_page_image_input_callback($args)
    {
        echo '<div id="front_page_images">';
        $images = get_option('front_page_image');
        if (is_array($images)) {
            foreach ($images as $image) {
                echo '<input id="selected_images-' . $image . '" type="hidden" name="front_page_image[]" value="' . $image . '"/>';
            }
        }
        echo '</div>';
        echo '<input id="upload_image_button" class="button" type="button" value="Załaduj obrazy" />';
?>
<div id="selected_image_presenter" class="image_presenter" data-input="#selected_images">
    <?php
            $images = get_option('front_page_image');
            if (!empty($images)) {
                foreach ($images as $image) {
                    echo '<div id="img-' . $image . '" class="image-presenter__entry" style="background-image: url(' . wp_get_attachment_image_src($image, 'thumbnail')[0] . ');"></div>';
                }
            }
            ?>
</div>
<?php
    }

    function banner_main_text_callback($args)
    {
        echo '<input id="banner_main_field" type="text" size="36" name="banner_main_text" value="' . get_option('banner_main_text') . '"/>';
    }

    function banner_secondary_text_callback($args)
    {
        echo '<input id="banner_secondary_field" type="text" size="36" name="banner_secondary_text" value="' . get_option('banner_secondary_text') . '"/>';
    }
}


function init_menu_settings()
{
    add_settings_section("menu-section", "Ustawienia menu", 'menu_settings_desctiption', 'zona_studio_options');

    add_option('menu_contanct_phone_number', "");
    add_settings_field('menu_contanct_phone_number', 'Telefon kontaktowy', 'phone_number_input_callback', 'zona_studio_options', 'menu-section');
    register_setting('zona_studio_options_grp', 'menu_contanct_phone_number');

    add_option('menu_logo', "");
    add_settings_field('menu_logo', 'Obrazek Logo', 'menu_logo_input_callback', 'zona_studio_options', 'menu-section');
    register_setting('zona_studio_options_grp', 'menu_logo');

    function menu_settings_desctiption()
    {
        echo '<p>Ustawienia dla sekcji menu</p>';
    }

    function phone_number_input_callback($args)
    {
        echo '<input id="phone_number_field" type="text" size="36" name="menu_contanct_phone_number" value="' . get_option('menu_contanct_phone_number') . '"/>';
    }

    function menu_logo_input_callback($args)
    {
        echo '<input id="upload_logo" type="text" size="36" name="menu_logo" value="' . get_option('menu_logo') . '"/>';
        echo '<input id="upload_logo_button" class="button" type="button" value="Załaduj logo" />';
    }
}

function init_footer_settings()
{
    add_settings_section("footer-section", "Ustawienia stopki", 'footer_settings_section', 'zona_studio_options');

    add_option('instagram_link', "");
    add_settings_field('instagram_link', 'URL Instagram', 'instagram_url_input_callback', 'zona_studio_options', 'footer-section');
    register_setting('zona_studio_options_grp', 'instagram_link');

    add_option('facebook_link', "");
    add_settings_field('facebook_link', 'URL Facebook', 'facebook_link_input_callback', 'zona_studio_options', 'footer-section');
    register_setting('zona_studio_options_grp', 'facebook_link');

    add_option('footer_phone_number', "");
    add_settings_field('footer_phone_number', 'Telefon', 'footer_phone_number_input_callback', 'zona_studio_options', 'footer-section');
    register_setting('zona_studio_options_grp', 'footer_phone_number');

    add_option('footer_email', "");
    add_settings_field('footer_email', 'Email', 'footer_email_input_callback', 'zona_studio_options', 'footer-section');
    register_setting('zona_studio_options_grp', 'footer_email');

    function footer_settings_section()
    {
        echo '<p>Ustawienia portali społecznościowych</p>';
    }

    function facebook_link_input_callback($args)
    {
        echo '<input id="facebook_link_field" type="text" size="36" name="facebook_link" value="' . get_option('facebook_link') . '"/>';
    }

    function instagram_url_input_callback($args)
    {
        echo '<input id="instagram_link_field" type="text" size="36" name="instagram_link" value="' . get_option('instagram_link') . '"/>';
    }

    function footer_phone_number_input_callback($args)
    {
        echo '<input id="footer_phone_number_field" type="text" size="36" name="footer_phone_number" value="' . get_option('footer_phone_number') . '"/>';
    }

    function footer_email_input_callback($args)
    {
        echo '<input id="footer_email_field" type="email" size="36" name="footer_email" value="' . get_option('footer_email') . '"/>';
    }
}