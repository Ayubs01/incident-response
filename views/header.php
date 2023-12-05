<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $website_title ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/" rel="icon">
  <link href="assets/img/" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

   <!-- datatables -->
   <link href="assets/vendor/new_datatables/datatables.min.css" rel="stylesheet">
  <link href="assets/vendor/select2/css/select2.min.css" rel="stylesheet">

  <!-- Customer CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center  fixed-top">
    <div class="container d-md-flex justify-content-between">
      <div class="d-block d-md-inline-block">
        <i class="bi bi-clock"></i> Monday - Friday, 8AM to 5PM
      </div> 
      <div class="d-block d-md-inline-block">
        <i class="bi bi-phone"></i> Call us now  07036681700, 08034060114
      </div>

    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top mb-5">
    <div class="container d-flex align-items-center">

      <a href="./" class="logo me-auto"><img src="assets/img/" alt="INCIDENT RESPONSE"></a>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <?php 
            if ( isset( $_COOKIE[ 'app_id' ] ) )
            {
             
              echo ' 
                  <li><a class="nav-link scrollto" href="incident_details">Report Incident</a></li>
                  <li><a class="nav-link scrollto" href="incident_history">Incident History</a></li>
                  <li><a class="nav-link scrollto" href="profile">Profile</a></li>
                  <li><a class="nav-link scrollto" href="logout">Logout</a></li>';
            }
            else 
            {
               
               echo '
                  <li><a class="nav-link scrollto" href="login">Student Login</a></li>
                  <li><a class="nav-link scrollto" href="login">Staff Login</a></li>
                  ';
            }
          ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <?php 
        if ( !isset( $_COOKIE[ 'app_id' ] ) )
        {
          echo '<a href="register" class="appointment-btn scrollto">Sign Up</a>';
        }
      ?>
        <!-- d-none d-sm-inline -->

    </div>
  </header><!-- End Header -->