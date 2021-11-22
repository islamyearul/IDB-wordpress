<?php

if(site_url() == "http://localhost/wordpress/hasinhaydar"){
    define("VERSION", time()); 
}else{
    define("VERSION", wp_get_theme()->get("Version"));
}
    


function hasin_bootstraping(){
    load_theme_textdomain('hasin');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    $hasin_custom_header_details = array(
        'header-text' => true,
        'default-text-color' => "#000",
        'width' => 1200,
        'height' => 600,
        'flex-height' => true,
        'flex-width' => true,
    );
    add_theme_support('custom-header',   $hasin_custom_header_details);

    $hasin_logo_default = array(
        'width' => 100,
        'height' => 100
    );

    add_theme_support("custom-logo", $hasin_logo_default);
    add_theme_support('custom-background');
    register_nav_menu("topmenu", __("Top Menu", "hasin"));
    register_nav_menu("footermenu", __("Footer Menu", "hasin"));
}

add_action("after_setup_theme", "hasin_bootstraping");


function hasin_assets (){
        wp_enqueue_style("hasin", get_stylesheet_uri(), null, VERSION);
        wp_enqueue_style("bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
        wp_enqueue_style("featherlight-css", "//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css");

        wp_enqueue_script('featherlight-js', '//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js', array("jquery") , "0.0.1", true);
        wp_enqueue_script('hasin_main', get_theme_file_uri('/assets/js/main.js'), null,VERSION, true);
    }
add_action('wp_enqueue_scripts', 'hasin_assets');


function hasin_sidebar(){
    register_sidebar( array(
        'name' => __('single post sidebar', 'hasin'),
        'id' => 'sidebar-1',
        'description' => __('right Sidebar', 'hasin'),
        'before_widget' => '<section id="%1$s" class="widget %2$s" >',
        'after_widget' => '</section>',
        'before_title' => '<h2 class=" widget-title">',
        'after_title' => '</h2>'
       
    ) );

    register_sidebar( array(
        'name' => __('footer Left', 'hasin'),
        'id' => 'footer-left',
        'description' => __('footer Left', 'hasin'),
        'before_widget' => '<section id="%1$s" class="widget %2$s" >',
        'after_widget' => '</section>',
        'before_title' => '<h2 class=" widget-title">',
        'after_title' => '</h2>'
       
    ) );
    
    register_sidebar( array(
        'name' => __('footer Right', 'hasin'),
        'id' => 'footer-right',
        'description' => __('footer Roght', 'hasin'),
        'before_widget' => '<section id="%1$s" class="widget %2$s" >',
        'after_widget' => '</section>',
        'before_title' => '<h2 class=" widget-title">',
        'after_title' => '</h2>'
       
    ) );
}
add_action('widgets_init', 'hasin_sidebar');
add_filter( 'use_widgets_block_editor', '__return_false' );

function hasin_menu_item_class($classes, $item){
    $classes[] = "list-inline-item";
    return $classes;

}
add_filter('nav_menu_css_class','hasin_menu_item_class', 10, 2);


function hasin_about_page_banner(){
    if(is_page()){
        $page_feature_image = get_the_post_thumbnail_url( null, "large" );
        ?> 
            <style>
                .page-header{
                    background-image: url(<?php echo $page_feature_image ?>)
                }
            </style>

        <?php
    }
    if(is_front_page()){
        if(current_theme_supports('custom-header')){
            ?>

            <style>
                .header{
                    background-image: url(<?php echo header_image() ?>);
                    background-repeat: no-repeat;
                    background-size: cover;
                    margin-bottom: 50px;
                }
                .header h1.heading a, h3.tagline{
                    color: #<?php echo get_header_textcolor(); ?>;
                    <?php 
                    if(!display_header_text()){
                        echo "display: none;";
                    }
                    
                    ?>
                }
            </style>

            <?php
        }
    }
}
add_action('wp_head', 'hasin_about_page_banner');



