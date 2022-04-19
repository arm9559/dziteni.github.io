<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Սենյակներ</title>
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
  <!-- Rooms Style -->
  <link href="assets/css/rooms.css" rel="stylesheet">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
          <li><a class="nav-link scrollto" href="gallery.php">Մեդիա Հարթակ</a></li>
          <li><a class="nav-link scrollto" href="contact.php">Կապ Մեզ Հետ</a></li>
          <li><a class="nav-link scrollto active" href="rooms.php">Սենյակներ</a></li>
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
<!-- ======= Rooms Section ======= -->
<section class="rooms container">
      <h1 class="gallery-style font-style-for-heading">Սենյակներ</h1>
      <hr class="col-lg-2">
      <p class="font-style">
        Սենյակները Ձիթենիում
      </p>
<div class="intro-slider">
  <div class="slider">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/rooms/extra_large_room.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img/rooms/large_room.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img/rooms/medium_room.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="container col-lg-5 slider-text">
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos minus voluptate consequuntur quia beatae, earum architecto obcaecati, placeat doloribus, amet at autem iusto quos? Qui similique quae asperiores aliquid labore.
  <ul class="rooms-ul mt-3">
    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
    <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
  </ul>
  </div>
</div>
</section><!-- End Rooms Section -->
<!-- ======= Rooms Section ======= -->
<section class="rooms container item">
<div class="intro-slider d-flex flex-row-reverse">
  <div class="slider">
    <div id="carouselExampleControl" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/rooms/extra_large_room.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img/rooms/large_room.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img/rooms/medium_room.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControl" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControl" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="container col-lg-5 slider-text">
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos minus voluptate consequuntur quia beatae, earum architecto obcaecati, placeat doloribus, amet at autem iusto quos? Qui similique quae asperiores aliquid labore.
  <ul class="rooms-ul mt-3">
    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
    <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
  </ul>
  </div>
</div>
</section><!-- End Rooms Section -->
<!-- ======= Rooms Section ======= -->
<section class="rooms container item">
<div class="intro-slider d-flex">
  <div class="slider">
    <div id="carouselExampleContro" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/rooms/extra_large_room.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img/rooms/large_room.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img/rooms/medium_room.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleContro" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleContro" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="container col-lg-5 slider-text">
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos minus voluptate consequuntur quia beatae, earum architecto obcaecati, placeat doloribus, amet at autem iusto quos? Qui similique quae asperiores aliquid labore.
  <ul class="rooms-ul mt-3">
    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
    <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
  </ul>
  </div>
</div>
</section><!-- End Rooms Section -->
<!-- ======= Rooms Section ======= -->
<section class="rooms container item">
<div class="intro-slider d-flex flex-row-reverse">
  <div class="slider">
    <div id="carouselExampleContr" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/rooms/extra_large_room.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img/rooms/large_room.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img/rooms/medium_room.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleContr" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleContr" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="container col-lg-5 slider-text">
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos minus voluptate consequuntur quia beatae, earum architecto obcaecati, placeat doloribus, amet at autem iusto quos? Qui similique quae asperiores aliquid labore.
  <ul class="rooms-ul mt-3">
    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
    <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
  </ul>
  </div>
</div>
</section><!-- End Rooms Section -->
  <!-- ======= Footer ======= -->
  <?php require "footer.php"?>