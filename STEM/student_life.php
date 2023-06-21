<?php

    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>StudentLife</title>
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
  
  <main id="main">
<br>
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs flex align-items-center" style="background-image: url('assets/img/student_life/studentlife.png');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Student Life</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Activities</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

             <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 posts-list">

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/student_life/blog-1.jpg" class="img-fluid" alt="">
                <span class="post-date">March 16</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">"Resilience is not just about surviving a disaster, it's about how we come together as a community to rebuild and recover."</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">STEMnians</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Information</span>
                  </div>
                </div>

                <p>
                  On March 16, 2023, the National Simultaneous Earthquake Drill was held in Camarines Norte Senior High School at 2:30 PM. The students demonstrated vigilance and alertness during the drill and, the teachers guided and oversaw their students.
                </p>

                <hr>

                <a href="studentlife-details1.php" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/student_life/ict5-1.png" class="img-fluid" alt="">
                <span class="post-date">November 11</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title"> "The STARBOOKS Orientation conducted by CNSHS in partnership with the Department of Science and Technology."</h3>
                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">STEMnians</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Information</span>
                  </div>
                </div>

                <p>
                  STARBOOKS is the first Philippine Science Digital Library that aims to provide Science, Technology, and Innovation-based content in  various formats and other constituents in geographically-isolated and economically-challenged schools and communities throughout the country.
                </p>

                <hr>

                <a href="studentlife-details2.php" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/student_life/dance1.jpg" class="img-fluid" alt="">
                <span class="post-date">October 21</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">"Grade 12 learners showcased their excellence by perfoming Folkdance as one of their activities in PE."</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">STEMnians</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Information</span>
                  </div>
                </div>

                <p>
                 
STEM education should not limit itself to Science and Math, as it also recognizes the significance of Arts and culture in a student's overall growth and development. The incorporation of dance and performance in PE activities is a testament to the wholistic approach in nurturing STEM learners. </p>
                <hr>

                <a href="studentlife-details3.php" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post list item -->


                       <!-- ======= Blog Section 2 ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 posts-list">

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/student_life/bully.jpg" class="img-fluid" alt="">
                <span class="post-date">March 26</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">"The first part of the STEMS Series: Strengthening The Emotional, Mental and Spiritual Well-being of the Students has been successfully unlocked."</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">STEMnians</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Information</span>
                  </div>
                </div>

                <p>
                  To our resource speakers, Sir Norman S. Lo, PSSG Maria Paola Kristina A. Rait, Ma'am Jenina S. Lim, and Ma'am Mae B. Largosa, we thank you for imparting your knowledge to us. Also, to our school head, Ma'am Magnolia B. De Mesa, thank you very much for your support in the organization.
                  To the students of CNSHS, thank you for being with us in the seminar.
                  </p>

                <hr>

                <a href="studentlife-details4.php" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/student_life/bagback.png" class="img-fluid" alt="">
                <span class="post-date">September 16</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title"> 
                  "Embrace the challenge of standing out from the crowd. Let your creativity and individuality shine through, just like these students who dared to carry their school things."</h3>
                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">STEMnians</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Information</span>
                  </div>
                </div>

                <p>
                  Initiated by Grade 11 learners, this No Bag Challenge is one way of promoting uniqueness and creativity! Unusual bags from baskets to boxes were brought by these students to carry their school things.
                </p>

                <hr>

                <a href="studentlife-details5.php" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/student_life/research4.jpg" class="img-fluid" alt="">
                <span class="post-date">May 18-20</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">"CNSHS held its Final Oral Research Defense with the theme "Empowering Student Research: A Gateway to Discoveries, Innovation, and Environmental Success."</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">STEMnians</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Information</span>
                  </div>
                </div>

                <p>
                  To our dear learners. may you continue to bring with you the attitude of being inquisitive, having enthusiasm in discovering the unknown, filling the gaps in knowledge, and changing the way of life for the better when you enter a new chapter in your lives.
                </p>
                <hr>o

                <a href="studentlife-details6.php" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post list item -->

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