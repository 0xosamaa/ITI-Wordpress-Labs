<?php

/**
 * Plugin Name: Title Capitalizer
 * Description: Lab plugin
 * Version: 0.1
 * Author: Osama
 **/


function wporg_filter_title($title)
{
    return ucwords($title);;
}
add_filter('the_title', 'wporg_filter_title');
