<?php


function load_scripts(){
    wp_enqueue_style('google-fonts','https://fonts.googleapis.com/icon?family=Material+Icons');
    wp_enqueue_style('fonts-awesome',get_template_directory_uri().'/css/font-awesome.min.css');
    wp_enqueue_style('google-pie','https://fonts.googleapis.com');
    wp_enqueue_style('google-gstatic','https://fonts.gstatic.com');
    wp_enqueue_style('google-apis','https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;1,800&display=swap');
    wp_enqueue_style('boostrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');

    wp_enqueue_style('boostrap',get_template_directory_uri().'/css/bootstrap.css');
    wp_enqueue_style('about-css',get_template_directory_uri().'/css/about.css');

    wp_enqueue_script('jquery-script',get_template_directory_uri().'/js/jquery.min.js',array(),'1.11.3',true);
    wp_enqueue_script('boostrap-script',get_template_directory_uri().'/js/bootstrap.js',array(),'1.11.3',true);
    wp_enqueue_script('boostrap2-script','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js',array(),'1.11.3',true);
    wp_enqueue_script('about-script',get_template_directory_uri().'/js/about.js',array(),'1.11.3',true);
}
add_action('wp_enqueue_scripts','load_scripts');


function excelsia_menu(){
    $location=array(
        "topprimary"=>"top primary menue sidebar",
        "primary" => "Desktop Primary Left Sidebar",
        "footerCol1" => "Footer Menu Items column1",
        "footerCol2" => "Footer Menu Items column2",
        "footerCol3" => "Footer Menu Items column3",
        "footerCol4" => "Footer Menu Items column4",
        "footerCol5" => "Footer Menu Items column5",
        "mobilefooterCol1" => "Mobile-Footer Menu Items column1",
        "mobilefooterCol2" => "Mobile-Footer Menu Items column2",
        "mobilefooterCol3" => "Mobile-Footer Menu Items column3",
        "socialmenue" => "Social Menu",
    );

    register_nav_menus($location);
}


add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
function excelsia_sidebars(){

    register_sidebar(
        array(
            "name"=>'about-intro',
            "id"=>'aboutintro',
            "description"=>'About us intro text with header',
            "before_widget"=>'<div class="widget-wrapper">',
            "after_widget"=>'</div>',
            "before_title"=>'<h4 class="widget-title">',
            "after_title"=>'</h4>'
        )
    );

    register_sidebar(
        array(
            "name"=>'about-redsection',
            "id"=>'aboutredsection',
            "description"=>'About us second-section-redbox',
            "before_widget"=>'<div class="widget-wrapper">',
            "after_widget"=>'</div>',
            "before_title"=>'<h4 class="widget-title">',
            "after_title"=>'</h4>'
        )
    );

    register_sidebar(
        array(
            "name"=>'about-intro-image-section',
            "id"=>'aboutintroimagesection',
            "description"=>'About us first section image',
            "before_widget"=>'<div class="widget-wrapper">',
            "after_widget"=>'</div>',
            "before_title"=>'<h4 class="widget-title">',
            "after_title"=>'</h4>'
        )
    );

    register_sidebar(
        array(
            "name"=>'about-box-before-image-third-row',
            "id"=>'boxbeforeimagethirdrow',
            "description"=>'the box before the image in section3',
            "before_widget"=>'<div class="widget-wrapper">',
            "after_widget"=>'</div>',
            "before_title"=>'<h4 class="widget-title">',
            "after_title"=>'</h4>'
        )
    );

    register_sidebar(
        array(
            "name"=>'about-image-after-box-before-image-third-row',
            "id"=>'imageafterboxbeforeimagethirdrow',
            "description"=>'the image after the box before the image in section3',
            "before_widget"=>'<div class="widget-wrapper">',
            "after_widget"=>'</div>',
            "before_title"=>'<h4 class="widget-title">',
            "after_title"=>'</h4>'
        )
    );

    register_sidebar(
        array(
            "name"=>'site-footer-text',
            "id"=>'sitefootertext',
            "description"=>'the text at the bottom of the footer',
            "before_widget"=>'<div class="widget-wrapper">',
            "after_widget"=>'</div>',
            "before_title"=>'<h4 class="widget-title">',
            "after_title"=>'</h4>'
        )
    );
}

add_action('widgets_init','excelsia_sidebars');
add_action('init','excelsia_menu');
