<?php
/**
 * @package friscic
 * @subpackage wjqm
 * @since jquery mobile v0.1
 */

function enqueue_scripts()
{
   	wp_enqueue_script('jquery');
	wp_enqueue_script("jquery-mobile", get_template_directory_uri()."/js/jquery.mobile-1.2.0.js", array( "jquery"));
}

if (!is_admin())
{
	add_action("wp_enqueue_scripts", "enqueue_scripts");
}