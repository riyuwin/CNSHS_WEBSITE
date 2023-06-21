<?php

include 'db_connection.php';

$conn = OpenCon();

if(isset($_POST['submit'])){
    if(!empty($_POST['fname']) && !empty($_POST['mname']) && !empty($_POST['lname']  && !empty($_POST['email']) && !empty($_POST['pass'])) && !empty($_POST['confirm_pass'])) {

        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['pass']; 
        $confirm_pass = $_POST['confirm_pass']; 

        if ($password === $confirm_pass) {

            $query = "insert into admin_registration (fname, mname, lname, email, password) values ('$fname', '$mname', '$lname', '$email', '$password')";

            $run = mysqli_query($conn, $query) or die(mysqli_error());
    
            if($run){
                echo "Form Submitted Successfully";
                header("Location: ../login_form.php");
                exit();
            } else {
                echo "Form not submitted";
                header("Location: ../admin_registration_form.php?error=Form not submitted");
                exit();
            }
        } else {
            echo "Password doesn't match...";
            header("Location: ../admin_registration_form.php?error=Password doesn't match.");
            exit();
        }
        
    }
    else{
        header("Location: ../admin_registration_form.php?error=All fields required.");
        exit();
        echo "All fields required.";
    }

    CloseCon($conn);
} else {
    header("Location: ../admin_registration_form.php?error");
    exit();
}
?>