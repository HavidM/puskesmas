<!doctype html>
<html lang="en">
  <head>
    <title><?= $title;?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-light bg-info">
    <div class="logo"><img src="/images/LOGO_PKM.jpg" alt="" width="250" height="60"></a></div>
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('DHome');?>">Home</a>
            
            <ul class="sidebar navbar-nav">
            <li class="nav-item ">
                <a class="navbar-brand" href="<?= base_url('DBiodata');?>">
                    <span>Data Pasien</span>
                </a>
            </li>
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="fas fa-fw fa-boxes"></i>
                    <span>Products</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <a class="dropdown-item" href="">New Product</a>
                    <a class="dropdown-item" href="">List Product</a>
                </div>
            </li> -->
            <li class="nav-item ">
                <a class="navbar-brand" href="<?= base_url('DAntrian');?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Antrian</span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="navbar-brand" href="<?= base_url('DPoli');?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Daftar Poli</span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="navbar-brand" href="<?= base_url('DHistory');?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>History Pasien</span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="navbar-brand" href="<?= base_url('Dokter/logout');?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Log Out</span>
                </a>
            </li>
            </ul>

            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation"></button>
        </div>
    </nav>