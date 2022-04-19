<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Մեդիա Հարթակ</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets/img/other/logo.png" rel="icon">
  <link href="assets/img/other/logo.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- Gallery Style -->
  <link href="assets/css/gallery.css" rel="stylesheet">
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Font Awesome 4 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
 <?php require "topbar.php"; ?>
 <?php require "book.php"; ?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <div class="logo me-auto">
        <a href="index.php"><img src="assets/img/other/logo.png" class="logo-image" alt="Logo" title="Logo"></a>
      </div>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Գլխավոր</a></li>
          <li><a class="nav-link scrollto" href="about.php">Մեր Մասին</a></li>
          <li><a class="nav-link scrollto" href="menu.php">Մենյու</a></li>
          <li><a class="nav-link scrollto active" href="gallery.php">Մեդիա Հարթակ</a></li>
          <li><a class="nav-link scrollto" href="contact.php">Կապ Մեզ Հետ</a></li>
          <li><a class="nav-link scrollto" href="rooms.php">Սենյակներ</a></li>
          <li><a class="nav-link scrollto" href="blog.php">Բլոգ</a></li>
          <li class="book-style">
            <a href="#book-a-table" class="nav-link scrollto" onclick="table()">Ամրագրել Սեղան</a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#book-a-table" class="book-a-table-btn scrollto book-visibility" onclick="table()">Ամրագրել Սեղան</a>
    </div>
  </header><!-- End Header -->
  <!-- ======= Gallery Section ======= -->
  <section class="container gallery">
  <h1 class="gallery-style font-style-for-heading">Մեր Մասին</h1>
      <hr class="col-lg-2">
      <p class="font-style">
        Տեղեկություն Մեր Մասին
      </p>
    <div class="container flex-system">
      <div class="flex">
        <img src="assets/img/gallery/gallery-1.jpg" title="Gallery" class="gallery-lightbox">
        <img src="assets/img/gallery/gallery-2.jpg" title="Gallery" class="gallery-lightbox">
      </div>
      <div class="flex">
        <img src="assets/img/gallery/gallery-3.jpg" title="Gallery" class="gallery-lightbox">
        <img src="assets/img/gallery/gallery-4.jpg" title="Gallery" class="gallery-lightbox">
      </div>
      <div class="flex">
        <img src="assets/img/gallery/gallery-5.jpg" title="Gallery" class="gallery-lightbox">
        <img src="assets/img/gallery/gallery-6.jpg" title="Gallery" class="gallery-lightbox">
      </div>
    </div>
  </section><!-- End Gallery Section -->

  <section class="container gallery gallery-for-scroll">
    <div class="container flex-system">
      <div class="flex">
        <img src="assets/img/gallery/gallery-1.jpg" title="Gallery" class="gallery-lightbox">
        <img src="assets/img/gallery/gallery-2.jpg" title="Gallery" class="gallery-lightbox">
      </div>
      <div class="flex">
        <img src="assets/img/gallery/gallery-3.jpg" title="Gallery" class="gallery-lightbox">
        <img src="assets/img/gallery/gallery-4.jpg" title="Gallery" class="gallery-lightbox">
      </div>
      <div class="flex">
        <img src="assets/img/gallery/gallery-5.jpg" title="Gallery" class="gallery-lightbox">
        <img src="assets/img/gallery/gallery-6.jpg" title="Gallery" class="gallery-lightbox">
      </div>
    </div>
  </section><!-- End Gallery Section -->
  <?php require "footer.php";?>


