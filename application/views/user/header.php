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
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style1.css">

    <!--===============================================================================================-->
    <link rel="icon" type="image/PNG" href="<?= base_url() ?>images/icons/logoBandingin.PNG" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/main.css">
    <!--===============================================================================================-->
    <title> <?= $title ?></title>

  </head>

  <body class="animsition">

    <!-- Header -->
    <header>
      <!-- Header desktop -->
      <div class="wrap-menu-header gradient1 trans-0-4">
        <div class="container h-full">
          <div class="wrap_header trans-0-3">
            <!-- Logo -->
            <div class="logo">
              <a href="index.html">
                <img src="<?= base_url() ?>images/icons/logoo.png" alt="IMG-LOGO" data-logofixed="<?= base_url() ?>images/icons/logooo.png">
              </a>
            </div>

            <!-- Menu -->
            <div class="wrap_menu p-l-20 p-l-0-xl">
              <nav class="menu">
                <ul class="main_menu">
                  <li>
                    <a href="<?= base_url('Home') ?>#section-slide">Beranda</a>
                  </li>

                  <li>
                    <a href="<?= base_url('Home') ?>#section-kategori">Kategori</a>
                  </li>

                  <li>
                    <a href="<?= base_url('Home') ?>#section-about">Tentang Kami</a>
                  </li>

                  <li>
                    <a href="<?= base_url('Home') ?>#section-tamu">Buku Tamu</a>
                  </li>

                  <li>
                    <a href="<?= base_url('Home') ?>#section-contact">Kontak</a>
                  </li>

                </ul>
              </nav>
            </div>

            <!-- Social -->
            <div class="social flex-w flex-l-m p-r-20">
              <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Sidebar -->
    <aside class="sidebar trans-0-4">
      <!-- Button Hide sidebar -->
      <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

      <!-- - -->
      <ul class="menu-sidebar p-t-95 p-b-70">
        <li class="t-center m-b-13">
          <a href="<?= base_url('Home') ?>#section-slide" class="txt19">Beranda</a>
        </li>

        <li class="t-center m-b-13">
          <a href="<?= base_url('Home') ?>#section-kategori" class="txt19">Kategori</a>
        </li>

        <li class="t-center m-b-13">
          <a href="<?= base_url('Home') ?>#section-about" class="txt19">Tentang Kami</a>
        </li>

        <li class="t-center m-b-13">
          <a href="<?= base_url('Home') ?>#section-tamu" class="txt19">Buku Tamu</a>
        </li>

        <li class="t-center m-b-13">
          <a href="<?= base_url('Home') ?>#section-contact" class="txt19">Kontak</a>
        </li>
      </ul>

      <!-- - -->
    </aside>