<?php
/**
 * @package qrcode
 * @version 1.0.0
 */
/*
Plugin Name: qrcode qrcode
Plugin URI: https://wordpress.org/qrcode
Description: qrcode.
Version: 4.2.1
Author: Yearul
Author URI: https://automattic.com/wordpress-plugins/yearul
License: GPLv2 or later
Text Domain: qrcode
Domain Path: /language/
*/

function qrcode_textdomain(){
    load_plugin_textdomain('qrcode', false, dirname(__File__)."/language/");
}
add_action('plugins_loaded', 'qrcode_textdomain');

function post_to_qrcode($content){
    $current_post_id = get_the_ID();
    $current_post_title = get_the_title();
    $current_post_url = urlencode(get_the_permalink($current_post_id));
    $image_src = sprintf('https://api.qrserver.com/v1/create-qr-code/?data=%s&size=220x220&margin=0', $current_post_url);
    $content =  sprintf("<div class='post-qr-code'><img src='%s' alt='%s' /></div>", $image_src, $current_post_title) ;
    return $content;
}
add_filter('the_content', 'post_to_qrcode');