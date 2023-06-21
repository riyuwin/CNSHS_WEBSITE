<?php

    session_start();
    

    if(isset($_SESSION['user_id']) && isset($_SESSION['email'])) {
        $user_id = $_SESSION['user_id'];
        //print_r($user_id);

        include 'php/db_connection.php';

        $conn = OpenCon();
        
        $sql = "SELECT * FROM applicant_status WHERE user_id=$user_id";
        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result); 
        if ($result) {
            if (isset($row['user_id'])) {
                if ($row['user_id'] === $user_id && $row['status'] === 'Pending') {
                    //echo 'found!'; 
                    header("Location: admission_complete.php");
                    exit();
                } else  if ($row['user_id'] === $user_id && $row['status'] === 'Qualified'){
                    echo 'You are qualified!'; 
                    header("Location: admission_qualified.php");
                    exit();
                } else  if ($row['user_id'] === $user_id && $row['status'] === 'Not Qualified'){
                    echo 'You are not qualified!'; 
                    header("Location: admission_notqualified.php");
                    exit();
                }
            } else {
                //run the admission form
                    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CNSHS - Admission Form</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/stem_logo.png" />


    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!--FONT STYLE IMPORTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Mukta&family=Poppins&family=Sansita+Swashed:wght@500&family=Sigmar&family=Ysabeau&display=swap"
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
    <link href="css/admission_form.css" rel="stylesheet">

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
  
    <div class="admission_form_container">
        <div class="admission_header_container">

            <a href="index.html"><img class="auth_logo_image" src="images/stem_logo.png" alt="logo"></a>
            <h1>Camarines Norte Senior High School
                <hr>
            </h1>
            <div class="admission_system_title_container">
                <h6>
                    CNSHS Admission System
                </h6>
            </div>
        </div>

        <div class="admission_content_container">
            <h6>CNSHS Admission Form</h6>
        </div>

        <div class="label_container">
            <h1>Personal Information</h1>
        </div>

        <form action="php/admission_form.php" method="post">
            <div class="personal_info_container">

                <div class="grid-container">

                    <!--NAME-->
                    <div>First Name: <span class="required_entry">*</span></div>
                    <div>Middle Name: <span class="required_entry">*</span></div>
                    <div>Last Name: <span class="required_entry">*</span></div>
                    <div>Extension Name: </div>
                    <div><input type="text" name="fname" required></div>
                    <div><input type="text" name="mname" required></div>
                    <div><input type="text" name="lname" required></div>
                    <div><input type="text" name="extname"></div>



                    <div>Gender: <span class="required_entry">*</div>
                    <div>Birth of date: <span class="required_entry">*</div>
                    <div>Phone number: <span class="required_entry">*</div>
                    <div>Email: <span class="required_entry">*</div>
                    <div>
                        <input type="radio" value="male" name="gender">
                        <label for="gender">Male</label>
                        <input type="radio" value="female" name="gender">
                        <label for="gender">Female</label>
                    </div>
                    <!--<div><input type="text" name="bdate" placeholder="YYYY-MM-DD"></div>-->
                    <div><input type="date" name="bdate" value="yyyy-mm-dd" min="199-01-01" max="2030-12-31" required></div>
                    <div><input type="tel" name="phone" required></div>
                    <div><input type="email" name="email" required></div>

                </div>


                <div class="label_container">
                    <h1>Parent Details</h1>
                </div>

                <div class="grid-container_1">
                    <!--NAME-->
                    <div>Father Name: <span class="required_entry">*</span></div>
                    <div>Phone Number: <span class="required_entry">*</span></div>
                    <div>Occupation: <span class="required_entry">*</span></div>
                    <div><input type="text" name="father_name" required></div>
                    <div><input type="text" name="father_phone" required></div>
                    <div><input type="text" name="father_occupation" required></div>


                    <div>Mother Name: <span class="required_entry">*</span></div>
                    <div>Phone Number: <span class="required_entry">*</span></div>
                    <div>Occupation: <span class="required_entry">*</span></div>
                    <div><input type="text" name="mother_name" required></div>
                    <div><input type="text" name="mother_phone"required></div>
                    <div><input type="text" name="mother_occupation" required></div>
                </div>

                <div class="label_container">
                    <h1>Guardian Details</h1>
                </div>


                <div class="personal_info_container">
                    <div class="grid-container">
                        <!--NAME-->
                        <div>Guardian Name: <span class="required_entry">*</span></div>
                        <div>Relationship: <span class="required_entry">*</span></div>
                        <div>Phone Number: <span class="required_entry">*</span></div>
                        <div>Occupation: <span class="required_entry">*</span></div>
                        <div><input type="text" name="guardian_name" required></div>
                        <div><input type="text" name="guardian_relationship" required></div>
                        <div><input type="text" name="guardian_phone" required></div>
                        <div><input type="text" name="guardian_occupation" required></div>


                        <div>Email: <span class="required_entry">*</span></div>
                        <div>Address: <span class="required_entry">*</span></div>
                        <div></div>
                        <div></div>
                        <div><input type="email" name="guardian_email" required></div>
                        <div><input type="address" name="guardian_address" required></div>
                    </div>
                </div>



                <div class="label_container">
                    <h1>Documents</h1>
                </div>

                <div class="personal_info_container">
                    <div class="grid-container">



                        <div>Birth Certificate: <span class="required_entry">*</span></div>
                        <div>Form138: <span class="required_entry">*</span></div>
                        <div>NCAE: <span class="required_entry">*</span></div>
                        <div>Good Moral: <span class="required_entry">*</span></div>
                        <div><input type="file" name="bcert" required></div>
                        <div><input type="file" name="form138" required></div>
                        <div><input type="file" name="ncae" required></div>
                        <div><input type="file" name="good_moral" required></div>
                    </div>
                </div>

                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                
                <div class="submit_container">
                    <div><input class="submit_btn" type="submit" name="submit" value="Submit"></div>
                </div>
            </div>

        </form>



    </div>

 

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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
 


<?php 
         
        }

    // if the sql is error
    } else {
        echo 'Error: ' . mysqli_error();
        header("Location: admission.php");
        exit();
    }
// if the user not logged in
} else {
    echo "Please login first..."; 
    header("Location: login_form.php");
    exit();
}

$conn->close();
?>
