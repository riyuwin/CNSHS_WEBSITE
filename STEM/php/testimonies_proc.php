<?php

include 'db_connection.php';

$conn = OpenCon();
 
if (isset($_POST['submit'])){
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['batch_name']) && !empty($_POST['message'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $batch_name = $_POST['batch_name'];
        $message = $_POST['message'];
        $status = 'Pending';

        $query = "INSERT INTO testimonies (name, email, batch_name, message, status) VALUES ('$name', '$email', '$batch_name', '$message', '$status')";

        $run = mysqli_query($conn, $query) or die(mysqli_error());

        if($run){
            echo "Form Submitted Successfully";
            header("Location: ../alumni.php");
            exit();
        } else {
            echo "Form not submitted";
            header("Location: ../alumni.php?error=Form not submitted");
            exit();
        }
    }
} else {
    echo "Form not submitted";
    header("Location: ../alumni.php?error=Form not submitted");
    exit();
        
}


?>