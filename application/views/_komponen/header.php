<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('assets/img/favicon.ico') ?>">

    <title>Sistem Pembuatan Surat Desa</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/sticky-footer-navbar.css') ?>" rel="stylesheet">
	
	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="<?php echo base_url('assets/js/jquery.min.js') ?>" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Desa Sentol</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>page">Beranda<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>page/profil_desa">Profil Desa</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>page/struktur">Struktur Organisasi</a>
            </li>
            <li class="nav-item">
            <div class="dropdown show">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
              Persuratan
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="<?php echo base_url(); ?>page/persuratan">Cetak Surat</a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>page/arsip">Arsip Surat</a>
            </div>
          </div>
            <!-- <a class="nav-link" href="<?php echo base_url(); ?>page/persuratan">Persuratan</a> -->
            </li>
           

            <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>page/statistik">Statistik</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
            <!-- <button class="btn btn-danger my-2 my-sm-0" type="submit">Logout</button> -->
            <a class="btn btn-danger my-2 my-sm-0" href="<?php echo base_url(); ?>login/logout">Logout</a>
          </form>
        </div>
      </nav>
    </header>