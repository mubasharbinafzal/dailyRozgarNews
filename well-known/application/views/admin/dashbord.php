
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
      <th scope="col">Title</th>
      <th scope="col">Type</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

    <?php if(count($news_posts)):
          $count = $this->uri->segment(3);
     ?>
    <?php foreach ($news_posts as $news_post):  ?>

    <tr>
      <th scope="row"> <?php echo ++$count;?></th>
      <td><?php echo $news_post->title;?></td>
      <td><?php echo $news_post->type;?></td>
      <td><?=  anchor("admin/update_news_post/{$news_post->id}",'Edit',['class'=>'btn btn-primary']);  ?></td>
      <td>
        <?= 
          form_open('admin/delete_news_post'),
          form_hidden('id',$news_post->id),
          form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
          form_close();
        ?>

      </td>
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