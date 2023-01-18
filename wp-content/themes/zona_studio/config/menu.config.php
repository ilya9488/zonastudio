<?php

function init_menu()
{
    register_nav_menus(
        array(
            'primary' => esc_html__('primary', 'zona_studio'),
        )
    );
}


function init_navwalker()
{
    /**
     * Register Custom Navigation Walker
     */
    function register_navwalker()
    {
        require_once get_template_directory() . '/extras/class-wp-bootstrap-navwalker.php';
    }
    add_action('after_setup_theme', 'register_navwalker');
}