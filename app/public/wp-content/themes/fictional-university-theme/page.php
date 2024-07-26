<?php  

get_header();

while(have_posts()){
    the_post();?>
    <h2> Here's a Page Display</h2>
    <h2> <?php  the_title();?></h2>
    
    <?php the_content(); ?>
    <?php  

}

get_footer();

?>