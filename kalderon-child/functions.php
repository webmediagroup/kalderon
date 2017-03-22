<?php

include ('Mobile_Detect.php');
$detect = new Mobile_Detect;

/* check if user using smaller mobile device */
function my_wp_is_mobile() {
    global $detect;
    if( $detect->isMobile() && !$detect->isTablet() ) {
        return true;
    } else {
        return false;
    }
}

/* check if user using tablet device */
function my_wp_is_tablet() {
    global $detect;
    if( $detect->isTablet() ) {
        return true;
    } else {
        return false;
    }
}


function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'parent-rtl-style', get_template_directory_uri().'/rtl.css' );

    /*
     * Bootstrap Style
     */
    wp_enqueue_style( 'bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_style( 'bootstrap-style-rtl', '//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css');

    /*
     * HoverEffectIdeas
     */
    wp_enqueue_style( 'normalize-css', get_stylesheet_directory_uri().'/HoverEffectIdeas/css/normalize.css');
    wp_enqueue_style( 'HoverEffectIdeas-css', get_stylesheet_directory_uri().'/HoverEffectIdeas/css/set1.css');

    /*
     * Schedule
     */
    wp_enqueue_style( 'font-awesome-css', get_stylesheet_directory_uri().'/schedule/assets/css/font-awesome.min.css');
    wp_enqueue_style( 'schedule-css', get_stylesheet_directory_uri().'/schedule/assets/css/style.css');

    /*
     * Heebo Font
     */
    wp_enqueue_style( 'assistant-font-css', 'https://fonts.googleapis.com/css?family=Assistant:400,700&subset=hebrew');

    /*
    * Slick
    */
    wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri().'/slick/slick.css');
    wp_enqueue_style( 'slick-theme-css', get_stylesheet_directory_uri().'/slick/slick-theme.css');
}
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );



function my_custom_script() {
    /*
     * Jquery
     */
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array ( '' ), 1.0, true);

    /*
     * Custom Scripts
     */
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri().'/js/main.js', array ( 'jquery' ), 1.0, true);

    /*
     * Bootstrap Scripts
     */
    wp_enqueue_script( 'bootstrap-script', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array ( 'jquery' ), 1.0, true);

    /*
     * Schedule Scripts
     */
    wp_enqueue_script( 'schedule-script', get_stylesheet_directory_uri().'/schedule/assets/js/main.js', array ( 'jquery' ), 1.0, true);

    /*
    * Slick Scripts
    */
    wp_enqueue_script( 'slick-script', get_stylesheet_directory_uri().'/slick/slick.min.js', array ( 'jquery' ), 1.0, true);
}
add_action( 'wp_enqueue_scripts', 'my_custom_script' );



if( function_exists('acf_add_options_page') ) {
    acf_add_options_page('Main Settings');
}






/***
 * Shortcodes
 */
function slider($atts) {
    extract(shortcode_atts(array(
        'sid' => '',
    ), $atts));
    $slider_slides = get_field('slider', $sid);
    $string = '';
    $string .= '<div class="slider fade">';
            foreach ($slider_slides as $slider_slides_item) :
                $img = $slider_slides_item['slider_image']['url'];
                $string .= '<div>
                    <div class="image"><img src="'.$img.'"/></div>
                </div>';
            endforeach;
    $string .= '</div>';
    return $string;
}
add_shortcode('slider', 'slider');
