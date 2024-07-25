<?php  
// 1. Accessing wordpress created post with predefined function
// 2. The while loop condition says: keep looping as long as there's post
while(have_posts()){
    //3. the_post() is a wordpress function that does several important things
    // It keep track of the post we're currently working with 
    // the_post() tells wordpress to get all relevant information each time while loops run 
    the_post();?>

    <!-- 4. Dropping out of PHP to HTML while still in WHILE LOOP. -->
    <!-- 5. the_title() : give the title of a post -->
     <!-- 7. the_permalink(): It's the function for a sigle page in wordpress -->
    <h2> <a href="<?php the_permalink(); ?>"><?php  the_title();?> </a></h2>
    <!-- 6. the_content(): give the post content -->
    <?php the_content(); ?>
    <hr>

    <?php  

}

?>