<?php

include 'db_connection.php';

$conn = OpenCon();

if (isset($_POST['submit'])) {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $query = "INSERT INTO contacts (username, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

        $run = mysqli_query($conn, $query);

        if ($run) {
            echo "Your feedback was saved successfully.";
            header("Location: ../about.php");
            exit();
        } else {
            echo "Form not submitted";
            header("Location: ../about.php?error=Form not submitted");
            exit();
        }

    } else {
        header("Location: ../about.php?error=All fields required.");
        exit();
    }

} else {
    header("Location: ../about.php?error");
    exit();
}


CloseCon($conn);
?>
