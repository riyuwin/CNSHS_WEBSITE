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
              <a href="events.html" style="text-decoration: none; color: white;"><p>Events</p></a>
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
              <a href="garments.html" style="text-decoration: none; color: black;"><p>GARMENTS</p></a>
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
    <div class="breadcrumbs flex align-items-center" style="background-image: url('assets/img/student_life/backrese.png');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2><span>CNSHS</span> Final Oral Research Defense</h2>
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
                <img src="assets/img/student_life/research1.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/student_life/research2.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/student_life/research3.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/student_life/research4.jpg" alt="">
              </div>

              <div class="swiper-slide">s
                <img src="assets/img/student_life/research5.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/student_life/research6.jpg" alt="">
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
              <h2>CNSHS held its Final Oral Research Defense</h2>
              <p>
                CNSHS held its Final Oral Research Defense last May 18-20, 2022 for SY 2021-2022 with the theme "Empowering Student Research: A Gateway to Discoveries, Innovation, and Environmental Success"
              </p>
              <p>
                Special thanks to our dear colleagues and supportive partners/research enthusiasts for their selflessness and for giving their valuable time and effort to make this possible despite and in spite of:</p>
<p>Ma'am Mischelle D. Hidalgo</p>
<p>Sir Darryl Nelo S. Aguila</p> 
<p>Sir Isagani F. Musa</p>
<p>Engr. Roger Jay L. De Vela</p>
<p>Ma'am Ferly J. Lovete</p>
<p>Sir Julius I. Tabalan</p>
<p>Ma'am Marjorie Relavo </p> 
<p>Ma'am Zeidy Emerald Zipporah Diane Esmeralda</p>
<p>Sir Wilson Angel H. Villarin</p>
<p>Sir Jonas Remigio Candido
</p>

<p>Big thanks and congratulations to the parents of the researchers who took a leap of faith with us and for always believing that this endeavor will be pushed through.
  Appreciation to our beloved School Head Ma'am Rowena F. Zamduio and Research Coordinator Ma'am Julia Tessa A. Lastrella, Research Club headed by Patricia Lumenario, as well as to the faculty members and staff of this institution for the success of this event.
  To our dear learners. may you continue to bring with you the attitude of being inquisitive, having enthusiasm in discovering the unknown, filling the gaps in knowledge, and changing the way of life for the better when you enter a new chapter in your lives. 
  Kudos to all of you! To God be the glory!</p>
                <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  "Empowering Student Research: A Gateway to Discoveries, Innovation, and Environmental Success."
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
               
                <li><strong>Event Date</strong> <span>18-20 May, 2022</span></li>
                
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