<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Կապ Մեզ Հետ</title>
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
  <!-- Contact Style -->
  <link href="assets/css/contact.css" rel="stylesheet">
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
          <li><a class="nav-link scrollto active" href="contact.php">Կապ Մեզ Հետ</a></li>
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
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact container">
      <h1 class="doc-title-style">Կապնվեք ՄԵզ Հետ</h1>
      <hr class="col-lg-2">
      <p class="font-style">
          Սիրով Կսպասենք Այս Հասցեով
      </p>
      <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3049.97035468486!2d44.461727915387684!3d40.14294407939791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s2%2F9%2C%20Shirak%20street%2C%20Yerevan%2C%200086%2C%20Armenia!5e0!3m2!1sru!2s!4v1648846639363!5m2!1sru!2s" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="container mt-5">
        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Հասցե:</h4>
              <p>Shiraki<br>2/9</p>
            </div>
            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-clock"></i>
              <h4>Աշխ - Ժամերը:</h4>
              <p>Երեքշաբթիից - Կիրակի<br>10:00 AM - 2300 PM</p>
            </div>
            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-envelope"></i>
              <h4>էլ-Հասցե:</h4>
              <p>dzitenirestaurant@gmail.com</p>
            </div>
            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-phone"></i>
              <h4>Հեռ-համար:</h4>
              <p>+374 41 100809</p>
            </div>
          </div>
        </div>
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Ձեր Անունը" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Ձեր Հեռ-Համարը" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Ձեր էլ-Հասցեն" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Նամակ" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Ուղարկել</button></div>
        </form>
      </div>
    </section><!-- End Contact Section -->
    <?php require "footer.php"; ?>