<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>About</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/bootstrap.min.css');?>">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/style.css');?>">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo base_url('/css/responsive.css');?>"/>
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?php echo base_url('/css/jquery.mCustomScrollbar.min.css');?>">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="<?php echo base_url('/css/owl.carousel.min.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('/css/owl.theme.default.min.css');?>">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo"><img src="/images/LOGO_PKM.jpg" alt="" width="250" height="200">        <img src="/images/Logo_web.gif" width="450" height="550"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('puskesmas'); ?>">Home</a>
                     </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('puskesmas/informasibeforelogin'); ?>">Informasi</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('puskesmas/aboutusbeforelogin'); ?>">About Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('puskesmas/login'); ?>">Login</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <!--header section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
      <h1 align="center"><u><b>Informasi</b></u></h1>
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_taital_main">
                     <!-- <?php foreach ($getInformasi as $judul) { ?>
                        <div class="about_taital"><?php echo $judul['JUDUL'];?></div> -->
                     <?php } ?>
                     <?php foreach ($getInformasi as $isi) { ?>
                        <p class="about_text"><?php echo $isi['ISI'];?></p>
                     <?php } ?>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about_img"><img src="/images/informasi.jpg"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding margin_top90">
         <div class="container">
            <div class="row">
               
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2023 All Rights Reserved. Design by <a href="#">Havid</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="<?php echo base_url('/js/jquery.min.js');?>"></script>
      <script src="<?php echo base_url('/js/popper.min.js');?>"></script>
      <script src="<?php echo base_url('/js/bootstrap.bundle.min.js');?>"></script>
      <script src="<?php echo base_url('/js/jquery-3.0.0.min.js');?>"></script>
      <script src="<?php echo base_url('/js/plugin.js');?>"></script>
      <!-- sidebar -->
      <script src="<?php echo base_url('/js/jquery.mCustomScrollbar.concat.min.js');?>"></script>
      <script src="<?php echo base_url('/js/custom.js');?>"></script>   
   </body>
</html>