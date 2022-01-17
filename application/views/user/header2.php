<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <!-- font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/v4-shims.css">

  <!-- My css -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style1.css">
  <link rel="stylesheet" href="<?= base_url() ?>/assets/css/about.css">
  <link rel="stylesheet" href="<?= base_url() ?>/assets/css/categories.css">

  <title>BandinginAja</title>
</head>

<body data-spy="scroll" id="section-home" onload="myFunction()">
  <!-- Header -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">BandinginAja</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link section-home active" href="<?= site_url('home') ?>#section-home">Home</a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?= site_url('home/categori_teknologi') ?>">Teknologi</a>
              <a class="dropdown-item" href="<?= site_url('home/categori_fashion') ?>">Fashion</a>
              <a class="dropdown-item" href="<?= site_url('home/categori_makanan') ?>">Makanan</a>
              <a class="dropdown-item" href="<?= site_url('home/categori_olahraga') ?>">Olahraga</a>
            </div>
          </li>
          <a class="nav-item nav-link section-contact" href="#section-contact">Contact</a>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav>
  <!-- Akhir Header  -->