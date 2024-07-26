<!-- 1. get_header(): is a function used to import header to page  -->
<?php get_header(); ?>

<?php  

while(have_posts()){
    the_post();?>
    <h2> <a href="<?php the_permalink(); ?>"><?php  the_title();?> </a></h2>
    <?php the_content(); ?>
    <hr>
    <?php  

}


get_footer();
?>

