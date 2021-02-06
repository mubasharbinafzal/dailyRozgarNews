
<?php include('header.php'); ?>


<div class="container" style="margin-top:30px;">


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



<h1>login successfully, Welcome to admin</h1>
<br>
<div class="table-responsive">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th> 
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>

    <?php if(count($view_message)):
          $count = $this->uri->segment(3);
     ?>
    <?php foreach ($view_message as $message):  ?>

    <tr>
      <th scope="row"><?php echo $message->id;?></th>
      <td><?php echo $message->name;?></td>
      <td><?php echo $message->email;?></td>
      <td><?php echo $message->message;?></td> 
      
    </tr>
   <?php endforeach; ?>
   <?php else: ?>
    <tr>
      <td colspan="3">Not data avalible</td>
    </tr>
   <?php endif; ?>
  
  </tbody>
</table>

</div>
<?php // echo $this->db->last_query()?>

<?php echo $this->pagination->create_links(); ?>


<?php include('footer.php'); ?>