<!-- A new folder MU-plugin(Must Use Plugin) was created in order to make our post type available even if the theme was changed -->

<?php

function university_post_types() {
    // register_post_type() : is a function called to create a new post type.
    // Arg 1 - name of custom post type to create 
    // Arg 2 - an array of different options that describe the custom post type.

    register_post_type('event', array(
        // This make it visible to public on dashboard
         'public' => true,
        // This is used to customize all related labels properties of the post_types 
         'labels' => array(
            // this replace the initial name of post to the set value
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'sigular_name' => 'Event'

         ),
        //  this is used to change post icon
         'menu_icon' => 'dashicons-calendar',
    ));

}

// he hook name init is used in adding a custom post
add_action('init','university_post_types');

?>