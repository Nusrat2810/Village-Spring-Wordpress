<?php

declare(strict_types=1);

/*if (! function_exists('mayarun_load_theme_textdomain')) {
    function mayarun_load_theme_textdomain() {
        load_theme_textdomain( 'nusrat', get_template_directory() . '/languages' );
    }

    add_action( 'after_setup_theme', 'mayarun_load_theme_textdomain' );
}*/

function nusrat_files()
{
    wp_enqueue_style('main-styles', get_stylesheet_uri());
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    wp_enqueue_style('asset-css', get_theme_file_uri('assets/css/app.css'));
    wp_enqueue_script('jquery', get_theme_file_uri('assets/js/jquery.min.js'));
    wp_enqueue_script('rutime-js', get_theme_file_uri('assets/js/runtime.min.js'));
    wp_enqueue_script('boot-js', get_theme_file_uri('assets/js/bootstrap.min.js'));
    wp_enqueue_script('load-js', get_theme_file_uri('assets/js/lodash.min.js'));
    wp_enqueue_script('app-js', get_theme_file_uri('assets/js/app.min.js'));
    wp_enqueue_script('custom-js', get_theme_file_uri('assets/js/custom.min.js'));


    //<script defer src="assets/js/runtime.min.js"></script>
    //<script defer src="assets/js/jquery.min.js"></script>
    //<script defer src="assets/js/bootstrap.min.js"></script>
    //<script defer src="assets/js/lodash.min.js"></script>
    //<script defer src="assets/js/app.min.js"></script>
    //<script defer src="assets/js/custom.min.js"></script>
    //wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), ['jquery'], 1.0 , true);
    //wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    //wp_enqueue_style('university-index',get_theme_file_uri('build/index.css'));
    //wp_enqueue_style('university-style-index',get_theme_file_uri('build/style-index.css'), ['university-index']);
}
add_action('wp_enqueue_scripts', 'nusrat_files');
