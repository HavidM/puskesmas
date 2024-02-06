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
      <title>Daftar Berobat</title>
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
               <div class="logo"><img src="/images/LOGO_PKM.jpg" alt="" width="250" height="200">        <img src="/images/Logo_web.gif" width="400" height="500"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('puskesmas'); ?>">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('puskesmas/informasi'); ?>">Informasi</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('puskesmas/antrian'); ?>">Antrian</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('puskesmas/riwayatberobat'); ?>">History</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('puskesmas/biodata'); ?>">Biodata</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('puskesmas/aboutus'); ?>">About Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('puskesmas/logout'); ?>">Logout</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <!--header section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <form method="post" accept-charset="utf-8" action="<?= base_url('puskesmas/finishdaftarberobat');?>">
                <div class="form-group">
                    <label for="nama">NAMA</label>
                    <input type="text" value="<?= $getNamaPasien;?>" name="nama" required class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="poli">Poli yang di tuju</label>
                    <input type="text" value="<?= $poli;?>" name="poli" required class="form-control" readonly>
                </div>
                      
                    <button class="btn btn-success">Konfirmasi</button>
                    <a href="<?= base_url('puskesmas/adddaftarberobat');?>" class="btn btn-secondary">Kembali</a><br>
                    <h4>Note: Harap Hadir Pagi Agar Nomer Antrian Tidak Terlewatkan</h4>
                </form>
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