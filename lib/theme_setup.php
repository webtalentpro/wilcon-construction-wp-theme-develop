<?php
function wilcon_after_setup()
{
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support("html5");
    add_theme_support('post-thumbnails', array('post', 'page', 'services', 'projects', 'teams', 'testimonials'));
    load_theme_textdomain('wilcon', get_template_directory_uri().'/language/ ');
    register_nav_menus(array(
        'primary_menu'=>__('Main Menu', 'wilcon'),
    ));
}
add_action('after_setup_theme', 'wilcon_after_setup');


function excerpt_more_theme($more)
{
    global $post;
    return '</br>';
}
add_action('excerpt_more', 'excerpt_more_theme');

function excerpt_length_more($length)
{
    return 15;
}
add_action('excerpt_length', 'excerpt_length_more');
