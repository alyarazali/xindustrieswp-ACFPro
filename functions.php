<?php

function load_stylesheets()
{
    wp_register_style('font', get_template_directory_uri() . '/fonts/font-awesome.min.css', array(), 1, 'all');
    wp_enqueue_style('font');

    wp_register_style('bootstrap', get_template_directory_uri() . '/plugin-frameworks/bootstrap.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('aos', get_template_directory_uri() . '/plugin-frameworks/aos.css', array(), 1, 'all');
    wp_enqueue_style('aos');

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), 1, 'all');
    wp_enqueue_style('style');

    wp_register_style('responsive', get_template_directory_uri() . '/common/responsive.css', array(), 1, 'all');
    wp_enqueue_style('responsive');


    wp_register_style('custom', get_template_directory_uri() . '/custom.css', array(), false, 'all');
    wp_enqueue_style('custom'); //Write on this will overwrite on other stylesheets
}

add_action('wp_enqueue_scripts', 'load_stylesheets');



function loadjs(){
    wp_deregister_script('jquery'); //To reset the jquery name

    wp_enqueue_script('jquery', get_template_directory_uri() . '/plugin-frameworks/jquery-3.2.1.min.js', array(), 1, 1, 1); //1, 1 jadi true pon bole
    wp_enqueue_script('jquery');

    // wp_enqueue_script('jqueryv', get_template_directory_uri() . '/plugin-frameworks/jquery.validate.js', array(), 1, 1, 1); //1, 1 jadi true pon bole
    // wp_enqueue_script('jqueryv');

    wp_enqueue_script('jqueryf', get_template_directory_uri() . '/plugin-frameworks/jquery.form.js', array(), 1, 1, 1); //1, 1 jadi true pon bole
    wp_enqueue_script('jqueryf');

    wp_register_script('bootstrap', get_template_directory_uri() . '/plugin-frameworks/bootstrap.min.js', array(), 1, 1, 1);
    wp_enqueue_script('bootstrap');

    wp_register_script('aos', get_template_directory_uri() . '/plugin-frameworks/aos.js', array(), 1, 1, 1);
    wp_enqueue_script('aos');

    // wp_register_script('scripts', get_template_directory_uri() . '/common/scripts.js', array(), 1, 1, 1);
    // wp_enqueue_script('scripts');

    wp_register_script('custom', get_template_directory_uri() . '/custom.js', array(), 1, 1, 1);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'loadjs');

add_theme_support('post-thumbnails'); //Allow post featured image
add_theme_support('menus'); //Menu Support - To add menus in appearance

//Register menus
register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        //'footer_menu' => __('Footer Menu', 'theme'),
    )
);



// add_image_size('smallest', 300, 300, false); //true for hard crop
// add_image_size('largest', 800, 800, false); //Use force regenerate thumbnail plugin to generate images according to ur size
