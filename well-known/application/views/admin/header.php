
<html>
  <head>
    <title>Article List</title>  
    <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet">

  </head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Admin panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        <?php
  		if($this->session->userdata('id'))
  		{
        ?>
       <li style="list-style: none; margin-right:5px;"><a href="<?php echo base_url()?>" class="btn btn-danger">Go to Site</a></li>
       <li style="list-style: none;"><a href="<?php echo base_url()?>auth/logout" class="btn btn-danger">Logout</a></li>
        <?php 
        }
        ?>

</nav>

<style>
    .btn{margin-left:5px;}
</style>
<div class="container" style="margin-top:50px;">
  <div class="row">
      <?= anchor('admin','Dashbord',['class' => 'btn btn-lg btn-info']) ?>
    <?= anchor('admin/add_news_post','Add News',['class' => 'btn btn-lg btn-primary']) ?>
    <?= anchor('admin/add_newspaper','Add News paper',['class' => 'btn btn-lg btn-danger']) ?>
    <?= anchor('admin/view_message','View Message',['class' => 'btn btn-lg btn-success']) ?>
    
    
  </div>



</div>