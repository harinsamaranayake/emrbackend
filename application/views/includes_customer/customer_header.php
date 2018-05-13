<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EMR | Sri Lanka</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>ui_customer/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>ui_customer/css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url() ?>/index.php/Main_Controller/viewpage/customer_index">EMR</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.html">Bill</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>/index.php/Main_controller/viewpage/customer_contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>/index.php/Main_controller/viewpage/customer_contact.php">Notifications</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Property
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="<?php echo base_url() ?>ui_customer/portfolio-1-col.html">Property 01</a>
                <a class="dropdown-item" href="<?php echo base_url() ?>ui_customer/portfolio-2-col.html">Property 02</a>
                <a class="dropdown-item" href="<?php echo base_url() ?>ui_customer/portfolio-3-col.html">Property 03</a>
                <hr>
                <a class="dropdown-item" href="<?php echo base_url() ?>ui_customer/portfolio-3-col.html">Manage properties</a>               
            </li>            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Account
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="<?php echo base_url() ?>ui_customer/full-width.html">My profile</a>
                <a class="dropdown-item" href="<?php echo base_url() ?>ui_customer/full-width.html">Settings</a>
                <hr>
                <a class="dropdown-item" href="<?php echo base_url() ?>ui_customer/pricing.html">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>