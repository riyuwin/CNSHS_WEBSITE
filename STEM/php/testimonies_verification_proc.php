<?php

include 'db_connection.php';

$conn = OpenCon();

if (isset($_GET['confirmid'])){ 
    echo $_GET['confirmid'];
     
    $tes_id = $_GET['confirmid'];  
 
    $status = "Confirmed";  

    /* CREATING QUERIES FOR MYSQL (IN THIS CASE INSERTING) */
    $status_query = "UPDATE `testimonies` SET `status`='$status' WHERE tes_id = $tes_id;
        
    UPDATE testimonies SET `status`= '$status' WHERE tes_id = $tes_id";   
        
    $tes_status = mysqli_multi_query($conn, $status_query) or die(mysqli_error());

    //$applicant_status = $conn->multi_query($status_query) or die(mysqli_error()); 

    if($tes_status){
        echo "Applicant Qualified" ;
        header("Location: ../testimonies_verification.php");
    } else {
        echo "Application not submitted"; 
        header("Location: testimonies_verification.php?");
    }
 
} else if (isset($_GET['deleteid'])) {
    echo $_GET['deleteid']; 
    
    $tes_id = $_GET['deleteid'];   
    $status = "Deleted";  

    /* CREATING QUERIES FOR MYSQL (IN THIS CASE INSERTING) */
    $status_query = "UPDATE `testimonies` SET `status`='$status' WHERE tes_id = $tes_id;
        
    UPDATE testimonies SET `status`= '$status' WHERE tes_id = $tes_id";   
        
    $tes_status = mysqli_multi_query($conn, $status_query) or die(mysqli_error());
     
    if($tes_status){
        echo "Applicant Qualified" ;
        header("Location: ../testimonies_verification.php");
    } else {
        echo "Application not submitted"; 
        header("Location: testimonies_verification.php?");
    }
}
  
 

?>