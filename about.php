<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Մեր Մասին</title>
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
  <!-- About Us Style -->
  <link href="assets/css/aboutus.css" rel="stylesheet">
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
          <li><a class="nav-link scrollto active" href="about.php">Մեր Մասին</a></li>
          <li><a class="nav-link scrollto" href="menu.php">Մենյու</a></li>
          <li><a class="nav-link scrollto" href="gallery.php">Մեդիա Հարթակ</a></li>
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
  <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
      <h1 class="gallery-style font-style-for-heading">Մեր Մասին</h1>
      <hr class="col-lg-2">
      <p class="font-style">
        Տեղեկություն Մեր Մասին
      </p>
        <div class="row wrap-container">
          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/about/about.jpg");'>
          <a class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true" onclick="openVideo()">a</a>
          </div>
          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">
            <div class="content">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> Տեքստ.</li>
                <li><i class="bx bx-check-double"></i> Տեքստ.</li>
                <li><i class="bx bx-check-double"></i> Տեքստ.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
            </div>
          </div>
          </div>
      </div>
      <div class="video-container container-fluid col-12" id="video-container">
        <iframe class="container col-lg-12 iframe" width="100%" height="100%" data-src="https://www.youtube.com/embed/eANW0RnUrRs" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <i class="fa fa-close mt-2" onclick="closeVideo()"></i>
      </div>
    </section><!-- End About Section -->
    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container">
        <div class="section-title">
          <h2>Մեր Անձնակազմի <span>Ղեկավարներ</span></h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Անուն Ազգանուն</h4>
                <span>Հաստիք</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Անուն Ազգանուն</h4>
                <span>Հաստիք</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Անուն Ազգանուն</h4>
                <span>Հաստիք</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Chefs Section -->
    <?php require "footer.php";?>