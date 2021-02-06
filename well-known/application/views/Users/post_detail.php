<?php include('header.php'); ?>


<div class="container">
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url();?>">Home</a></li> 
              <li class="active"><?php  echo $post_detail['type']?></li>
            </ol>
            <h1><?php  echo $post_detail['title']?></h1>
            <div class="post_commentbox"> 
            <a href="#"><i class="fa fa-user"></i>Contant Writer</a> <span><i class="fa fa-calendar"></i>6:49 AM</span> <a href="#"><i class="fa fa-tags"></i><?php  echo $post_detail['type']?></a> </div>
            <div class="single_page_content"> <img class="img-center" src="<?php echo base_url()."upload/".$post_detail['image'];?>" alt="<?php  echo $post_detail['type']?>">
              <p><?php  echo $post_detail['description'];?></p>
            </div>
            <div class="social_link">
              <ul class="sociallink_nav">
                   
                <li><a href="https://web.facebook.com/Daily-Rozgar-News-108120057779961"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/Daily46721471"><i class="fa fa-twitter"></i></a></li>
                <!--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
                <li><a href="https://www.flickr.com/people/191066350@N04/"><i class="fa fa-flickr"></i></a></li>
                <li><a href="https://www.pinterest.com/dailyrozgarnews4/"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
            <div class="related_post">
              <h2>Related Post <i class="fa fa-thumbs-o-up"></i></h2>
              <ul class="spost_nav wow fadeInDown animated">
                     <?php foreach ($get_related_news as $popular_news){
                            $image       =  $popular_news['image'];
                            $title       =  $popular_news['title'];
                            $description =  $popular_news['description'];
                            $id =  $popular_news['id'];
                ?>
                <li>
                  <div class="media"> <a class="media-left" href="<?php echo base_url()."users/post_detail/".$id?>"> <img src="<?php echo base_url()."upload/".$image;?>" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="<?php echo base_url()."users/post_detail/".$id?>"> <?php echo substr($title,0,70).".."; ?></a> </div>
                  </div>
                </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!--<nav class="nav-slit"> <a class="prev" href="#"> <span class="icon-wrap"><i class="fa fa-angle-left"></i></span>-->
      <!--  <div>-->
      <!--    <h3>City Lights</h3>-->
      <!--    <img src="../images/post_img1.jpg" alt=""/> </div>-->
      <!--  </a> <a class="next" href="#"> <span class="icon-wrap"><i class="fa fa-angle-right"></i></span>-->
      <!--  <div>-->
      <!--    <h3>Street Hills</h3>-->
      <!--    <img src="../images/post_img1.jpg" alt=""/> </div>-->
      <!--  </a> </nav>-->
      <div class="col-lg-4 col-md-4 col-sm-4">
          <?php include('side_bar.php'); ?>
      </div>
    </div>
  </section>
 </div>
<?php include('footer.php'); ?>