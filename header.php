<?php  
  include "connection.php"; 
  include "header-functions.php";
  $contact_email = fetch_topbar('contact_email');
  $contact_number=fetch_topbar('contact_number');
  $contact_logo=fetch_header('logo');
  $menu=fetch_menu();
  // $name=fetch_index('name');
  // $line=fetch_index('line');
  $content=fetch_content('slider');
  $icon=fetch_icon('icon');
  $icontxt=fetch_icontxt('text');
  $about1=fetch_about1('image');
  $about2=fetch_about2('text2');
  $slides=fetch_slides('slides');
  $counter=fetch_counter('cntr');
  $action=fetch_action('action');
  $services=fetch_services('services');
  $team=fetch_team('team');
  $pnav=fetch_pnav('nav');
  $pimg=fetch_pimg('pimg');
  $pname=fetch_pname('pname');
  $category=fetch_category('category');
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Impact Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact
  * Updated: Jan 30 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span><?php echo$contact_number;?></span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://x.com/rv__153?s=09" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/chaudharyraghu.chaudharyraghu.7?mibextid=ZbWKwL" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/rv__153?igsh=b3NncHBibDlyeHVj" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/raghu-chaudhary-b47b38188?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <img src="./assets/img/rl.jpg" alt=""> 
        <h1>Learnig With PHP..<span>.</span></h1>
        
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <?php foreach( $menu as $menu_item) {?>
          <li><a href="<?php echo $menu_item['menu_link'];?>"><?php echo $menu_item['menu_title'];?></a></li>
          <?php } ?>
        </ul>

      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->
  
 