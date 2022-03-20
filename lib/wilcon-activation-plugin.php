<?php
function accounting_theme_register_required_plugins()
{
    $plugins = array(
        array(
            'name'=>__('Contact Form 7', 'wilcon'),
            'slug'=> 'contact-form-7',
            'required'=> true,
        ),

        array(
            'name'=>__('Widget Import & Export', 'wilcon'),
            'slug'=> 'widget-importer-exporter',
            'required'=> true,
        ),
      
        array(
            'name'=>__('One Click Demo Import', 'wilcon'),
            'slug'=> 'one-click-demo-import',
            'required'=> true,
        ),
        array(
            'name'=>__('Advanced Custom Fields', 'wilcon'),
            'slug'=> 'advanced-custom-fields',
            'required'=> true,
        ),
        array(
            'name'=>__('Advanced Custom Fields: Font Awesome Field', 'wilcon'),
            'slug'=> 'advanced-custom-fields-font-awesome',
            'required'=> true,
        ),
        array(
            'name'=>__('Advanced Custom Fields Pro', 'wilcon'),
            'slug'=> 'advanced-custom-fields-pro',
            'source'=> get_stylesheet_directory().'/custom-plugin/advanced-custom-fields-pro.zip',
            'required'=> true,
        ),
        array(
            'name'=>__('Wilcom Custom Plugin', 'wilcon'),
            'slug'=> 'wilcon-custom-plugin',
            'source'=> get_stylesheet_directory().'/custom-plugin/wilcon-custom-plugin.zip',
            'required'=> true,
        ),
          
        array(
            'name'=>__('Classic Widgets', 'wilcon'),
            'slug'=> 'classic-widgets',
            'required'=> true,
        ),


    );

    $config= array(
        'id'=> 'wilcon-plugin-active',
        'menu'=> 'Wilcon Plugins Activation',
        'parent_slug'=> 'themes.php',
        'has_notices'=> true,

    );
    tgmpa($plugins, $config);
}

add_action('tgmpa_register', 'accounting_theme_register_required_plugins');
