<?php include('header.php'); ?>

 <div class="container">

  <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
            <?php foreach ($get_latest_new as $slider){
                            $id =  $slider['id'];
                            $image =  $slider['image'];
                            $title =  $slider['title'];
                            $description =  $slider['description'];
                        
                                    
            ?>
          <div class="single_iteam"> <a href="<?php echo base_url()."users/post_detail/".$id?>"> <img src="<?php echo base_url()."upload/".$image ;?>" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="<?php echo base_url()."users/post_detail/".$id?>"><?php echo substr($title,0,90).".."; ?></a></h2>
              <p><?php echo substr($description,0,300).".."; ?></p>
            </div>
          </div>
          
           <?php } ?>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>Latest post</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
                 <?php foreach ($get_latest_side as $slider){
                            $image =  $slider['image'];
                            $title =  $slider['title'];
                            $description =  $slider['description'];
                            $id =  $slider['id'];
                        
                                    
            ?>
                
              <li>
                <div class="media"> <a href="<?php echo base_url()."users/post_detail/".$id?>" class="media-left"> <img alt="" src="<?php echo base_url()."upload/".$image ;?>"> </a>
                  <div class="media-body"> <a href="<?php echo base_url()."users/post_detail/".$id?>" class="catg_title"> <?php echo substr($title,0,100).".."; ?></a> </div>
                </div>
              </li>
             <?php } ?>
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_post_content">
            <h2><span>Latest News</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">
                  
                <li>
                    
                    <?php  $count = 0;  foreach ($get_latest_new as $latest_news) {
                                
                                $type = $latest_news['type'];
                                $title = $latest_news['title'];
                                $description = $latest_news['description'];
                                $image = $latest_news['image'];
                                $id = $latest_news['id'];
                                if($count == 0){
                                
                  ?>
                    <figure class="bsbig_fig"> <a href="<?php echo base_url()."users/post_detail/".$id?>" class="featured_img">
                        <img src="<?php echo base_url()."upload/".$image ;?>"  alt="" > <span class="overlay"></span> </a>
                        <figcaption> <a href="<?php echo base_url()."users/post_detail/".$id?>"><?php echo substr($title,0,50).".."; ?></a> </figcaption>
                        <p><?php echo substr($description,0,150).".."; ?></p>
                    </figure>
                 
                       <?php  $count++;}} ?>
                   
                </li>
           
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                  
                    <?php  $count = 1;  foreach ($get_latest_new as $latest_news) {
                                
                                $type = $latest_news['type'];
                                $title = $latest_news['title'];
                                $description = $latest_news['description'];
                                $image = $latest_news['image'];
                                $id = $latest_news['id'];
                                
                                if($count <= 4){
                                
                  ?>
                <li>
                  <div class="media wow fadeInDown"> <a href="<?php echo base_url()."users/post_detail/".$id?>" class="media-left">
                       <img alt="" src="<?php echo base_url()."upload/".$image ;?>"> </a>
                    <div class="media-body"> <a href="<?php echo base_url()."users/post_detail/".$id?>" class="catg_title"> 
                          <?php echo substr($title,0,50).".."; ?></a> </div>
                  </div>
                </li>
                
                 <?php  $count++;}} ?>
                
              </ul>
            </div>
          </div>
          <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span>Politics</span></h2>
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                      
                      <?php  $count = 0;  foreach ($get_latest_new_Politics as $Politics) {
                                
                                $type = $Politics['type'];
                                $title = $Politics['title'];
                                $description = $Politics['description'];
                                $image = $Politics['image'];
                                $id = $Politics['id'];
                                if($count == 0){
                                
                  ?>
                      
                    <figure class="bsbig_fig"> <a href="<?php echo base_url()."users/post_detail/".$id?>" class="featured_img"> <img alt="<?php echo $title; ?>" src="<?php echo base_url()."upload/".$image ;?>" > <span class="overlay"></span> </a>
                      <figcaption> <a href="<?php echo base_url()."users/post_detail/".$id?>"><?php echo substr($title,0,50).".."; ?></a> </figcaption>
                      <p><?php echo substr($description,0,150).".."; ?></p>
                    </figure>
                      <?php  $count++;}} ?>
                    
                  </li>
                </ul>
                <ul class="spost_nav">
                         <?php    foreach ($get_latest_new_Politics as $Politics) {
                                
                                $type = $Politics['type'];
                                $title = $Politics['title'];
                                $description = $Politics['description'];
                                $image = $Politics['image'];
                                $id = $Politics['id'];
                               
                                
                  ?>
                  <li>
                    <div class="media wow fadeInDown"> <a href="<?php echo base_url()."users/post_detail/".$id?>" class="media-left"> <img alt="" src="<?php echo base_url()."upload/".$image ;?>"> </a>
                      <div class="media-body"> <a href="<?php echo base_url()."users/post_detail/".$id?>" class="catg_title">  <?php echo substr($title,0,50).".."; ?></a> </div>
                    </div>
                  </li>
                  <?php  } ?>
                </ul>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span>Health</span></h2>
                <ul class="business_catgnav">
                  <li>
                       <?php  $count = 0;  foreach ($get_latest_new_Health as $Health) {
                                
                                $type = $Health['type'];
                                $title = $Health['title'];
                                $description = $Health['description'];
                                $image = $Health['image'];
                                $id = $Health['id'];
                                if($count == 0){
                                
                  ?>
                     <figure class="bsbig_fig"> <a href="<?php echo base_url()."users/post_detail/".$id?>" class="featured_img"> <img alt="<?php echo $title; ?>" src="<?php echo base_url()."upload/".$image ;?>" > <span class="overlay"></span> </a>
                      <figcaption> <a href="<?php echo base_url()."users/post_detail/".$id?>"><?php echo substr($title,0,50).".."; ?></a> </figcaption>
                      <p><?php echo substr($description,0,150).".."; ?></p>
                    </figure>
                    
                      <?php  $count++;}} ?>
                  </li>
                </ul>
                <ul class="spost_nav">
                    
                        <?php    foreach ($get_latest_new_Health as $Health) {
                                
                                $type = $Health['type'];
                                $title = $Health['title'];
                                $description = $Health['description'];
                                $image = $Health['image'];
                                $id = $Health['id'];
                               
                                
                  ?>
                  <li>
                    <div class="media wow fadeInDown"> <a href="<?php echo base_url()."users/post_detail/".$id?>" class="media-left"> <img alt="" src="<?php echo base_url()."upload/".$image ;?>"> </a>
                      <div class="media-body"> <a href="<?php echo base_url()."users/post_detail/".$id?>" class="catg_title">  <?php echo substr($title,0,50).".."; ?></a> </div>
                    </div>
                  </li>
                  <?php  } ?>
                  
                </ul>
              </div>
            </div>
          </div>
          <div class="single_post_content">
            <h2><span>Top Stories</span></h2>
          
            
                   
            <ul class="photograph_nav  wow fadeInDown">
                     <?php    foreach ($getNewspost_image as $image) {
                                $image = $image['image']; 
                        ?>
                          <li>
                            <div class="photo_grid">
                              <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo base_url()."upload/".$image ;?>" title="Photography Ttile 1"> <img src="<?php echo base_url()."upload/".$image ;?>" alt=""/></a> </figure>
                            </div>
                          </li>
                <?php  } ?>
            </ul>
          </div>
          <div class="single_post_content">
            <h2><span>Mixed News</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav">
                <li>
                        <?php  $count = 0;  foreach ($get_latest_new_Mixed as $Mixed) {
                                
                                $type = $Mixed['type'];
                                $title = $Mixed['title'];
                                $description = $Mixed['description'];
                                $image = $Mixed['image'];
                                $id = $Mixed['id'];
                                if($count == 0){
                                
                  ?>
                  <figure class="bsbig_fig"> <a href="<?php echo base_url()."users/post_detail/".$id?>" class="featured_img"> <img alt="<?php echo $title; ?>" src="<?php echo base_url()."upload/".$image ;?>" > <span class="overlay"></span> </a>
                      <figcaption> <a href="<?php echo base_url()."users/post_detail/".$id?>"><?php echo substr($title,0,50).".."; ?></a> </figcaption>
                      <p><?php echo substr($description,0,150).".."; ?></p>
                    </figure>
                  
                   <?php  $count++;}} ?>
                </li>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                  
                     <?php    foreach ($get_latest_new_Mixed as $Mixed) {
                                
                                $type = $Mixed['type'];
                                $title = $Mixed['title'];
                                $description = $Mixed['description'];
                                $image = $Mixed['image'];
                                $id = $Mixed['id'];
                               
                                
                  ?>
                  <li>
                    <div class="media wow fadeInDown"> <a href="<?php echo base_url()."users/post_detail/".$id?>" class="media-left"> <img alt="" src="<?php echo base_url()."upload/".$image ;?>"> </a>
                      <div class="media-body"> <a href="<?php echo base_url()."users/post_detail/".$id?>" class="catg_title">  <?php echo substr($title,0,50).".."; ?></a> </div>
                    </div>
                  </li>
                  <?php  } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <?php include('side_bar.php'); ?>
      </div>
    </div>
  </section>
</div>
<?php include('footer.php'); ?>
 

