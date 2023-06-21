<?php

    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Student Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
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
                  <a href="calendar.html"><img class="calendar_img" src="images/calendar.png" alt="calendar"></a>
              </span>
              <span class="announcement_container">
                  <a href="announcement.html"><img class="announcement_img" src="images/news.png" alt="calendar"></a>
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
              <a href="parent_resources.html" style="text-decoration: none; color: white;"><p>PARENT RESOURCES</p></a>
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
              <a href="aboutus.html" style="text-decoration: none; color: black;"><p>ABOUT US</p></a>
          </div>  
          
          <div class="admission_text_container">
              <a href="admission.php" style="text-decoration: none; color: black;"><p>ADMISSION</p></a>
          </div>

          
          <div class="garments_text_container">
              <a href="attire.html" style="text-decoration: none; color: black;"><p>GARMENTS</p></a>
          </div>
          
          
          <div class="student_life_text_container">
              <a href="student_life.html" style="text-decoration: none; color: black;"><p>STUDENT LIFE</p></a>
          </div>

          
          <div class="alumni_text_container">
              <a href="alumni.php" style="text-decoration: none; color: black;"><p>ALUMNI</p></a>
          </div>
      </div>
  </header>


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <br>
    <div class="breadcrumbs flex align-items-center" style="background-image: url('assets/img/student_life/backbully.png');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2><span>STEMS Series:</span> Be a Buddy and Not a Bully</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Details</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

     <!-- ======= Projet Details Section ======= -->
     <section id="project-details" class="project-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="assets/img/student_life/bully.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/student_life/bully1.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/student_life/bully2.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/student_life/bully3.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/student_life/bully4.jpg" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8">
            <div class="portfolio-description">
              <h2>CNSHS Anti-bully</h2>
              <p>
                The first part of the STEMS Series: Strengthening The Emotional, Mental and Spiritual Well-being of the Students has been successfully unlocked. 
                From the Barkada Kontra Droga of CNSHS, we would like to extend our gratitude to everyone who contributed to the success of this seminar. 
              </p>
              <p>
                To our resource speakers, Sir Norman S. Lo, PSSG Maria Paola Kristina A. Rait, Ma'am Jenina S. Lim, and Ma'am Mae B. Largosa, we thank you for imparting your knowledge to us. 
                Also, to our school head, Ma'am Magnolia B. De Mesa, thank you very much for your support in the organization. To the students of CNSHS, thank you for being with us in the seminar. 
              </p>

              <p>
                We are hoping that all the knowledge acquired from the seminar will be reflected in our daily lives. 
                Stay informed.  Grow and build a better kinship with one another.
                Let us be reminded, STEMnians, that bullying is the result of unequal power dynamics—the strong attacking the weak. So be a buddy, not a bully.
              </p>
                <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  "Be a Buddy and Not a Bully."
                  <i class="bi bi-quote quote-icon-right"></i>
                </p> <br>
                
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3>Information</h3>
              <ul>
                <li><strong>CNSHS</strong> <span>STEMnians</span></li>
               
                <li><strong>Event Date</strong> <span>26 March, 2022</span></li>
                
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Projet Details Section -->

  </main><!-- End #main -->


</main><!-- End #main -->
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

<div class="footer-content position-relative">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-6">
        <div class="footer-info">
          <h3>CNSHS</h3>
          <p>
          Purok-1 Brgy. Camambugan Daet, <br>
          Camarines Norte <br> 
          Philippines <br><br>
          <strong>Phone:</strong> +1 5589 55488 55<br>
          <strong>Email:</strong> 309622@deped.gov.ph<br>
        </p>
         
        </div>
      </div><!-- End footer info column-->

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="admission.php">Admission</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="student_life.php">Student Life</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="alumni.php">Alumni</a></li>
        </ul>
      </div><!-- End footer links column-->

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Other Resources</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="about_us_dev.php">Developer</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">F.A.Q</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="garments.php">Garments</a></li>
        </ul>
      </div><!-- End footer links column-->

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Alumni Activities</h4>
        <ul>
        <li><a href="studentlife-details6.php">Reseach</a></li>
          <li><a href="index.php">Forum</a></li>
          <li><a href="index.php">Testimonials</a></li>
          <li><a href="studentlife-details1.php">Events </a></li>
          
        </ul>
      </div><!-- End footer links column-->

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Student Activities</h4>
        <ul>
          <li><a href="studentlife-details6.php">Reseach</a></li>
          <li><a href="studentlife-details2.php">Seminar</a></li>
          <li><a href="studentlife-details6.php">Academic</a></li>
          <li><a href="studentlife-details5.php">Party</a></li>
          <li><a href="studentlife-details5.php">Extra-Curricular</a></li>
        </ul>
      </div><!-- End footer links column-->

    </div>
  </div>
</div>


</footer>
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>