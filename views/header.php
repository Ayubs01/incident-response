<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $website_title ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/challenge-college-of-health-technology.png" rel="icon">
  <link href="assets/img/challenge-college-of-health-technology.png" rel="apple-touch-icon">

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



  <!-- ======= Header ======= -->
  <header id="header" class="">
    <div class="container d-flex align-items-center">

      <a href="./" class="logo me-auto py-4"><img src="assets/img/" alt="Incident Response"></a>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
       
        <?php 
            if ( isset( $_COOKIE[ 'app_id' ] ) )
            {
             
              echo '<li><a class="nav-link scrollto fw-bold" href="incident_details">Log New Incident</a></li>
                  <li><a class="nav-link scrollto fw-bold" href="incident_history">History</a></li>
                  <li><a class="nav-link scrollto fw-bold" href="profile">Profile</a></li>
  
                  <li><a class="nav-link scrollto fw-bold" href="logout">Logout</a></li>';
            }
            else 
            {
             
               echo '
                  <li><a class="nav-link scrollto fw-bold" href="login">Login</a></li>
                  ';
            }
          ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <?php 
        if ( !isset( $_COOKIE[ 'app_id' ] ) )
        {
          echo '<a href="register" class="appointment-btn scrollto fw-bold"><span class="">SignUp</a>';
        }
      ?>
        <!-- d-none d-sm-inline -->

    </div>
  </header><!-- End Header -->