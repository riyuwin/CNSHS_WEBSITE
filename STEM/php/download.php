<?php

/* THIS IS WORK IN PROGRESS */


include 'db_connection.php';

$conn = OpenCon();

if (isset($_GET['downloadid'])){
    echo $_GET['downloadid'];
     
    $insert_query = "SELECT * FROM admission_form";

    $run = mysqli_query($conn, $insert_query) or die(mysqli_error());

    if($run){
        $row = mysqli_fetch_assoc($run);

        $applicant_id = $row['applicant_id'];
        $bcert = $row['bcert'];  

        /* CREATING QUERIES FOR MYSQL (IN THIS CASE INSERTING) */
        $status_query = "SELECT bcert FROM admission_form WHERE applicant_id = $applicant_id;";   
        
        $doc_download = $conn->multi_query($status_query) or die(mysqli_error()); 

        if($doc_download){
            echo "Application Submitted Successfully" ;
            header("Location: ../admission_verification.php");
        } else {
                echo "Application not submitted"; 
                header("Location: ../admission_verification.php?");
        }

    }
 
}  

?>