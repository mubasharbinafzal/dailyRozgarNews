<?php include('header.php'); ?>


<div class="container">
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8"> 
         <div class="row">
             
             <?php 
             
             
                foreach ($get_newpaper as $get_newpaper_one) {
                     
                    ?>
              
          <div class="col-sm-6">
            <div class="thumbnail">
              <img  src="<?php  echo base_url()."newspaper/image_news.PNG" ;?>" alt="">
              <div class="caption">
                  <?php $date=date_create($get_newpaper_one['newspaper_date']);?>
                <h5 class="text-center"><?php echo    $date = date_format($date,"d-m-Y");?></h5>  
                
                <p style="margin: auto; display: flex;  width: max-content;">
                    <a href="<?php echo base_url()."newspaper/".$get_newpaper_one['newspaper_file'];?>" target="_blank" class="btn btn-primary" role="button">Read Only</a> &nbsp;
                 <a href="<?php echo base_url()."newspaper/".$get_newpaper_one['newspaper_file'];?>" class="btn btn-default" download>Free Download</a></p>
              </div>
            </div>
          </div>
          
             <?php 
             }
             
             ?>
        </div>
        
      </div>
     
      <div class="col-lg-4 col-md-4 col-sm-4">
          <?php include('side_bar.php'); ?>
      </div>
    </div>
  </section>
 </div>
<?php include('footer.php'); ?>