<?php

//function style_script_load(){
//    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(),'', true);
//    wp_enqueue_script('common', get_template_directory_uri() . '/js/common.js', array(),'', true);
//    wp_enqueue_script('jquery-3.1.1.min', get_template_directory_uri() . '/libs/jquery/jquery-3.1.1.min.js', array(),'', true);
//    wp_enqueue_script( 'jquery.mousewheel.min.', get_template_directory_uri() . '/libs/jquery-mousewheel/jquery.mousewheel.min.js', array(),'', true);
//    wp_enqueue_script('jquery.fancybox.pack', get_template_directory_uri() . '/libs/fancybox/jquery.fancybox.pack.js', array(),'', true);
//    wp_enqueue_script('waypoints-1.6.2.min', get_template_directory_uri() . '/libs/waypoints/waypoints-1.6.2.min.js', array(),'', true);    
//    wp_enqueue_script('jquery.scrollTo.min', get_template_directory_uri() . '/libs/scrollto/jquery.scrollTo.min.js', array(),'', true);
//    wp_enqueue_script('sel/owl.carousel.min', get_template_directory_uri() . '/libs/owl-carousel/owl.carousel.min.js', array(),'', true);
//    wp_enqueue_script('/jquery.plugin', get_template_directory_uri() . '/libs/countdown/jquery.plugin.js', array(),'', true);
//    wp_enqueue_script('/jquery.countdown.min', get_template_directory_uri() . '/libs/countdown/jquery.countdown.min.js', array(),'', true);
//    wp_enqueue_script('/jquery.countdown-ru', get_template_directory_uri() . '/libs/countdown/jquery.countdown-ru.js', array(),'', true);
//    wp_enqueue_script('av/navigation', get_template_directory_uri() . '/libs/landing-nav/navigation.js', array(),'', true);
//    
//    //Стили
//    wp_enqueue_style('bootstrap-grid-3.3.1.min', get_template_directory_uri() . '/libs/bootstrap/bootstrap-grid-3.3.1.min.css');
//    wp_enqueue_style('font-awesome.min', get_template_directory_uri() . '/libs/font-awesome-4.2.0/css/font-awesome.min.css');
//    wp_enqueue_style('jquery.fancybox', get_template_directory_uri() . '/libs/fancybox/jquery.fancybox.css');
//    wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/libs/owl-carousel/owl.carousel.css');
//    wp_enqueue_style('owl.theme', get_template_directory_uri() . '/libs/owl-carousel/owl.theme.css');
//    wp_enqueue_style('owl.transitions', get_template_directory_uri() . '/libs/owl-carousel/owl.transitions.css');
//    wp_enqueue_style('fonts', get_template_directory_uri() . '/css/fonts.css');
//    wp_enqueue_style('media', get_template_directory_uri() . '/css/media.css');
//    wp_enqueue_style('style', get_stylesheet_uri());
//    
//}
//add_action('wp_enqueue_scripts', 'style_script_load');
//миниатюры
add_theme_support( 'post-thumbnails' );

//header_menu

register_nav_menu('menu', 'Главное Меню');

?>