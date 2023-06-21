<?php

    session_start(); 
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CNSHS</title>
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
  
   <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h1 data-aos="fade-down">Camarines Norte <span>Senior High School</span></h1>
            <h2>Empowering Minds, Building Futures</h2>        
            <a data-aos="fade-up" data-aos-delay="200" href="admission.php" class="btn-get-started">Apply Now!</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/background1.png)"></div>
      <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/background2.png)"></div>
      <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/background3.png)"></div>
      <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/background4.png)"></div>
      <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/background5.png)"></div>
     
    
      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">


    <!-- ======= News Section ======= -->
    <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/constructions1.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">1ST CNSHS YOUNG ENTREPRENEUR'S BUSINESS EXPO</h4>
                    <p>This event allows students to learn about the principles of entrepreneurship, marketing, and sales, as well as how to manage and run a successful business.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/constructions-2.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">1ST SCHOOL-BASED CAMPUS JOURNALISM TRAINING WORKSHOP</h4>
                    <p>THE FORTRIGHT IS BORN! The official student publication of Camarines Norte Senior High School with the theme:
                      "Empowering Young Leaders of Today Through Campus Journalism"</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/constructions-3.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">FIRE PREVENTION MONTH</h4>
                    <p>Congratulations STEMnians for bagging places in the different events during the commemoration of the Fire Prevention Month sponsored by the BFP R5 DAET.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/constructions-4.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">REMOVING MARINE OIL SPILL LABORATORY</h4>
                    <p>This is a timely experiment for the students to develop their critical thinking and problem solving skills. Good job future scientist and engineers.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>
    </section><!-- End Constructions Section -->


    <!-- ======= Features Section ======= -->
    <section id="features" class="features section-bg">
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row  g-2 d-flex">

          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <h4>NDRRMP</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <h4>Clean-up Drive</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <h4>Experiment</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <h4>Party</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content">

          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3>The National Disaster Risk <br>Reduction and Management Plan</h3>
                <p class="fst-italic">
                  The National Disaster Risk Reduction and Management Plan (NDRRMP) is a set of guidelines and procedures established by the government of the Philippines to manage and reduce the risks associated with natural disasters. 
                </p>
                <p>
                  As part of the NDRRMP, the student of Camarines Norte Senior Highschool play an important role in practicing disaster preparedness and risk reduction. 
                  This plan aims to promote a culture of safety among individuals and communities, and to ensure that appropriate measures are taken to minimize the impact of disasters on people's lives and properties.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/features-1.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Clean-up Drive</h3>
                <p class="fst-italic">
                  The Camarines Norte Senior High School Clean-up Drive Operations is an initiative that aims to promote cleanliness and environmental sustainability within the school premises and its surrounding areas.
                 
                </p>
                <p>
                  The clean-up drive operations include activities such as garbage collection, segregation, and disposal, as well as the promotion of proper waste management practices.
                  Through the Camarines Norte Senior High School Clean-up Drive Operations, students can learn about the importance of environmental 
                  stewardship and develop a sense of responsibility towards maintaining a clean and healthy environment.
                   These efforts are not only beneficial for the environment but also for the health and well-being of the school community.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/features-2.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Student Experiment</h3>
                <p class="fst-italic">
                  Camarines Norte Senior High School conducting an experiment shows their commitment to providing a hands-on
                   and engaging learning experience for their students.
                </p>
                <p>
                  This process helps students to develop a deep understanding of the subject matter and also helps to instill a sense of curiosity and wonder about the natural world.
                  Conducting experiments is an essential component of the learning process, and the Camarines Norte Senior High School's commitment to providing these opportunities reflects their dedication to providing a high-quality education for their students.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/features-3.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Students come together to participate in events.</h3>
                <p class="fst-italic">
                  Camarines Norte Senior High School may organize a party or celebration for various occasions such as graduation, Christmas, or other school-related events. Parties can be a fun and exciting way for students and teachers to socialize and build a sense of community within the school.
                </p>
                <p>
                  The party may include various activities such as games, dances, and performances. Food and refreshments may also be provided to ensure that everyone has a good time. The school administration and teachers may oversee the party to ensure that everyone is safe and that the event runs smoothly.
                </p>
               
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/features-4.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">
        <div class="news_update_container">
  
        <h1>ALUMNI TESTIMONIALS<div class="line"></div></h1>
    </div> <br><br><br><br><br>
     
        <div class="slides-2 swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>John Aliboso</h3>
                  <h4>Alumni Batch 2020</h4>
                  
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    As a former student of Camarines Norte Senior High School, I can confidently say that the school has provided me with a holistic education that has prepared me for life beyond the classroom.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Samantha Escobar</h3>
                  <h4>Alumni Batch 2020</h4>
                 
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    I am grateful for the opportunities and experiences I have had at Camarines Norte Senior High School, which have prepared me for the challenges of the future.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Sanchez</h3>
                  <h4>Alumni Batch 2020</h4>
                  
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    The supportive and nurturing environment at Camarines Norte Senior High School has helped me grow both academically and personally.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Brandon Quezon</h3>
                  <h4>Alumni Batch 2020</h4>
            
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    The resources and facilities at Camarines Norte Senior High School are top-notch, providing students with the tools they need to excel in their studies.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

            </div>

          </div>
        </div><!-- End post item -->

      </div>

      </div>
    </section>
    <!-- End Recent Blog Posts Section -->

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