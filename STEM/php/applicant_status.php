<?php

include 'db_connection.php';

$conn = OpenCon();

if (isset($_GET['qualiid'])){ 
    echo $_GET['qualiid'];
     
    $applicant_id = $_GET['qualiid'];  

    $insert_query = "SELECT * FROM admission_form";

    $run = mysqli_query($conn, $insert_query) or die(mysqli_error());

    if($run){
        $row = mysqli_fetch_assoc($run); 
        $status = "Qualified";  

        /* CREATING QUERIES FOR MYSQL (IN THIS CASE INSERTING) */
        $status_query = "UPDATE `admission_form` SET `status`='$status' WHERE applicant_id = $applicant_id;
        
        UPDATE applicant_status SET `status`= '$status' WHERE applicant_id = $applicant_id";   
        
        $applicant_status = mysqli_multi_query($conn, $status_query) or die(mysqli_error());

        //$applicant_status = $conn->multi_query($status_query) or die(mysqli_error()); 

        if($applicant_status){
            echo "Applicant Qualified" ;
            header("Location: ../admission_verification.php");
        } else {
            echo "Application not submitted"; 
            header("Location: ../admission_verification.php?");
        }

    }
 
} else {
    echo $_GET['notqualiid']; 
    
    $applicant_id = $_GET['notqualiid'];  
     
    $insert_query = "SELECT * FROM admission_form";

    $run = mysqli_query($conn, $insert_query) or die(mysqli_error());

    if($run){
        $row = mysqli_fetch_assoc($run); 
        $status = "Not Qualified";  

        /* CREATING QUERIES FOR MYSQL (IN THIS CASE INSERTING) */
        $status_query = "UPDATE `admission_form` SET `status`='$status' WHERE applicant_id = $applicant_id;
        
        UPDATE applicant_status SET `status`= '$status' WHERE applicant_id = $applicant_id";   
        
        $applicant_status = mysqli_multi_query($conn, $status_query) or die(mysqli_error());
        
        if($applicant_status){
            echo "Application Submitted Successfully" ;
            header("Location: ../admission_verification.php");
        } else {
            echo "Application not submitted"; 
            header("Location: ../admission_verification.php?");
        }

    }
  
} 

?>