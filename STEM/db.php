<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yearbook";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Process the form data
if(isset($_POST['name']) && isset($_POST['description']) && isset($_FILES['photo']) && isset($_POST['year'])&& isset($_POST['batch'])) {
	$name = $_POST['name'];
	$description = $_POST['description'];
	$photo = $_FILES['photo']['name'];
	$year = $_POST['year'];
	$batch = $_POST['batch'];

	// Create the uploads directory if it doesn't exist
	$target_dir = "uploads/";
	if (!file_exists($target_dir)) {
		mkdir($target_dir, 0777, true);
	}

	// Upload the photo
	$target_file = $target_dir . basename($_FILES["photo"]["name"]);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$extensions_arr = array("jpg","jpeg","png","gif");

	if(in_array($imageFileType,$extensions_arr)){
	   move_uploaded_file($_FILES['photo']['tmp_name'],$target_file);
	}

	// Store the data in the database
	$sql = "INSERT INTO students (name, description, photo, year, batch) VALUES ('$name', '$description', '$photo', '$year', '$batch')";

	if (mysqli_query($conn, $sql)) {
		header('Location: yearbook.html');
		exit();
	  } else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	  }
}

mysqli_close($conn);
?>
