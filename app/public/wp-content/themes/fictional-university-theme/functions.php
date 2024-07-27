<?php  

function university_files() { 

    // Adding a script file required the use of wp_enqueue_script() 
    // Argument accepted by this function 
    //  1. file Name, 2. script location 3. dependency Array, 4. script version number, 5. A selection of  true of false to allow WP load the script before the body tag
    wp_enqueue_script('main-university-js', get_theme_file_uri('./build/index.js'), array('jquery'), '1.0', true );
    // 3. Loading custom google font for our page
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    // 2. Loading of an external link font-awesome styling in wordpress
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 
    // 1. get_theme_file_uri() : Direct WP to loaction of an exiting file to load from
    //  instead of get_file_uri() that only get style from the general WP style.css
    wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));   

    wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css')); 
}

add_action('wp_enqueue_scripts','university_files');
