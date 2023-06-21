<?php

    session_start(); 

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
    <link href="style.css" rel="stylesheet">      

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
                    } else {
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

<div class="search-container">
	<label for="filter">Filter by batch:</label>
	<select name="filter" id="filter">
		<option value="">All</option>
		<?php
			$conn = mysqli_connect("localhost", "root", "", "yearbook");

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

			// Retrieve batch names from the database
			$sql = "SELECT DISTINCT batch FROM students";
			$result = mysqli_query($conn, $sql);

			// Check if any data was returned
			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					echo '<option value="' . $row["batch"] . '">' . $row["batch"] . '</option>';
				}
			}

			// Close the database connection
			mysqli_close($conn);
		?>
	</select>
</div>

<div class="container">
	<div class="row" id="students-container">
		<?php
			$conn = mysqli_connect("localhost", "root", "", "yearbook");

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

			// Retrieve all student data from the database
			$sql = "SELECT * FROM students";
			$result = mysqli_query($conn, $sql);

			// Check if any data was returned
			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					echo '<div class="column">';
					echo '<img src="uploads/' . $row["photo"] . '">';
					echo '<h3>' . $row["name"] . '</h3>';
					echo '<p><q>' . $row["description"] . '</q></p>';
					echo '<p>Year: ' . $row["year"] . '</p>';
					echo '<p>Batch: ' . $row["batch"] . '</p>';
					echo '</div>';
				}
			} else {
				echo "No students found.";
			}

			// Close the database connection
			mysqli_close($conn);
		?>
	</div>
</div>
<script>
	// Get the filter select element
// Get the filter select element
const filterSelect = document.querySelector('#filter');

// Add an event listener
filterSelect.addEventListener('change', (event) => {
  // Get the selected batch value
  const selectedBatch = event.target.value;

  // Get all the student columns
  const studentColumns = document.querySelectorAll('.column');

  // Loop through each student column
  studentColumns.forEach(column => {
    // Get the batch text
    const batchElement = column.querySelector('p:nth-of-type(3)');
    const batchText = batchElement ? batchElement.textContent : '';

	console.log('batchText:', batchText);

    // If the selected batch is "All" or matches the batch text, show the column
	if (selectedBatch === "" || batchText.includes(selectedBatch)) {
		console.log('matched');

      column.style.display = "block";
	  console.log('selectedBatch:', selectedBatch);
    }
    // Otherwise, hide the column
    else {
      column.style.display = "none";
    }
  });
});

</script>
	
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