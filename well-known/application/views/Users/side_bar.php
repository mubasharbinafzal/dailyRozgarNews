<aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Popular Post</span></h2>
            <ul class="spost_nav">
                
                 <?php foreach ($get_popular_news as $popular_news){
                            $image       =  $popular_news['image'];
                            $title       =  $popular_news['title'];
                            $description =  $popular_news['description'];
                            $id =  $popular_news['id'];
                ?>
              <li>
                <div class="media wow fadeInDown"> <a href="<?php echo base_url()."users/post_detail/".$id?>" class="media-left"> <img alt="" src="<?php echo base_url()."upload/".$image;?>"> </a>
                  <div class="media-body"> <a href="<?php echo base_url()."users/post_detail/".$id?>" class="catg_title"><?php echo substr($title,0,100).".."; ?></a> </div>
                </div>
              </li>
               <?php } ?>
            </ul>
          </div>
          <!--<div class="single_sidebar">-->
          <!--  <ul class="nav nav-tabs" role="tablist">-->
          <!--    <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>-->
          <!--    <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>-->
          <!--    <li role="presentation"><a href="#comments" aria-controls="messages" role="tab" data-toggle="tab">Comments</a></li>-->
          <!--  </ul>-->
          <!--  <div class="tab-content">-->
          <!--    <div role="tabpanel" class="tab-pane active" id="category">-->
          <!--      <ul>-->
          <!--        <li class="cat-item"><a href="#">Sports</a></li>-->
          <!--        <li class="cat-item"><a href="#">Fashion</a></li>-->
          <!--        <li class="cat-item"><a href="#">Business</a></li>-->
          <!--        <li class="cat-item"><a href="#">Technology</a></li>-->
          <!--        <li class="cat-item"><a href="#">Games</a></li>-->
          <!--        <li class="cat-item"><a href="#">Life &amp; Style</a></li>-->
          <!--        <li class="cat-item"><a href="#">Photography</a></li>-->
          <!--      </ul>-->
          <!--    </div>-->
          <!--    <div role="tabpanel" class="tab-pane" id="video">-->
          <!--      <div class="vide_area">-->
          <!--        <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--    <div role="tabpanel" class="tab-pane" id="comments">-->
          <!--      <ul class="spost_nav">-->
          <!--        <li>-->
          <!--          <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="<?php echo base_url();?>assets/images/post_img1.jpg"> </a>-->
          <!--            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>-->
          <!--          </div>-->
          <!--        </li>-->
          <!--        <li>-->
          <!--          <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="<?php echo base_url();?>assets/images/post_img2.jpg"> </a>-->
          <!--            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>-->
          <!--          </div>-->
          <!--        </li>-->
          <!--        <li>-->
          <!--          <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="<?php echo base_url();?>assets/images/post_img1.jpg"> </a>-->
          <!--            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>-->
          <!--          </div>-->
          <!--        </li>-->
          <!--        <li>-->
          <!--          <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="<?php echo base_url();?>assets/images/post_img2.jpg"> </a>-->
          <!--            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>-->
          <!--          </div>-->
          <!--        </li>-->
          <!--      </ul>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
          <div class="single_sidebar wow fadeInDown">
          <!--  <h2><span>Sponsor</span></h2>-->
          <!--  <a class="sideAdd" href="#"><img src="<?php echo base_url();?>assets/images/add_img.jpg" alt=""></a> </div>-->
          <!--<div class="single_sidebar wow fadeInDown">-->
          <!--  <h2><span>Category Archive</span></h2>-->
          <!--  <select class="catgArchive">-->
          <!--    <option>Select Category</option>-->
          <!--    <option>Life styles</option>-->
          <!--    <option>Sports</option>-->
          <!--    <option>Technology</option>-->
          <!--    <option>Treads</option>-->
          <!--  </select>-->
          <!--</div>-->
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Links</span></h2>
            <ul>
              <li><a href="<?php echo base_url(); ?>">Home</a></li>
              <li><a href="<?php echo base_url()."Users/about"; ?>">About</a></li>
              <li><a href="<?php echo base_url()."Users/contactUs"; ?>">Contact us</a></li>
              <li><a href="<?php echo base_url()."auth"; ?>">Login</a></li>
            </ul>
          </div>
        </aside>