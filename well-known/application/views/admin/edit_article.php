
	<?php include('header.php'); ?>
	<br>
<div class="container" style="margin-top: 20px;">
	<h1>Edit News Post </h1>
	
		<?php echo form_open_multipart('admin/update_news_post/'.$data->id)?>

		<!-- <?php echo form_hidden('id',$data->id); ?> -->
		<div class="row">
			<div class="col-md-6">
					  <div class="form-group">
		   				<label for="exampleInputEmail1">Title</label>
						<?php 
								echo form_input(['class'=>'form-control',
												 'type'=>'text',
												'placeholder'=>' Enter Title',
												'name' => 'title',
												'value'=> set_value('title',$data->title)
											]);
								
									?>
		 			</div>
			</div>
			<div class="col-md-6" style="margin-top: 40px;">
					<?php echo form_error('title');?>
			</div>
		</div>

			<div class="row">
			<div class="col-md-6">
				  <div class="form-group">
		    			<label>Article Body</label>
					    <?php 
							echo form_textarea(['class'=>'form-control',
											'placeholder'=>'Description',
											'name' => 'description',
											'value'=> set_value('description',$data->description)
										]);
						?>
		  </div>
				
			</div>
			<div class="col-md-6" style="margin-top: 40px;">
				<?php echo form_error('description'); ?>
			</div>
		</div>
	
			<div class="row">
			<div class="col-md-6">
				  <div class="form-group">
		    			<label>Select Image (<?php echo $data->image?>)</label>
		    			<input type="file" name="image"  class="form-control" />
					    
		  	</div>
			</div>
			<div class="col-md-6" style="margin-top: 40px;">
					<?php echo form_error('image'); ?>
			</div>

			
		</div>
			<div class="row">
			<div class="col-md-6">
				  <div class="form-group"> 
		    			<div class="form-group">
                          <label for="sel1">News type (<?php echo $data->type; ?>)</label>
                          <select class="form-control" id="sel1" name="type"> 
                            <option value="">Select News type</option>
                             <option value="Latest_News">Latest News</option>
                            <option value="Politics">Politics</option>
                            <option value="Health">Health</option> 
                            <option value="Mixed">Mixed News</option>
                          </select>
                        </div>
					     
		  	</div>
			</div>
			<div class="col-md-6" style="margin-top: 40px;">
			    	<?php echo form_error('type'); ?>
			</div>

			
		</div>
		 <?php echo form_submit(['class'=>'btn btn-primary',
									'type'=>'submit',
								    'value'=>'Submit'
							]); ?>
		 <?php echo form_reset(['class'=>'btn btn-light',
				'type'=>'reset',
			'value'=>'reset'
		]); ?>


	</div>


	<?php include('footer.php'); ?>


