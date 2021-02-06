<?php include('header.php'); ?>
<div class="container">
<section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="contact_area">
            <h2>Contact Us</h2>
            <p>Daily Rozgar News has a special position in Pakistan's media, as the most respected publication in English, with firm and constructive views, and excellent news coverage. With five editions published daily from three stations, it is the market leader in the Punjab and Islamabad areas, and has established a strong presence in Karachi since its inception there in 2000. It is the newspaper of choice for not only those who make decisions, formulate policy, shape opinions or are in leadership roles but also for those youngsters who will call the shots in the future.</p>
            
  
<?php if($msg = $this->session->flashdata('msg')):?>
 <?php   $msg_class= $this->session->flashdata('msg_class'); ?> 
    <div class="row">
      <div class="col-lg-6">
        <div class="alert <?php echo $msg_class; ?>">
          <?php echo $msg; ?>
        </div>
      </div>
      <div class="col-lg-6"></div>
    </div>
    <?php endif; ?>
		 
		 <form action="<?php echo base_url()."Users/contactUs"; ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8"  class="contact_form" >
		     		            	<?php echo form_error('name'); ?>
		     		                    <?php 
								        echo form_input(['class'=>'form-control',
												 'type'=>'text',
												'placeholder'=>'* Name',
												'name' => 'name',
												'value'=> set_value('name')
											]);
									    ?>
								    <?php echo form_error('email'); ?>
										<?php 
								            echo form_input(['class'=>'form-control',
												 'type'=>'email',
												'placeholder'=>'* Email',
												'name' => 'email',
												'value'=> set_value('email')
											]);
									?>
									<?php echo form_error('message'); ?>
					                   <?php 
							            echo form_textarea(['class'=>'form-control',
											'placeholder'=>'* Message',
											'name' => 'message',
											'value'=> set_value('message')
										]);
					                   ?>
 
        	                        
			 
		 
	
		
		 <?php echo form_submit(['class'=>'btn',
									'type'=>'submit',
								'value'=>'Submit'
							]); ?>
		 <?php echo form_reset(['class'=>'btn btn-light',
				'type'=>'reset',
			'value'=>'reset'
		]); ?>
		
	
</form>
            
            <!--<form action="<?php // echo base_url()."Users/contactUs"; ?>" class="contact_form" method="post">-->
            <!--  <input class="form-control" name="name" type="text" placeholder="Name*" required>-->
            <!--  <input class="form-control" name="email" type="email" placeholder="Email*" required>-->
            <!--  <textarea class="form-control" name="message" cols="30" rows="10" placeholder="Message*" required></textarea>-->
            <!--  <input type="submit" value="Send Message">-->
            <!--</form>-->
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