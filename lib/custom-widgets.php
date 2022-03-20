<?php

function wilcon_widgets()
{
    register_sidebar(array(
        'name'=>__('Blog sidebar', 'wilcon'),
        'id'=>'blog_sidebar',
        'before_widget'=>'<div class="sidebar-box"><ul class="categories">',
        'after_widget'=>'</ul></div>',
        'before_title'=>'<h3 class="heading-sidebar">',
        'after_title'=>'</h3>',
    ));
    // footer column one
    register_sidebar(array(
        'name'=>__('Footer Column one', 'wilcon'),
        'id'=>'column-1',
        'before_widget'=> '<div class="ftco-footer-widget">',
        'after_widget'=>'</div>',
        'before_title'=>'<h2 class="ftco-heading-2">',
        'after_title'=>'</h2>',
    ));

    // footer column two
    register_sidebar(array(
    'name'=>__('Footer Column two', 'wilcon'),
    'id'=>'column-2',
    'before_widget'=>'<div class="ftco-footer-widget">',
    'after_widget'=>'</div>',
    'before_title'=>'<h2 class="ftco-heading-2">',
    'after_title'=>'</h2>',
    ));

    // footer column three
    register_sidebar(array(
    'name'=>__('Footer Column three', 'wilcon'),
    'id'=>'column-3',
    'before_widget'=>'<div class="ftco-footer-widget">',
    'after_widget'=>'</div>',
    'before_title'=>'<h2 class="ftco-heading-2">',
    'after_title'=>'</h2>',
    ));

    // footer column four
    register_sidebar(array(
    'name'=>__('Footer Column four', 'wilcon'),
    'id'=>'column-4',
    'before_widget'=>'<div class="ftco-footer-widget">',
    'after_widget'=>'</div>',
    'before_title'=>'<h2 class="ftco-heading-2">',
    'after_title'=>'</h2>',
    ));
}
add_action('widgets_init', 'wilcon_widgets');
