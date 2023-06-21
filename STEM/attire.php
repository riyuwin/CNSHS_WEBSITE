<?php

    session_start(); 
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CNSHS Attire</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
  <header>
        <div class="header_container">
            <div class="notif_container">
                <span class="calendar_container"> 
                    <a href="calendar.php"><img class="calendar_img" src="images/calendar.png" alt="calendar"></a>
                </span>
                <span class="announcement_container">
                    <a href="alumni3.php"><img class="announcement_img" src="images/news.png" alt="calendar"></a>
                </span>
            </div>
            
            <div class="stem_text_container">
                <a href="index.php" class="school_name_text" style="text-decoration: none; color: white;"><p>STEM - Senior High School</p></a>
            </div>
            
            <div class="logo_container">
                <!--Photo indicated in css-->
                <!--not anymore xD-->
                    <a href="index.php"><img class="logo_image" src="images/stem_logo.png" alt="logo"></a>
                    
            </div>

            <!--DISPLAY ONLY WHEN THE MAX WIDTH IS 600px-->
            <div class="stem_name_text_container_responsive">
                <h1>Camarines Norte Senior High School</h1>
                <p>Small no more but Mightier than ever...</p>
            </div>
                
            <div class="parent_container">
                <a href="parent_resources.php" style="text-decoration: none; color: white;"><p>PARENT RESOURCES</p></a>
            </div> 

            <div class="events_container">
                <a href="studentlife-details4.php" style="text-decoration: none; color: white;"><p>Events</p></a>
            </div>

            <div class="logout_container">
                <?php 
                    if(isset($_SESSION['user_id']) && isset($_SESSION['email'])) {
                        echo "<a href='php/logout.php' style='text-decoration: none; color: white;'><p>Logout</p></a>";
                    } else if (isset($_SESSION['admin_id']) && isset($_SESSION['email'])) {
                        echo "<a href='php/logout.php' style='text-decoration: none; color: white;'><p>Logout</p></a>";
                    } else{
                        echo "<a href='login_form.php' style='text-decoration: none; color: white;'><p>Login</p></a>";
                    }
                ?>
            </div>
 
        </div>


        <div class="header_container_whitebg">
            <div class="aboutus_text_container">
                <a href="aboutus.php" style="text-decoration: none; color: black;"><p>ABOUT US</p></a>
            </div>  
            
            <div class="admission_text_container">
                <a href="admission.php" style="text-decoration: none; color: black;"><p>ADMISSION</p></a>
            </div>

            
            <div class="garments_text_container">
                <a href="garments.php" style="text-decoration: none; color: black;"><p>GARMENTS</p></a>
            </div>
            
            
            <div class="student_life_text_container">
                <a href="student_life.php" style="text-decoration: none; color: black;"><p>STUDENT LIFE</p></a>
            </div>

            
            <div class="alumni_text_container">
                <a href="alumni.php" style="text-decoration: none; color: black;"><p>ALUMNI</p></a>
            </div>
        </div>
    </header>
   <!-- End Header -->

    <section class="buffer">
      <div class="container1">
        <h2>Type A (Uniform)</h2>
        <br>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis 
          parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
      </div>
      
      
    </section>

    <section class="parallax-container parallax-container2">
      <div class="card">
        <div class="card-img"></div>
        <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
        </p>
      
      </div>
      <div class="card">
        <div class="card-img"></div>
        <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
        </p>
      
      </div>
      <div class="card">
        <div class="card-img"></div>
        <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
        </p>
       
      </div>
     
    </section>

    <section class="buffer">

      <div class="container1">
        <h2>Type B (Uniform)</h2>
        <br>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis 
          parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
      </div>

    </section>


    <section class="parallax-container parallax-container2">
      <div class="card">
        <div class="card-img2"></div>
        <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
        </p>
      
      </div>
      <div class="card">
        <div class="card-img2"></div>
        <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
        </p>
      
      </div>
      
     
    </section>


    <section class="buffer">

      <div class="container1">
        <h2>P.E (Uniform)</h2>
        <br>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis 
          parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
      </div>

    </section>

    <section class="parallax-container parallax-container2">
      <div class="card">
        <div class="card-img3"></div>
        <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
        </p>
      
      </div>
      <div class="card">
        <div class="card-img3"></div>
        <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
        </p>
      
      </div>
      <div class="card">
        <div class="card-img3"></div>
        <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
        </p>
       
      </div>
     
    </section>

   <!-- ======= Footer ======= -->
   <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>CNSHS<span>.</span></h3>
            <p>
              Purok-1 Brgy. Camambugan Daet, <br>
              Camarines Norte <br> 
              Philippines <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> 309622@deped.gov.ph<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Admission</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Student Life</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Alumni</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Other Resources</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Parent Resources</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Events</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Developer</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">F.A.Q</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Garments</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Our social networks provide a platform for students, parents,
              and faculty to stay connected and engaged with the latest news, events,
              and activities happening within our school community.</p>
            <div class="social-links mt-3">
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>