<?php  

get_header();

while(have_posts()){
    the_post();?>

<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg')?>)"></div>
      <div class="page-banner__content container container--narrow">
     <h1 class="page-banner__title"><?php the_title() ;?></h1>
        <div class="page-banner__intro">
          <p>THIS WILL BE REPLACED LATER </p>
        </div>
      </div>
    </div>

    <div class="container container--narrow page-section">
        <?php  
        $theParent = wp_get_post_parent_id( get_the_ID( )) ;
        if ($theParent){ ?>
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p>
                <a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent);?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent);?></a> <span class="metabox__main"><?php the_title() ?></span>
                </p>
            </div>
        <?php 
        }
        ?>
     <?php  
     $testArray = get_pages(array(
        'child_of' => get_the_ID(),
     ) );

    // this is a condition to display the menu only if i'm on a child page or a parent page
    // or is used to mean if either one if true
        if($theParent or $testArray) { ?>
      <div class="page-links">
        <h2 class="page-links__title"><a href="<?php  echo get_permalink($theParent)?>"><?php echo get_the_title($theParent);?> </a> </h2>
        <ul class="min-list">
          <?php  
        //   2. the condition used to display the parent child list in the child page as well on the parent page
          if($theParent){
            $findChildrenOf = $theParent;
          } else {
            $findChildrenOf = get_the_ID();
          }
        // wp_list_pages(): a func used to list all pages in WP
        // the func wp_list_pages() uses an associative Array to target some key values 
          wp_list_pages(
            array(
            // setting title not to show
            'title_li' => NULL,
            // setting the child of parent to display
            'child_of' => $findChildrenOf, 
            // how to make the list display be by our custom order
            // going into page settings and set  the order value will determine how they are display  
            'sort_column' => 'menu_order'
          ));  ?>
        </ul> 
      </div>
      <?php } ?>

      <div class="generic-content">
        <?php the_content(); ?>
      </div>
    </div>
    
  
    <?php  

}

get_footer();

?>