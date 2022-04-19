<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Բլոգ</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets/img/other/logo.png" rel="icon">
  <link href="assets/img/other/logo.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- Menu Style -->
  <link href="assets/css/blog.css" rel="stylesheet">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Font Awesome 4 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
 <?php require "topbar.php"; ?>
 <?php require "book.php"; ?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent mt-2">
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
          <li><a class="nav-link scrollto" href="rooms.php">Սենյակներ</a></li>
          <li><a class="nav-link scrollto active" href="blog.php">Բլոգ</a></li>
          <li class="book-style">
            <a href="#book-a-table" class="nav-link scrollto" onclick="table()">Ամրագրել Սեղան</a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#book-a-table" class="book-a-table-btn scrollto book-visibility" onclick="table()">Ամրագրել Սեղան</a>
    </div>
  </header><!-- End Header -->
  <section class="blog container">
      <h1 class="gallery-style font-style-for-heading">Բլոգ</h1>
      <hr class="col-lg-2">
      <p class="font-style">
        Անցկացրեք Ձեր Ժամանցը Մեզ Մոտ
      </p>
      <div class="row">
          <div class="d-flex mt-2 align-items-center">
              <div class="col-lg-5 blog-image">
                  <img src="assets/img/blog/blog-one.jpg" alt="Blog Image" title="Image" class="img-fluid">
              </div>
              <div class="col-lg-6 blog-text">
                  <h2 class="blog-style mt-3">
                    <a href="blog_page.php">Վերնագիր</a>
                  </h2>
                  <hr class="col-lg-5">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus laboriosam iure ullam. Reiciendis natus id, laudantium pariatur non ipsum corporis nemo harum? Harum laboriosam sit nihil veniam repellendus incidunt suscipit.</p>
              </div>
          </div>
           <div class="d-flex mt-5 align-items-center flex-row-reverse">
              <div class="col-lg-5 blog-image">
                  <img src="assets/img/blog/blog-two.jpg" alt="Blog Image" title="Image" class="img-fluid">
              </div>
              <div class="col-lg-6 blog-text">
                  <h2 class="blog-style mt-3">
                    <a href="blog_page.php">Վերնագիր</a>
                  </h2>
                  <hr class="col-lg-5">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus laboriosam iure ullam. Reiciendis natus id, laudantium pariatur non ipsum corporis nemo harum? Harum laboriosam sit nihil veniam repellendus incidunt suscipit.</p>
              </div>
          </div>
           <div class="d-flex mt-5 align-items-center">
              <div class="col-lg-5 blog-image">
                  <img src="assets/img/blog/blog-tree.jpg" alt="Blog Image" title="Image" class="img-fluid">
              </div>
              <div class="col-lg-6 blog-text">
                  <h2 class="blog-style mt-3">
                    <a href="blog_page.php">Վերնագիր</a>
                  </h2>
                  <hr class="col-lg-5">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus laboriosam iure ullam. Reiciendis natus id, laudantium pariatur non ipsum corporis nemo harum? Harum laboriosam sit nihil veniam repellendus incidunt suscipit.</p>
            </div>
          </div>
          <div class="d-flex mt-5 align-items-center flex-row-reverse">
              <div class="col-lg-5 blog-image mt-3">
                  <img src="assets/img/blog/blog-four.jpg" alt="Blog Image" title="Image" class="img-fluid">
              </div>
              <div class="col-lg-6 blog-text">
                  <h2 class="blog-style mt-3">
                    <a href="blog_page.php">Վերնագիր</a>
                  </h2>
                  <hr class="col-lg-5">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus laboriosam iure ullam. Reiciendis natus id, laudantium pariatur non ipsum corporis nemo harum? Harum laboriosam sit nihil veniam repellendus incidunt suscipit.</p>
            </div>
          </div>
          <div class="d-flex mt-5 align-items-center">
              <div class="col-lg-5 blog-image">
                  <img src="assets/img/blog/blog-five.jpg" alt="Blog Image" title="Image" class="img-fluid">
              </div>
              <div class="col-lg-6 blog-text">
                  <h2 class="blog-style mt-3">
                    <a href="blog_page.php">Վերնագիր</a>
                  </h2>
                  <hr class="col-lg-5">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus laboriosam iure ullam. Reiciendis natus id, laudantium pariatur non ipsum corporis nemo harum? Harum laboriosam sit nihil veniam repellendus incidunt suscipit.</p>
            </div>
          </div>
          <div class="d-flex mt-5 align-items-center flex-row-reverse">
              <div class="col-lg-5 blog-image">
                  <img src="assets/img/blog/blog-six.jpg" alt="Blog Image" title="Image" class="img-fluid">
              </div>
              <div class="col-lg-6 blog-text">
                  <h2 class="blog-style mt-3">
                    <a href="blog_page.php">Վերնագիր</a>
                  </h2>
                  <hr class="col-lg-5">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus laboriosam iure ullam. Reiciendis natus id, laudantium pariatur non ipsum corporis nemo harum? Harum laboriosam sit nihil veniam repellendus incidunt suscipit.</p>
            </div>
          </div>
      </div>
  </section>
  <?php require "footer.php"; ?>