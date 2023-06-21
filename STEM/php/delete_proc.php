<?php

include 'db_connection.php';

$conn = OpenCon();

if (isset($_GET['deleteid'])){
    echo $_GET['deleteid'];
     
    $insert_query = "SELECT * FROM admission_form";

    $run = mysqli_query($conn, $insert_query) or die(mysqli_error());

    if($run){
        $row = mysqli_fetch_assoc($run);

        $applicant_id = $row['applicant_id'];
        $email = $row['email'];
        $phone = $row['phone'];
        $status = "Deleted";

        echo "<br><br>Applicant id: " . $row['applicant_id'];

        /* CREATING QUERIES FOR MYSQL (IN THIS CASE INSERTING) */
        $status_query = "INSERT INTO applicant_status(applicant_id, email, phone, status) VALUES ('$applicant_id', '$email', '$phone', '$status');
        
        DELETE FROM admission_form WHERE applicant_id = $applicant_id;";   
        
        $applicant_status = $conn->multi_query($status_query) or die(mysqli_error());

        /* ACTION METHOD FOR INSERTING QUERIES IN MYSQL (FOR SINGLE QUERY ONLY) 
        $applicant_status = mysqli_query($conn, $applicant_status) or die(mysqli_error());*/

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