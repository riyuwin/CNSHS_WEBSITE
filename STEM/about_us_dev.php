<?php

    session_start(); 
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CNSHS Developers</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link href="assets/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header>
        <div class="header_container">
            <div class="notif_container">
                <span class="calendar_container"> 
                <?php 
                    if(isset($_SESSION['user_id']) && isset($_SESSION['email'])) {
                        echo "<a href='index.php'><img class='calendar_img' src='images/calendar.png' alt='calendar'></a>";
                    } else if (isset($_SESSION['admin_id']) && isset($_SESSION['email'])) {
                      echo "<a href='admin_site.php'><img class='calendar_img' src='images/adminpic.png' alt='calendar'></a>";
                    } else{
                      echo "<a href='index.php'><img class='calendar_img' src='images/calendar.png' alt='calendar'></a>";
                    }
                ?> 
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
                <a href="index.php" style="text-decoration: none; color: white;"><p>PARENT RESOURCES</p></a>
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
                <a href="about.php" style="text-decoration: none; color: black;"><p>ABOUT US</p></a>
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
     <!-- End Header -->

    <div class="container1">
      <br>
      <h2>The Developers</h2>
      <br>
      <p> Team responsible for designing, building, testing, and maintaining the website, <br>
         as well as ensuring its functionality, usability, security, and performance.</p>
      <br><br><br>
      <div class="row">
          <div class="col-md-3 col-sm-6">
              <div class="our-team">
                  <div class="pic">
                      <img src="images/Abina.png">
                  </div>
                  <h3 class="title">Arvin Abina</h3>
                  <span class="post">Q.A Specialist</span>
                  <ul class="social">
                      <li><a href="#" class="fa fa-facebook"></a></li>
                      <li><a href="#" class="fa fa-twitter"></a></li>
                      <li><a href="#" class="fa fa-google-plus"></a></li>
                      <li><a href="#" class="fa fa-linkedin"></a></li>
                  </ul>
              </div>
          </div>
   
          <div class="col-md-3 col-sm-6">
              <div class="our-team">
                  <div class="pic">
                      <img src="images/Albos.png">
                  </div>
                  <h3 class="title">John Erwin Albos</h3>
                  <span class="post">Back-end Developer</span>
                  <ul class="social">
                      <li><a href="#" class="fa fa-facebook"></a></li>
                      <li><a href="#" class="fa fa-twitter"></a></li>
                      <li><a href="#" class="fa fa-google-plus"></a></li>
                      <li><a href="#" class="fa fa-linkedin"></a></li>
                  </ul>
              </div>
          </div>
  
          <div class="col-md-3 col-sm-6">
              <div class="our-team">
                  <div class="pic">
                      <img src="images/Biñas.jpg">
                  </div>
                  <h3 class="title">Camila Biñas</h3>
                  <span class="post">Front-end Developer</span>
                  <ul class="social">
                      <li><a href="#" class="fa fa-facebook"></a></li>
                      <li><a href="#" class="fa fa-twitter"></a></li>
                      <li><a href="#" class="fa fa-google-plus"></a></li>
                      <li><a href="#" class="fa fa-linkedin"></a></li>
                  </ul>
              </div>
          </div>
          <div class="col-md-3 col-sm-6">
              <div class="our-team">
                  <div class="pic">
                      <img src="images/Borje.png">
                  </div>
                  <h3 class="title">Sean Michael Borje</h3>
                  <span class="post">Back-end Developer</span>
                  <ul class="social">
                      <li><a href="#" class="fa fa-facebook"></a></li>
                      <li><a href="#" class="fa fa-twitter"></a></li>
                      <li><a href="#" class="fa fa-google-plus"></a></li>
                      <li><a href="#" class="fa fa-linkedin"></a></li>
                  </ul>
              </div>
          </div>
  
      </div>
  </div>

  

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