<?php declare(strict_types=1);

/*if (! function_exists('mayarun_load_theme_textdomain')) {
    function mayarun_load_theme_textdomain() {
        load_theme_textdomain( 'nusrat', get_template_directory() . '/languages' );
    }

    add_action( 'after_setup_theme', 'mayarun_load_theme_textdomain' );
}*/

function mayarun_theme_setup()
{
    add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'mayarun_theme_setup' );

function nusrat_files()
{
    wp_enqueue_style('main-styles', get_stylesheet_uri());
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    wp_enqueue_style('asset-css', get_theme_file_uri('assets/css/app.css'));
    

    wp_enqueue_script('rutime-js', get_theme_file_uri('assets/js/runtime.min.js'));
    wp_enqueue_script('boot-js', get_theme_file_uri('assets/js/bootstrap.min.js'));
    wp_enqueue_script('load-js', get_theme_file_uri('assets/js/lodash.min.js'));
    wp_enqueue_script('app-js', get_theme_file_uri('assets/js/app.min.js'));
    wp_enqueue_script('custom-js', get_theme_file_uri('assets/js/custom.min.js'));
}
add_action('wp_enqueue_scripts', 'nusrat_files');
