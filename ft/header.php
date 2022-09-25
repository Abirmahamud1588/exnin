<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>bestupp</title>
  <link type="image/png" rel="shortcut icon" href="images/fev_icon.png">
  <!-- Google Fonts Strat -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Oswald:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <!-- Google Fonts End -->


  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/venobox.min.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
  <div class="back_to_top">
    <i class="fa fa-chevron-up"></i>
  </div>

 


  <!-- Navbar Part Start -->
  <nav class="navbar navbar-expand-lg header">
    <div class="container">
      <a class="navbar-brand logo" href="http://localhost/exnin">
        <img class="img-fluid" src="images/logo.png" alt="Brand Logo">
      </a>
      <button class="navbar-toggler toggle_btn" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <div class="my_bars">
          <div class="line1 bars"></div>
          <div class="line3 bars"></div>
          <div class="line4 bars"></div>
        </div>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto mb-2 mb-lg-0 menu" id="navbar-example3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://localhost/exnin">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/exnin/course.php">Courses</a>
          </li>
          <li class="nav-item drop_down">
            <a class="nav-link">
              Registration <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown_menu">
              <li><a class="nav-link drop-item" href="http://localhost/exnin/teacherreg.php">Teacher registration</a></li>
              <li><a class="nav-link drop_item" href="http://localhost/exnin/studentreg.php">Student registration</a></li>
            </ul>
          </li>
       
        </ul>
        <?php
if(isset( $_SESSION['user'])){
?>
<a href="auth/logout.php" class="enroll_btn"> Log Out</a>
<?php
}else {
?>
<a href="login.php" class="enroll_btn"> LOGIN </a>
<?php
}
?>
    
      </div>
    </div>
  </nav>
  <!-- Navbar Part End -->
