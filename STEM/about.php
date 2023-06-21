<?php

    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About Us</title>
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

    <!-- ======= Breadcrumbs ======= -->
    <br>
    <div class="breadcrumbs flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.png');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>About</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>About Us</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row position-relative">

          <div class="col-lg-7 about-img" style="background-image: url(assets/img/about.jpg);"></div>

          <div class="col-lg-7">
            <h2>Camarines Norte Senior High School</h2>
            <div class="our-story">
              <h4>Est 2016</h4>
              <h3>Our Story</h3>
              <p>Camarines Norte Senior High School is a Stand-Alone Senior High School established in the year 2016.
                It is the first public school to offer STEM strand in the first district of Daet, and is one of the eight STEM 
                stand alone schools in the country. The institution is a premier school that offers quality education and a path
                towards a career in the Science, Technology, Engineering, and Mathematics. Ultimately, CNSHS prides itself with its
                dedication to research which develops the skills and values of its students.</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!--MISSION AND VISION-->
    <!-- ======= Servie Cards Section ======= -->
    <section id="services-cards" class="services-cards">
      <div class="container" data-aos="fade-up">

        <div class="row gy">

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="500">
            <img src="assets/img/apple-touch-icon.png" alt="" class="img-fluid">
            
          </div><!-- End feature item-->

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <h1>Vision</h1>
            <p>We dream of Filipinos
              who passionately love their country
              and whose values and competencies
              enable them to realize their full potential
              and contribute meaningfully to building the nation.
              As a learner-centered public institution,
              the Department of Education
              continuously improves itself
              to better serve its stakeholders.</p>
            
          </div><!-- End feature item-->

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <h1>Mission</h1>
            <p>To protect and promote the right of every Filipino to quality, equitable, culture-based, and complete basic education where:
              <br><strong>Students</strong> learn in a child-friendly, gender-sensitive, safe, and motivating environment.
              <br><strong>Teachers</strong> facilitate learning and constantly nurture every learner.
              <br><strong>Administrators</strong> and staff, as stewards of the institution, ensure an enabling and supportive environment for effective learning to happen.
              Family, community, and other stakeholders are actively engaged and share responsibility for developing life-long learners.</p>

            
          </div><!-- End feature item-->

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <h1>Core Values</h1>
            <p>Maka-Diyos <br>
              Maka-tao<br>
              Makakalikasan<br>
              Makabansa</p>
            
          </div><!-- End feature item-->
        </div>

      </div>
    </section><!-- End Servie Cards Section -->

          <div class="col-lg-6 img-bg" style="background-image: url(assets/img/alt-services-2.webp);" data-aos="zoom-in" data-aos-delay="100"></div>
        </div>

      </div>
    </section><!-- End Alt Services Section 2 -->

  </main><!-- End #main -->

  
          </div>
  
        </div>
      </section><!-- End Our Team Section -->

     <!-- ======= Contact Section ======= -->
     <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-map"></i>
              <h3>Our Address</h3>
              <p>Purok-1 Brgy. Camambugan Daet, Camarines Norte</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>309622@deped.gov.ph</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1984.2597583118534!2d122.93347352793478!3d14.09726609716008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3398ae57889668c7%3A0xb348444a6a1fc08a!2sDaet%2C%20Camarines%20Norte!3m2!1d14.099577999999999!2d122.9550349!4m5!1s0x3398afdf3a7dcca3%3A0x17d3d8312cba0dd6!2sCamarines%20Norte%20Senior%20High%20School%2C%204W4R%2B4RR%2C%20Daet%2C%20Camarines%20Norte!3m2!1d14.1052673!2d122.942017!5e0!3m2!1sen!2sph!4v1650589027787!5m2!1sen!2sph" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
          <div class="testimonies_form_container">
            <form action="php/contact.php" method="post"> 

            <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required><br>
                </div>
            
                <div class="col form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required><br>
                </div>
                
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="ubject" required>  <br>  
            </div>

            <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Send your message" required></textarea> <br>
            </div>
            
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            
            <div class="register_btn_container">
                <input class="btn btn-primary" type="submit" name="submit" value="Send Message"> 
            </div>  
        </div> 

          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

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
          <li><i class="bx bx-chevron-right"></i> <a href="index.php">Developer</a></li>
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