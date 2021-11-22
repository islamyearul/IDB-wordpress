<?php

if(site_url() == "http://localhost/wordpress/beautyproject/"){
    define("VERSION", time()); 
}else{
    define("VERSION", wp_get_theme()->get("Version"));
}
   

function beauti_bootstraping(){
    load_theme_textdomain('beauti');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    $beauti_custom_header_details = array(
        'header-text' => true,
        'default-text-color' => "#000",
        'width' => 1200,
        'height' => 600,
        'flex-height' => true,
        'flex-width' => true,
    );
    add_theme_support('custom-header',   $beauti_custom_header_details);

    $beauti_logo_default = array(
        'width' => 100,
        'height' => 100
    );

    add_theme_support("custom-logo", $beauti_logo_default);
    add_theme_support('custom-background');
    register_nav_menu("topmenu", __("Top Menu", "beauti"));
    register_nav_menu("mainmenu", __("Main Menu", "beauti"));
    register_nav_menu("footermenu", __("Footer Menu", "beauti"));
}

add_action("after_setup_theme", "beauti_bootstraping");

function beauti_assets (){


    //wp_enqueue_style("beauti-style", get_theme_file_uri('/assets/css/style.css'), null,VERSION, true);
    // wp_enqueue_style("stylemap", get_theme_file_uri('/assets/css/style.css.map'), null,VERSION, true);
    // wp_enqueue_style("beauti", get_stylesheet_uri(), null, VERSION);


    // wp_enqueue_style("bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
    
    // wp_enqueue_script('beauti-custom-js', get_theme_file_uri('/assets/js/custom.js'), null,VERSION, true);
    // wp_enqueue_script('beauti-custom-js', get_theme_file_uri('/assets/js/ion.rangeSlider.min.js'), null,VERSION, true);
    // wp_enqueue_script('beauti-custom-js', get_theme_file_uri('/assets/js/jquery-3.5.1.min.js'), null,VERSION, true);
    // wp_enqueue_script('beauti-custom-js', get_theme_file_uri('/assets/js/jquery.maskedinput.js'), null,VERSION, true);
    // wp_enqueue_script('beauti-custom-js', get_theme_file_uri('/assets/js/lazyload.min.js'), null,VERSION, true);
    // wp_enqueue_script('beauti-custom-js', get_theme_file_uri('/assets/js/rating.js'), null,VERSION, true);
    // wp_enqueue_script('beauti-custom-js', get_theme_file_uri('/assets/js/slick.min.js'), null,VERSION, true);
}
add_action('wp_enqueue_scripts', 'beauti_assets');