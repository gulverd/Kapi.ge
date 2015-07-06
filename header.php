<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo('title')?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo get_bloginfo('template_directory');?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo get_bloginfo('template_directory');?>/css/bootstrap-responsive.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_url')?>" rel="stylesheet">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="head">

  <p id="head_p">

    <?php
        wp_nav_menu( array(
          'menu' => 'secondary',
           'theme_location' => 'secondary',
            'menu_class' => 'head_menu',
        ));?>
  </p>
  <div class="language_menu">
  <?php dynamic_sidebar('right-sidebar')?>
  </div>
</div>

<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> 
    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
    <span class="icon-bar"></span> <span class="icon-bar"></span>
     <span class="icon-bar"></span> </a>
    <a class="brand" href="<?php echo home_url(); ?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/logo.png"></a>
      <div class="nav-collapse">
          <?php
        wp_nav_menu( array(
            'menu' => 'primary',
            'theme_location' => 'primary',
            'depth' => 2,
            'container' => false,
            'menu_class' => 'nav pull-right',
  
        ));?>
      </div>
    </div> 
  </div>
</div>
<div class="container">
  <!--Start Carousel-->
 <?php include 'slideshow.php';?>

<?php include 'leftmenu.php';?>


<div class="topge">
<!-- TOP.GE COUNTER CODE -->
<script language="JavaScript" type="text/javascript" src="http://counter.top.ge/cgi-bin/cod?100+58590"></script>
<noscript>
<a target="_top" href="http://counter.top.ge/cgi-bin/showtop?58590">
<img src="http://counter.top.ge/cgi-bin/count?ID:58590+JS:false" border="0" alt="TOP.GE" id="topge"/></a>
</noscript>
<!-- / END OF COUNTER CODE -->
</div>