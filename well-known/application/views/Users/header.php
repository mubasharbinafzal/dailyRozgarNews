<!DOCTYPE html>
<html>
<head>
<title>Daily Rozgar News</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><a href="<?php echo base_url();?>">Home</a></li>
              <li><a href="<?php echo base_url()."Users/about"; ?>">About</a></li>
              <li><a href="<?php echo base_url()."Users/contactUs"; ?>">Contact</a></li>
              <li><a href="<?php echo base_url()."Newspaper"; ?>">Free Newspaper</a></li>
            </ul>
          </div>
          <div class="header_top_right">
            <p>
                <?php 
                        date_default_timezone_set("Asia/Karachi");
                        echo date("Y-m-d h:i:sa");
                ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
            <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/main_banner.png" alt="banner" style="width:100%;"></a> 
        </div>
      </div>
    </div>
  </header>
  <!--<section id="navArea">-->
  <!--  <nav class="navbar navbar-inverse" role="navigation">-->
  <!--    <div class="navbar-header">-->
  <!--      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>-->
  <!--    </div>-->
  <!--    <div id="navbar" class="navbar-collapse collapse">-->
  <!--      <ul class="nav navbar-nav main_nav">-->
  <!--        <li class="active"><a href="<?php echo base_url(); ?>"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>-->
  <!--        <li><a href="#">Technology</a></li>-->
  <!--        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mobile</a>-->
  <!--          <ul class="dropdown-menu" role="menu">-->
  <!--            <li><a href="#">Android</a></li>-->
  <!--            <li><a href="#">Samsung</a></li>-->
  <!--            <li><a href="#">Nokia</a></li>-->
  <!--            <li><a href="#">Walton Mobile</a></li>-->
  <!--            <li><a href="#">Sympony</a></li>-->
  <!--          </ul>-->
  <!--        </li>-->
  <!--        <li><a href="#">Laptops</a></li>-->
  <!--        <li><a href="#">Tablets</a></li>-->
  <!--        <li><a href="pages/contact.html">Contact Us</a></li>-->
  <!--        <li><a href="pages/404.html">404 Page</a></li>-->
  <!--      </ul>-->
  <!--    </div>-->
  <!--  </nav>-->
  <!--</section>-->
  
    <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>Latest News</span>
          <ul id="ticker01" class="news_sticker">
              
              <?php
                foreach ($get_latest_new as $news){
                         $title = $news['title'];
                ?>
                    <li><?php echo $title; ?></li> 
                    
                <?php 
                
                }
              ?>
        
          </ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="https://web.facebook.com/Daily-Rozgar-News-108120057779961"></a></li>
              <li class="twitter"><a href="https://twitter.com/Daily46721471"></a></li>
              <li class="flickr"><a href="https://www.flickr.com/people/191066350@N04/"></a></li>
              <li class="pinterest"><a href="https://www.pinterest.com/dailyrozgarnews4/"></a></li>
              <!--<li class="googleplus"><a href="#"></a></li>-->
              <li class="vimeo"><a href="https://vimeo.com/user127060372"></a></li>
              <li class="youtube"><a href="https://www.youtube.com/channel/UCRkyNm4BjgxA8sg1CZ38LDg/"></a></li>
              <li class="mail"><a href="https://dailyrozgarnews.com/Users/contactUs"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>