
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
 
     <li style="list-style: none; margin-right:5px;"><a href="<?php echo base_url()?>" class="btn btn-danger">Go to site</a></li>
   <li style="list-style: none;"><a href="<?php echo base_url()?>auth/logout" class="btn btn-danger">Logout</a></li>
  
   <?php 
    }else{
   ?>
  <li style="list-style: none;"><a href="<?php echo base_url()?>" class="btn btn-danger">Go to site</a></li>
     <?php 
    }
   ?>

</nav>