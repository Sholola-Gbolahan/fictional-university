<!DOCTYPE html >
<!-- this is used to sit site language to that seleted in wordpress settings -->
<html <?php  language_attributes()?>>
<head>
  <!-- telling wordpress type of character and number to use -->
  <meta charset=<?php bloginfo('charset')?> >
  <!-- setting for each device to display web content according to their size -->
  <meta name="viewport" content="width=device-width initial-scale = 1">
    <?php wp_head();?>

</head>
<!-- body_class() : provide us with a lot class information about any visited page that can be used in Css and javascript -->
<body <?php body_class();?> >
<header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
          <a href="<?php echo site_url()?>"><strong>Fictional</strong> University</a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <ul>
              <!-- 1. Adding link function to link to each pages -->
              <li><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
              <li><a href="#">Programs</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">Campuses</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </nav>
          <div class="site-header__util">
            <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>

