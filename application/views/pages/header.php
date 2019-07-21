<!doctype html>
<html>

<head>
  <title> Home | Pyramid</title>
  <meta name="viewport" content="width = device-width, initial-scale = 1, shrink-to-fit = no"> 
  <link rel="shortcut icon" type="image/png" href="<?=base_url()?>assets/images/favicon.png" />
  <!-- Boostrap css file -->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/Css/bootstrap.min.css">
  <!--Fontawesome-->
  <link rel="stylesheet" type="text/css" href="<?= base_url("Assets\Css\all.css")?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url("Assets\Css\custom.css")?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url("Assets\Css\social.css")?>">
</head>
<body>
  <nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-A_primary">
    <a href="<?=base_url()?>" class="navbar-brand">
      <img src="<?=base_url()?>Assets\images\logo.png" height="50" class="px-2" alt="Pyramid Infotech">
     Pyramid Infotech
    </a>
    <button type="button" class="ml-auto navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      
      <ul class="navbar-nav ml-auto">
        <li class="nav-item 
        <?php if($this->uri->segment(2) == 'home'){ echo "active";}?>">
        <?php echo anchor('admin','Home','class="nav-link"'); ?> </li>
        <li class="nav-item <?php 
        if($this->uri->segment(2) == 'blog'){ echo "active";}
        ?>">
          <?php echo anchor('admin/blog','Blog','class="nav-link"'); ?>
        </li>
        <li class="nav-item <?php if($this->uri->segment(2) == 'contact'){ echo "active";}?>">
        <?php echo anchor('admin/contact','Contact','class="nav-link"'); ?></li>
        <li class="nav-item <?php if($this->uri->segment(2) == 'about'){ echo "active";}?>">
        <?php echo anchor('admin/about','About Us','class="nav-link"'); ?></li>
      </ul>
    </div>
  </nav>
