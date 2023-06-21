<?php

   session_start();
        
   include 'php/db_connection.php';

   $conn = OpenCon();
?>

<!DOCTYPE html>

<html>

<head>

    <title>CNSHS - Alumni</title>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Cinzel:wght@500&family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!--FONT STYLE IMPORTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Mukta&family=Poppins&family=Sansita+Swashed:wght@500&family=Sigmar&family=Ysabeau&display=swap&family=Dancing+Script&family=Alkatra&family=Quicksand:wght@552"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="css/alumni_style.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">       
    <link href="css/testimonies.css" rel="stylesheet">
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
       <!-- ======= Breadcrumbs ======= -->
     <br>
    <div class="breadcrumbs flex align-items-center" style="background-image: url('assets/img/admission.png');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Alumni</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Alumni</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->


    <!--Start of the content...--> 
        
  
    </div>

    <div class="news_update_container">
        <h1>NEWS & ANNOUNCEMENT<div class="line"></div></h1>
    </div>

    
    <div class="news_update_container_2">
        
    <p>Camarines Norte Senior High School stands out as a highly competitive institution in the province of Camarines Norte, particularly in the realm of research and academic studies. The school fosters a culture of excellence, motivating students, teachers, and staff members to actively engage in scholarly pursuits. With a strong emphasis on research, Camarines Norte Senior High School is committed to nurturing a vibrant academic community.
        </p>
    </div> 

              <!-- ======= Blog Section ======= -->
              <section id="blog" class="blog">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 posts-list">

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/alumni/alu1.jpg" class="img-fluid" alt="">
                <span class="post-date">March 16</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">CLASS HIRAYA</h3>

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

                <a href="alumni2.php" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/alumni/memo.png" class="img-fluid" alt="">
                <span class="post-date">November 11</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">MEMORADUM OF AGREEMENT</h3>
                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">STEMnians</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Information</span>
                  </div>
                </div>
<p>Memorandum of Agreement between Camarines Norte Senior High School and Camarines Norte State College represents a commitment to collaboration,
   innovation, and continuous improvement in the field of education, benefiting the students, faculty, and the wider community in Camarines Norte.</p>
                <hr>

                <a href="alumni3.php" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/alumni/alum0.png" class="img-fluid" alt="">
                <span class="post-date">October 21</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">CLASS HIRAYA</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">STEMnians</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Information</span>
                  </div>
                </div>
<p>Alumni Hiraya also actively engages in community service projects, aiming to make a positive impact on society.
   By organizing outreach activities, fundraisers, and volunteering efforts, the organization demonstrates its commitment
    to giving back and promoting social responsibility. </p>
                <hr>

                <a href="alumni2.php" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post list item -->

      </div>
    </section><!-- End Alumni Section -->

            </div>

          </div>
        </div><!-- End post item -->

      </div>

      </div>
    </section>
    <!-- End Recent Blog Posts Section -->


         <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row position-relative">

          <div class="col-lg-7 about-img" style="background-image: url(assets/img/hiraya.png);"></div>

          <div class="col-lg-7">
            
            <div class="our-story">
            <div class="news_update_container">
        <h1>CLASS HIRAYA<div class="line"></div></h1>
                  </div>
       
              <h4>Batch 2019</h4>
              <p>Alumni Hiraya is an organization composed of former students of Camarines Norte Senior High School. 
                Dedicated to fostering lifelong connections and supporting the school community, Alumni Hiraya serves as a platform for alumni to reconnect,
                 collaborate, and contribute to the growth and development of their alma mater. With a strong sense of camaraderie and shared experiences, 
                 Alumni Hiraya aims to provide a supportive network for its members. Through various initiatives, such as mentorship programs, career guidance, and networking events, the organization strives to assist current students in their academic and personal endeavors.</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End About Section -->

  
  
    
    <div class="news_update_container">
        <h1>TESTIMONIALS<div class="line"></div></h1>
    </div>

    <div class="news_update_container_2">
    <p>Student testimonials are valuable for prospective students who are considering the educational institution or program. They offer firsthand accounts and perspectives, helping prospective students make informed decisions about their educational journey. Additionally, testimonials can also provide valuable feedback to the institution itself, allowing them to understand the strengths and areas for improvement from the student's point of view.
        </p>
        </div>     


    <div class="testimonies_info_container"> 
        <div class="grid-container">
            <?php   
                $sql = "SELECT * FROM testimonies where status='Confirmed'";
                
                // read all row from database table
                $result = $conn->query($sql);

                if (!$result) {
                    die("Invalid query: ". $conn->error);
                } else {

                    // read ata of each row
                    while($row = $result->fetch_assoc()){
                        
                    echo 
                        "<div>    
                            <div class='img_container'>
                                <a><img class='auth_logo_image' src='images/user_icon.png' alt='logo'></a> 
                                    <h3>" . $row['name'] ."</h3>
                                    <h6>" . $row['batch_name'] ."</h6>
                                </div>
                                    <p  style='margin:1%; '>" . $row['message'] ."</p>
                                </div>";
                    } 
                }
                ?>
 
          
        </div>         
    </div> 
  

  
    <div class="create_testimonies_container"> 
        <div class="testimonials_title_container">
            <h1>Share you experience</h1>
        </div> 

        <div class="testimonies_form_container">
            <form action="php/testimonies_proc.php" method="post"> 

            <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required><br>
                </div>
            
                <div class="col form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required><br>
                </div>
                
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control" name="batch_name" id="batch_name" placeholder="Batch Name" required>  <br>  
            </div>

            <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Share your experience" required></textarea> <br>
            </div>
            
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            
            <div class="register_btn_container">
                <input class="btn btn-primary" type="submit" name="submit" value="Send Message"> 
            </div>  
        </div> 

    </div> 

    
    <div class="news_update_container"> 
    </div>

     
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