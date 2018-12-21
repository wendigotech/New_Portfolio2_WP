<?php
if ( ! function_exists( 'st2_setup' ) ) :

function st2_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'wdg1', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'st2' ),
        'social'  => __( 'Social Links Menu', 'st2' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
}
endif; // st2_setup

add_action( 'after_setup_theme', 'st2_setup' );


if ( ! function_exists( 'st2_init' ) ) :

function st2_init() {


    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */

    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // st2_setup

add_action( 'init', 'st2_init' );


if ( ! function_exists( 'st2_widgets_init' ) ) :

function st2_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    register_sidebar( array(
        'name' => __( 'Left Sidebar', 'wdg1' ),
        'id' => 'left-sidebar',
        'description' => 'Left Sidebar widget area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Right Sidebar', 'wdg1' ),
        'id' => 'right-sidebar',
        'description' => 'Right Sidebar widget area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Bottom Full', 'wdg1' ),
        'id' => 'footerfull',
        'description' => 'Full bottom widget with dynamic grid',
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s '. st2_slbd_count_widgets( 'footerfull' ) .'">',
        'after_widget' => '</div><!-- .footer-widget -->',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ) );

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'st2_widgets_init' );
endif;// st2_widgets_init



if ( ! function_exists( 'st2_customize_register' ) ) :

function st2_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'footer_settings', array(
        'title' => __( 'ST2 Footer Settings', 'wdg1' ),
        'description' => __( 'Footer Settings', 'wdg1' ),
        'priority' => '2'
    ));

    $wp_customize->add_section( 'header_settings', array(
        'title' => __( 'ST2 Header Settings', 'wdg1' ),
        'description' => __( 'Header Settings', 'wdg1' ),
        'priority' => '1'
    ));

    $wp_customize->add_section( 'theme_settings', array(
        'title' => __( 'ST2 Theme Settings', 'wdg1' ),
        'description' => __( 'Theme Settings > CAUTION: Work in Progress', 'wdg1' ),
        'priority' => '0'
    ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'show_left_sidebar', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'show_left_sidebar', array(
        'label' => __( 'Show Left Sidebar', 'wdg1' ),
        'description' => __( 'Activate the Left Sidebar', 'wdg1' ),
        'type' => 'checkbox',
        'section' => 'theme_settings'
    ));

    $wp_customize->add_setting( 'show_right_sidebar', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'show_right_sidebar', array(
        'label' => __( 'Show Right Sidebar', 'wdg1' ),
        'description' => __( 'Activate the Right Sidebar', 'wdg1' ),
        'type' => 'checkbox',
        'section' => 'theme_settings'
    ));

    $wp_customize->add_setting( 'footer_text', array(
        'type' => 'theme_mod',
        'default' => 'Proudly powered by WordPress | Theme: Starter Theme 2 by Pinegrow 2018. (Version: 0.0.0)',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_text', array(
        'label' => __( 'Footer Content', 'wdg1' ),
        'type' => 'textarea',
        'section' => 'footer_settings'
    ));

    $wp_customize->add_setting( 'jumbotron_heading_color', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'jumbotron_heading_color', array(
        'label' => __( 'Jumbotron Heading Color', 'wdg1' ),
        'type' => 'color',
        'section' => 'header_settings'
    ) ) );

    $wp_customize->add_setting( 'jumbotron_text_color', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'jumbotron_text_color', array(
        'label' => __( 'Jumbotron Paragraph Color', 'wdg1' ),
        'type' => 'color',
        'section' => 'header_settings'
    ) ) );

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'st2_customize_register' );
endif;// st2_customize_register


if ( ! function_exists( 'st2_enqueue_scripts' ) ) :
    function st2_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'carousel_init', get_template_directory_uri() . '/assets/js/carousel_init.js', null, null, true );

    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.js', null, null, true );

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', null, null, true );

    wp_deregister_script( 'noise' );
    wp_enqueue_script( 'noise', get_template_directory_uri() . '/assets/js/noise.min.js', false, null, true);

    wp_deregister_script( 'util' );
    wp_enqueue_script( 'util', get_template_directory_uri() . '/assets/js/util.js', false, null, true);

    wp_deregister_script( 'swirl' );
    wp_enqueue_script( 'swirl', get_template_directory_uri() . '/assets/js/swirl.js', false, null, true);

    wp_deregister_script( 'demo' );
    wp_enqueue_script( 'demo', get_template_directory_uri() . '/components/blk-design-system-html-v1.0.0/assets/demo/demo.js', false, null, true);

    wp_deregister_script( 'blkdesignsystem' );
    wp_enqueue_script( 'blkdesignsystem', get_template_directory_uri() . '/components/blk-design-system-html-v1.0.0/assets/js/blk-design-system.min.js', false, null, true);

    wp_deregister_script( 'moment' );
    wp_enqueue_script( 'moment', get_template_directory_uri() . '/components/blk-design-system-html-v1.0.0/assets/js/plugins/moment.min.js', false, null, true);

    wp_deregister_script( 'nouislider' );
    wp_enqueue_script( 'nouislider', get_template_directory_uri() . '/components/blk-design-system-html-v1.0.0/assets/js/plugins/nouislider.min.js', false, null, true);

    wp_deregister_script( 'perfectscrollbarjquery' );
    wp_enqueue_script( 'perfectscrollbarjquery', get_template_directory_uri() . '/components/blk-design-system-html-v1.0.0/assets/js/plugins/perfect-scrollbar.jquery.min.js', false, null, true);

    wp_deregister_script( 'bootstrapswitch' );
    wp_enqueue_script( 'bootstrapswitch', get_template_directory_uri() . '/components/blk-design-system-html-v1.0.0/assets/js/plugins/bootstrap-switch.js', false, null, true);


    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css', false, null, 'all');

    wp_deregister_style( 'theme' );
    wp_enqueue_style( 'theme', get_template_directory_uri() . '/css/theme.css', false, null, 'all');

    wp_deregister_style( 'woocommerce' );
    wp_enqueue_style( 'woocommerce', get_template_directory_uri() . '/css/woocommerce.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', 'https://fonts.googleapis.com/css?family=Poppins', false, null, 'all');

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_bloginfo('stylesheet_url'), false, null, 'all');

    wp_deregister_style( 'blkdesignsystem' );
    wp_enqueue_style( 'blkdesignsystem', get_template_directory_uri() . '/components/blk-design-system-html-v1.0.0/assets/css/blk-design-system.min.css', false, null, 'all');

    wp_deregister_style( 'demo' );
    wp_enqueue_style( 'demo', get_template_directory_uri() . '/components/blk-design-system-html-v1.0.0/assets/demo/demo.css', false, null, 'all');

    wp_deregister_style( 'nucleoicons' );
    wp_enqueue_style( 'nucleoicons', get_template_directory_uri() . '/components/blk-design-system-html-v1.0.0/assets/css/nucleo-icons.css', false, null, 'all');

    wp_deregister_style( 'base' );
    wp_enqueue_style( 'base', get_template_directory_uri() . '/base.css', false, null, 'all');

    wp_deregister_style( 'all' );
    wp_enqueue_style( 'all', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'st2_enqueue_scripts' );
endif;

/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/bootstrap/wp_bootstrap4_navwalker.php";

    /* Pinegrow generated Include Resources End */

/* Don't add custom your custom snippets here, but use inc/custom.php */
/* ST2 Include Resources Begin */
require_once "inc/custom.php";

?>
