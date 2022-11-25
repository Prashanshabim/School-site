<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Shree Saraswati Higher Secondary School</title>
    
    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lightbox.css">
    <style>
      .stripe {
	      background-image: #fff;
        color: #fff;
	      padding: 3rem;
	      height: 13rem;
        width: 27rem;
	      margin-top: 4rem;
        margin-left: 38%;
	      /*transform: rotate(10deg);*/
	      z-index: -5;
        text-align:center;
       justify-content: center;
      }
    </style>
    <?php wp_head(); ?>
  </head>

<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="<?php echo home_url(); ?>"><em>Shree </em>Saraswati H.S.S</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <?php
    $url = $_SERVER['REQUEST_URI'];
    //echo $url;
    ?>
    <nav id="menu" class="main-nav" role="navigation" style="font-size:18px !important;">
      <ul class="main-menu">
        <?php 
            $activehome=($url=='/school/') ? 'active' : '';
        ?>
        <li class="<?php echo $activehome; ?>"><a href="<?php echo home_url();?>">Home</a></li>
        <?php 
           $activeabout=($url=='/school/about/') ? 'active' : '';
           ?>
        <li class="<?php echo $activeabout; ?>"><a targer="_blank" href="<?php echo home_url();?>/about">About</a>
        </li>
        <?php 
           $activecourse=($url=='/school/courses/') ? 'active' : '';
           ?>
        <li class="<?php echo $activecourse; ?>"><a href="<?php echo home_url();?>/courses">Courses</a></li>
        <?php 
           $activegallery=($url=='/school/gallery-now/') ? 'active' : '';
           ?>
        <li class="<?php echo $activegallery; ?>"><a href="<?php echo home_url();?>/gallery-now">Gallery</a></li>
        <?php 
           $activenews=($url=='/school/news1/') ? 'active' : '';
           ?>
        <li class="<?php echo $activenews; ?>"><a href="<?php echo home_url();?>/news1">News & Events</a></li>
        <?php 
           $activecontact=($url=='/school/contact-now/') ? 'active' : '';
           ?>
        <li class="<?php echo $activecontact; ?>"><a href="<?php echo home_url();?>/contact">Contact</a></li>
      </ul>
    </nav>
  </header>
