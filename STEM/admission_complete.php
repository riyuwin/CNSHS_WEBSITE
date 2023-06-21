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
                

 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>CNSHS - Admission Complete</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/stem_logo.png" />


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
    <link href="css/navbar.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="css/admission_complete.css" rel="stylesheet">

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
  
    <div class="admission_status_container">
        <div class="admission_content_container">

            <div>
                <a href="index.php"><img class="auth_logo_image" src="images/stem_logo.png" alt="logo"></a> 

                <h1>Registration Complete!</h1>
                <p>You have successfully confirmed your slot for the admission in the strand Science, Technology, Mathematics, and Engineering. Your application will be evaluated by the faculty. We will contact you as soon as possible, so be updated.<br><br><br>Your Applicant ID is<br>
                    
                <?php   

                $user_id = $_SESSION['user_id'];

                //retrieving data from applicant status
                $get_appointment_status = "SELECT * FROM applicant_status WHERE user_id=$user_id"; 
                $run_query = mysqli_query($conn, $get_appointment_status) or die(mysqli_error());

                $row = mysqli_fetch_assoc($run_query); 
                $applicant_id = $row['applicant_id'];   
                 
                echo "$applicant_id</p>"
                ?> 
            </div> 
        </div>
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
            //this conditional statement is for the applicant status
            } else  if ($row['user_id'] === $user_id && $row['status'] === 'Qualified'){
                echo 'You are qualified!'; 
                header("Location: admission_qualified.php");
                exit();
            } else  if ($row['user_id'] === $user_id && $row['status'] === 'Not Qualified'){
                echo 'You are not qualified!'; 
                header("Location: admission_notqualified.php");
                exit();
            } else {
                echo 'not found';
            }
        // if the user_id is null meaning the user is not yet making online appointment
        } else {
            echo "Please fill up online appointment first.";
            header("Location: admission.php");
            exit();
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
