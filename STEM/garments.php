<?php

    session_start(); 
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Garments</title>
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
    <div class="breadcrumbs flex align-items-center" style="background-image: url('assets/img/backgar.png');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Student Uniform</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Uniform</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features section-bg">
          <div class="container" data-aos="fade-up">
   
            <div class="tab-content">
    
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <h3>Camarines Norte Senior Highschool<br>Uniform</h3>
                    <p class="fst-italic">
                      Camarines Norte Senior High School is known for its distinctive uniform, which features a bright shade of green that is both eye-catching and professional.
                      </p>
                    <p>
                      The uniform is not just a piece of clothing, but a representation of the values and ideals that the school upholds. It encourages students to take pride in their appearance and to represent their school with dignity and respect. By wearing the Camarines Norte Senior High School uniform, students are not just representing themselves, but the entire school community as well.
                      While the school provides the design for the uniform, students have the freedom to choose where they get their uniform made. 
                      </p>
                  </div>
                  <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/img/uniform/uniform.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div><!-- End tab content item -->

    <!-- ======= News Section ======= -->
    <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/uniform/polo.png);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">CNSHS Polo (Men)</h4>
                    <p>The CNSHS Polo is a white polo shirt, adorned with a bold and distinctive logo of the school, with a subtle touch of green that complements the white perfectly.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/uniform/pants.png);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">CNSHS Pants (Men)</h4>
                    <p>The pants are tailored to fit comfortably, with a relaxed yet streamlined silhouette that flatters the body. They feature a classic straight leg design, with a mid-rise waistline and a sturdy zip fly.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/uniform/uni.png);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">CNSHS Vest (Men & Women)</h4>
                    <p>CNSHS vest is tailored to provide a comfortable and flattering fit, with a classic V-neckline and a sleek design. The vest is made of a lightweight and breathable material.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/uniform/palda.png);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">CNSHS Skirt (Women)</h4>
                    <p>The design is elegant and timeless, with a classic A-line cut that flatters all body types. The skirt falls to just below the knee, striking the perfect balance between modesty and style.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->
            
          </div>
         
        </div>
      </div>
  

     <!-- ======= Features Section ======= -->
    
      <div class="container" data-aos="fade-up">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3>CNSHS Physical Education</h3>
                <p class="fst-italic">
                  The Camarines Norte Senior High School (CNSHS) Physical Education uniform is an essential component of the school's athletic program, designed to provide students with comfortable and functional attire for their physical activities.
                  </p>
                <p>
                  CNSHS Physical Education uniform is an important part of the school's athletic program, providing students with a comfortable and functional uniform that is both practical and stylish. With its gray color and prominent school logo, the uniform is a symbol of pride and unity, representing the values and ideals of the CNSHS community.
                  </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/uniform/pe3.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </section><!-- End tab content item -->

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