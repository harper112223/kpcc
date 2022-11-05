<?php
if ( ! function_exists( 'ii_setup' ) ) :

function ii_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'ii', get_template_directory() . '/languages' );
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
        'primary' => __( 'Primary Menu', 'ii' ),
        'social'  => __( 'Social Links Menu', 'ii' ),
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
endif; // ii_setup

add_action( 'after_setup_theme', 'ii_setup' );


if ( ! function_exists( 'ii_init' ) ) :

function ii_init() {

    
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
endif; // ii_setup

add_action( 'init', 'ii_init' );


if ( ! function_exists( 'ii_widgets_init' ) ) :

function ii_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'ii_widgets_init' );
endif;// ii_widgets_init



if ( ! function_exists( 'ii_customize_register' ) ) :

function ii_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'ii_customize_register' );
endif;// ii_customize_register


if ( ! function_exists( 'ii_enqueue_scripts' ) ) :
    function ii_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'initstringsaf' );
    wp_enqueue_script( 'initstringsaf', get_template_directory_uri() . '/_layouts/15/1033/initstringsa75f.js?rev=2WxjgxyM2qXGgY9r2nHW8A%3D%3DTAG0', false, null, false);

    wp_deregister_script( 'initbc' );
    wp_enqueue_script( 'initbc', get_template_directory_uri() . '/_layouts/15/init4bc7.js?rev=slYEfbCr5WcSs7jgtA8u%2BQ%3D%3DTAG0', false, null, false);

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/style%20library/en-us/kpctheme/js/jquery-3.2.1.min.js', false, null, false);

    wp_deregister_script( 'jqueryspservices' );
    wp_enqueue_script( 'jqueryspservices', get_template_directory_uri() . '/style%20library/en-us/kpctheme/js/jquery.spservices.min.js', false, null, false);

    wp_deregister_script( 'popper' );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/style%20library/en-us/kpctheme/js/popper.min.js', false, null, false);

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/style%20library/en-us/kpctheme/js/bootstrap.min.js', false, null, false);

    wp_deregister_script( 'webslidemenu' );
    wp_enqueue_script( 'webslidemenu', get_template_directory_uri() . '/style%20library/en-us/kpctheme/js/webslidemenu.js', false, null, false);

    wp_deregister_script( 'swiper' );
    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/style%20library/en-us/kpctheme/js/swiper.min.js', false, null, false);

    wp_deregister_script( 'main' );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/style%20library/en-us/kpctheme/js/main.js', false, null, false);

    wp_deregister_script( 'isotopepkgd' );
    wp_enqueue_script( 'isotopepkgd', get_template_directory_uri() . '/style%20library/en-us/kpctheme/js/isotope.pkgd.min.js', false, null, false);

    wp_deregister_script( 'moment' );
    wp_enqueue_script( 'moment', get_template_directory_uri() . '/style%20library/en-us/kpctheme/js/moment.js', false, null, false);

    wp_deregister_script( 'analytics' );
    wp_enqueue_script( 'analytics', get_template_directory_uri() . '/style%20library/en-us/kpctheme/js/analytics.js', false, null, false);

    wp_deregister_script( 'scriptresourceb' );
    wp_enqueue_script( 'scriptresourceb', get_template_directory_uri() . '/ScriptResourceb650.js?d=SuPPes5kECeqNC-hB5m6NY47kRnn0zUMq0rI5GLx2kQefKg3Dhop46Pv6Ahn5tFkhvSSG5v2Ed_oazqAJS2oIYEXflV0sGFLIF3PkiHatChjrzxXPIoWTtuqqdtEoOUtPfgVzuHJxkumvfSgeZ3PSj3ioDx3h70pwlEXheH8e07OD0y8bN60_npzBBHNka2D0&amp;t=ffffffffaa493ab8', false, null, false);

    wp_deregister_script( 'blankec' );
    wp_enqueue_script( 'blankec', get_template_directory_uri() . '/_layouts/15/blank8e4c.js?rev=u3wmWs0TAwWT2O8OiUpuFQ%3D%3DTAG0', false, null, false);

    wp_deregister_script( 'scriptresource' );
    wp_enqueue_script( 'scriptresource', get_template_directory_uri() . '/ScriptResource0882.js?d=9I_OMtTmb23q-N2l9F_bgkEmEKAY9MBFx8L1BtVHPPDJQJuYaqt8esQ6gJScY8SvEW0fCKcJJZOiK4_TERQJUuGS2QUxIBEMdZh-YDU8PnyYCw5OMZ3ZY-mGkTLMYJSzsWdwmr_oxNDFIZE9swYQNY7XZUCy-JHBEzu69NwCOkcleeEe05CbGzLTAhLsY6gV0&amp;t=ffffffffaa493ab8', false, null, false);

    wp_deregister_script( 'webresourcecd' );
    wp_enqueue_script( 'webresourcecd', get_template_directory_uri() . '/WebResource65cd.js?d=4cPL7cXfo-HVFe0TYJW5jsmp0T4PZbgUc6mzRmsJjmioE26YpZqb3Q8ZjVFJ5jDrTBpoygIEROe9drOT13ggYaXABzY8EQoPqN-G6NlMWyQ1&amp;t=637823473705833095', false, null, true);

    wp_deregister_script( 'scriptresourcecb' );
    wp_enqueue_script( 'scriptresourcecb', get_template_directory_uri() . '/ScriptResourcec7b0.js?d=Ze36yCPDQGwRSyyCXg6TNLHAmGDq1PgQOVP4mw0-c19z6S3Bp8GwdcdZTERjmTiN0S1pM-ZcrpgIRDgxSGdfN3yPBwVL_mcdU7fCx0rVTKyzjvl_VZ6AVB35oFvYd0GocYvb8xEueYPh3QEwhnMa5jZxOUINBZhu9lSyZBAy4Ms1&amp;t=2265eaa7', false, null, true);

    wp_deregister_script( 'blankec' );
    wp_enqueue_script( 'blankec', get_template_directory_uri() . '/_layouts/15/blank8e4c.js?rev=u3wmWs0TAwWT2O8OiUpuFQ%3D%3DTAG0', false, null, true);

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/../ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', false, null, true);

    wp_deregister_script( 'apif' );
    wp_enqueue_script( 'apif', get_template_directory_uri() . '/../www.google.com/recaptcha/api85f1.js?onload=onloadCallback&amp;render=explicit', false, null, true);

    wp_deregister_script( 'script-1' );
    wp_enqueue_script( 'script-1', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyD6RmWvaQtMGle9v1q-Qjoi7WdMk-4MZ_4&amp;v=3.exp&amp;sensor=false', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'corevcaba' );
    wp_enqueue_style( 'corevcaba', get_template_directory_uri() . '/_layouts/15/1033/styles/Themable/corev15caba.css?rev=f4ES4o33Y5B6OSnm1GOXLA%3D%3DTAG0', false, null, 'all');

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/Style%20Library/en-US/KPCTheme/css/bootstrap.css', false, null, 'all');

    wp_deregister_style( 'swiper' );
    wp_enqueue_style( 'swiper', get_template_directory_uri() . '/Style%20Library/en-US/KPCTheme/css/swiper.min.css', false, null, 'all');

    wp_deregister_style( 'webslidemenu' );
    wp_enqueue_style( 'webslidemenu', get_template_directory_uri() . '/Style%20Library/en-US/KPCTheme/css/webslidemenu.css', false, null, 'all');

    wp_deregister_style( 'ms' );
    wp_enqueue_style( 'ms', get_template_directory_uri() . '/Style%20Library/en-US/KPCTheme/css/2016MS.css', false, null, 'all');

    wp_deregister_style( 'fontawesome' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/Style%20Library/en-US/KPCTheme/css/font-awesome.min.css', false, null, 'all');

    wp_deregister_style( 'custom' );
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/Style%20Library/en-US/KPCTheme/css/custom.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', 'https://fonts.googleapis.com/css?family=Raleway', false, null, 'all');

    wp_deregister_style( 'style-2' );
    wp_enqueue_style( 'style-2', 'https://fonts.googleapis.com/css?family=Open+Sans', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'ii_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */

    /* Pinegrow generated Include Resources End */
?>