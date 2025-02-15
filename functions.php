<?php






function myTheme_theme_support()
{
    add_theme_support("title-tag");
    add_theme_support("custom-logo");
    add_theme_support("post-thumbnails");
    add_theme_support('woocommerce');
}


add_action("after_setup_theme", "myTheme_theme_support");


function myTheme_menus()
{
    $locations = array(
        "primary" => "Desktop Primary Left Sidebar ",
        "footer" => "Footer Menu Items"
    );
    register_nav_menus($locations);
}


add_action("init", "myTheme_menus");




function myTheme_regsiter_styles()
{

    $version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        "myTheme_bootstrap",
        get_template_directory_uri() . "/assets/css/bootstrap.min.css",
        "4.4.1",
        "all"
    );
    wp_enqueue_style(
        "myTheme_font_awesome",
        get_template_directory_uri() . "/assets/css/all.min.css",
        "5.13.0",
        "all"
    );
    wp_enqueue_style(
        "myTheme_style",
        get_template_directory_uri() .  "/style.css",
        ["myTheme_bootstrap" , "myTheme_font_awesome" ],
        $version,
        "all"
    );
}


add_action("wp_enqueue_scripts", "myTheme_regsiter_styles");





function myTheme_regsiter_scripts()
{


    $version = wp_get_theme()->get('Version');


    wp_enqueue_script(
        "myTheme_jquery",
        get_template_directory_uri() . "/assets/js/jquery-3.4.1.slim.min.js",
        [],
        "3.4.1",
        "all",
        true
    );
    wp_enqueue_script(
        "myTheme_popper",
        "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js",
        [],
        "1.16.0",
        "all",
        true
    );



    wp_enqueue_script(
        "myTheme_bootstrap",
        get_template_directory_uri() . "/assets/js/bootstrap.bundle.min.js",
        [],
        "4.4.1",
        "all",
        true
    );
    wp_enqueue_script(
        "myTheme_script",
        get_template_directory_uri() . "/assets/js/main.js",
        [],
        $version,
        "all",
        true
    );
}


add_action("wp_enqueue_scripts", "myTheme_regsiter_scripts");
