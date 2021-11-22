<?php

if(site_url() == "http://localhost/wordpress/beautyproject/"){
    define("VERSION", time()); 
}else{
    define("VERSION", wp_get_theme()->get("Version"));
}
   

function markett_bootstraping(){
    load_theme_textdomain('markett');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    $markett_custom_header_details = array(
        'header-text' => true,
        'default-text-color' => "#000",
        'width' => 1200,
        'height' => 600,
        'flex-height' => true,
        'flex-width' => true,
    );
    add_theme_support('custom-header',   $markett_custom_header_details);

    $markett_logo_default = array(
        'width' => 100,
        'height' => 100
    );

    add_theme_support("custom-logo", $markett_logo_default);
    add_theme_support('custom-background');
    register_nav_menu("topmenu", __("Top Menu", "markett"));
    register_nav_menu("mainmenu", __("Main Menu", "markett"));
    register_nav_menu("footermenu", __("Footer Menu", "markett"));
}

add_action("after_setup_theme", "markett_bootstraping");



function markett_assets (){
    
    //lib css
    wp_enqueue_style('markett-bootstrap-min', get_theme_file_uri('/assets/css/bootstrap/css/bootstrap.min.css'), null, VERSION);
    wp_enqueue_style('markett-font-awesome', get_theme_file_uri('/assets/css/font-awesome/css/font-awesome.min.css'),  null, VERSION);
    wp_enqueue_style('markett-bootstrap-dateTime-picker-min', get_theme_file_uri('/assets/js/datetimepicker/bootstrap-datetimepicker.min.css'),  null, VERSION);
    wp_enqueue_style('markett-owl-carousel', get_theme_file_uri('/assets/js/owl-carousel/owl.carousel.css'),  null, VERSION);
    wp_enqueue_style('markett-lib', get_theme_file_uri('/assets/css/themecss/lib.css'),  null, VERSION);
    wp_enqueue_style('markett-jquery-ui-min', get_theme_file_uri('/assets/js/jquery-ui/jquery-ui.min.css'),  null, VERSION);


    //theme css
    wp_enqueue_style('markett-megamenu', get_theme_file_uri('/assets/css/themecss/so_megamenu.css'),  null, VERSION);
    wp_enqueue_style('markett-categories', get_theme_file_uri('/assets/css/themecss/so-categories.css'),  null, VERSION);
    wp_enqueue_style('markett-listing-tabs', get_theme_file_uri('/assets/css/themecss/so-listing-tabs.css'),  null, VERSION);
    wp_enqueue_style('markett-header5', get_theme_file_uri('/assets/css/header5.css'), null, VERSION);
    wp_enqueue_style('markett-footer2', get_theme_file_uri('/assets/css/footer2.css'),  null, VERSION);
    wp_enqueue_style('markett-home5', get_theme_file_uri('/assets/css/home5.css'),  null, VERSION);
    wp_enqueue_style('markett-responsibe', get_theme_file_uri('/assets/css/responsive.css'),  null, VERSION);
    wp_enqueue_style('markett-bootstrap-min', get_theme_file_uri('/assets/css/bootstrap/css/bootstrap.min.css'),  null, VERSION);
    wp_enqueue_style('main0stylesheet', get_stylesheet_uri(), null, VERSION);

     
   // Include Libs & Plugins  JS file

    wp_enqueue_script("markett-jquery-min", get_theme_file_uri('/assets/js/jquery-2.2.4.min.js'), null,VERSION, true);
    wp_enqueue_script("markett-bootstrap-min", get_theme_file_uri('/assets/js/bootstrap.min.js'), null,VERSION, true);
    wp_enqueue_script("markett-owl-carousel", get_theme_file_uri('/assets/js/owl-carousel/owl.carousel.js'), array('jquery'),VERSION, true);
    wp_enqueue_script("markett-libs", get_theme_file_uri('/assets/js/themejs/libs.js'), null,VERSION, true);
    wp_enqueue_script("markett-jquery-unveil", get_theme_file_uri('/assets/js/unveil/jquery.unveil.js'), array('jquery'),VERSION, true);
    wp_enqueue_script("markett-jquery-countdown", get_theme_file_uri('/assets/js/countdown/jquery.countdown.min.js'), array('jquery'),VERSION, true);
    wp_enqueue_script("markett-jquery-dcjqaccordion", get_theme_file_uri('/assets/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js'), array('jquery'),VERSION, true);
    wp_enqueue_script("markett-dateTime-picker", get_theme_file_uri('/assets/js/datetimepicker/moment.js'), array('jquery'),VERSION, true);
    wp_enqueue_script("markett-datetime-min", get_theme_file_uri('/assets/js/datetimepicker/bootstrap-datetimepicker.min.js'), array('jquery'),VERSION, true);
    wp_enqueue_script("markett-jquery-ui", get_theme_file_uri('/assets/js/jquery-ui/jquery-ui.min.js'), array('jquery'),VERSION, true);
    wp_enqueue_script("markett-modernizr", get_theme_file_uri('/assets/js/modernizr/modernizr-2.6.2.min.js'), array('jquery'),VERSION, true);
   

   // Theme js
   wp_enqueue_script("markett-application", get_theme_file_uri('/assets/js/themejs/application.js'), array(),VERSION, true);
   wp_enqueue_script("markett-omepage", get_theme_file_uri('/assets/js/themejs/homepage.js'), null,VERSION, true);
   wp_enqueue_script("markett-megamenu", get_theme_file_uri('/assets/js/themejs/so_megamenu.js'), array(),VERSION, true);
   wp_enqueue_script("markett-addtocart", get_theme_file_uri('/assets/js/themejs/addtocart.js'), array(),VERSION, true);
}
add_action('wp_enqueue_scripts', 'markett_assets');

