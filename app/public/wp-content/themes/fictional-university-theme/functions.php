<?php  

function university_files() { 
    // this is used to load our css. It's expecting 2 arg.
    //first: the nickname of the styling . second: the location of the file
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());   
}

//  add_action(): it's a function used to tell wordpress what to do.
//  It's accept two argument where the first is where we tell function type of instruction we're giving
// Second is where we give WP the name of function we want to run

//  wp_enqueue_scripts : is an instruction telling wordpress we want to load css or javascript files
// excluding parenthenses at the function university_files mean we don't want to run it now leaving WP to do at it's time
add_action('wp_enqueue_scripts','university_files');
