<?php

function wilcon_script_js()
{
    wp_enqueue_style('stylesheet', get_stylesheet_uri());
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap');
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css');
    wp_enqueue_style('anim', get_template_directory_uri().'/css/animate.css', array(), '1.0', 'all');
    wp_enqueue_style('owl', get_template_directory_uri().'/css/owl.carousel.min.css', array(), '1.0', 'all');
    wp_enqueue_style('theme-def', get_template_directory_uri().'/css/owl.theme.default.min.css', array(), '1.0', 'all');
    wp_enqueue_style('magni', get_template_directory_uri().'/css/magnific-popup.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap-datepicker.css', array(), '1.0', 'all');
    wp_enqueue_style('timepicker', get_template_directory_uri().'/css/jquery.timepicker.css', array(), '1.0', 'all');
    wp_enqueue_style('flaticon', get_template_directory_uri().'/css/flaticon.css', array(), '1.0', 'all');
    wp_enqueue_style('main', get_template_directory_uri().'/css/style.css', array(), '1.0', 'all');


    wp_enqueue_script('jquery');
    wp_enqueue_script('migrate', get_template_directory_uri().'/js/jquery-migrate-3.0.1.min.js', array(), '1.0', true);
    wp_enqueue_script('min', get_template_directory_uri().'/js/popper.min.js', array(), '1.0', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(), '1.0', true);
    
    wp_enqueue_script('easing', get_template_directory_uri().'/js/jquery.easing.1.3.js', array(), '1.0', true);
    wp_enqueue_script('waypoints', get_template_directory_uri().'/js/jquery.waypoints.min.js', array(), '1.0', true);
    wp_enqueue_script('stellar', get_template_directory_uri().'/js/jquery.stellar.min.js', array(), '1.0', true);
    wp_enqueue_script('owl', get_template_directory_uri().'/js/owl.carousel.min.js', array(), '1.0', true);
    wp_enqueue_script('magni', get_template_directory_uri().'/js/jquery.magnific-popup.min.js', array(), '1.0', true);
    wp_enqueue_script('number', get_template_directory_uri().'/js/jquery.animateNumber.min.js', array(), '1.0', true);
    wp_enqueue_script('date', get_template_directory_uri().'/js/bootstrap-datepicker.js', array(), '1.0', true);
    wp_enqueue_script('time', get_template_directory_uri().'/js/jquery.timepicker.min.js', array(), '1.0', true);
    wp_enqueue_script('scrollax', get_template_directory_uri().'/js/scrollax.min.js', array(), '1.0', true);
    wp_enqueue_script('map', get_template_directory_uri().'/js/js/google-map.js', array(), '1.0', true);
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0', true);
    wp_enqueue_script('api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'wilcon_script_js');
