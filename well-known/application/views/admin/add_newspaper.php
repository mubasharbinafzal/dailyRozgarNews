<?php include('header.php'); ?>
	<br>
<div class="container" style="margin-top: 20px;">
	<h1>Add News Post</h1>
	 
		<?php echo form_open_multipart('admin/postValidation_news')?> 
		<div class="row">
			<div class="col-md-6">
					  <div class="form-group">
		   				<label for="exampleInputEmail1">Date</label>
						<?php 
								echo form_input(['class'=>'form-control',
												 'type'=>'date',
												'placeholder'=>' Enter Title',
												'name' => 'newspaper_date',
												'value'=> set_value('newspaper_date')
											]);
									?>
		 			</div>
			</div>
			<div class="col-md-6" style="margin-top: 40px;">
					<?php echo form_error('newspaper_date');?>
			</div>
		</div>
 

		<div class="row">
		<div class="col-md-6">
			  <div class="form-group">
	    			<label>Select file</label>
	    			<input type="file" name="newspaper_file"  class="form-control" />
				    
	  	</div>
		</div>
		<div class="col-md-6" style="margin-top: 40px;">
				<?php echo form_error('newspaper_file'); ?>
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
		
	
</form>
	</div>


	<?php include('footer.php'); ?>


