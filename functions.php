<?php
require_once('lib/theme_scripts.php');
require_once('lib/theme_setup.php');
require_once('lib/bs4navwalker.php');

require_once('lib/wilcon_options.php');
require_once('lib/custom-widgets.php');
require_once('lib/class-tgm-plugin-activation.php');
require_once('lib/wilcon-activation-plugin.php');
require_once('lib/one-click-demo-import.php');




function wpb_move_comment_field_to_bottom($fields)
{
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;
    return $fields;
}
     
    add_filter('comment_form_fields', 'wpb_move_comment_field_to_bottom');




/**
 * Change comment form textarea to use placeholder
 *
 * @since  1.0.0
 * @param  array $args
 * @return array
 */
function ea_comment_textarea_placeholder($args)
{
    $args['comment_field']        = str_replace('textarea', 'textarea placeholder="Write a comment"', $args['comment_field']);
    return $args;
}
add_filter('comment_form_defaults', 'ea_comment_textarea_placeholder');

/**
 * Comment Form Fields Placeholder
 *
 */
function be_comment_form_fields($fields)
{
    foreach ($fields as &$field) {
        $field = str_replace('id="author"', 'id="author" placeholder="Enter your name"', $field);
        $field = str_replace('id="email"', 'id="email" placeholder="Enter your email"', $field);
        $field = str_replace('id="url"', 'id="url" placeholder="Enter your website"', $field);
    }
    return $fields;
}
add_filter('comment_form_default_fields', 'be_comment_form_fields');
