<?php

session_start();

include 'db_connection.php';

$conn = OpenCon();

if (isset($_POST['email']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $pass = validate($_POST['password']); 
    
    if (empty($email)) {
        header("Location: ../login_form.php?error=Username is required.");
        exit();
    } else if (empty($pass)) { 
        header("Location: ../login_form.php?error=Password is required.");
        exit();
    } else {
        $sql = "SELECT * FROM user_registration WHERE email='$email' AND password='$pass' ";
        $admin_sql = "SELECT * FROM admin_registration WHERE email='$email' AND password='$pass' ";

        $result = mysqli_query($conn, $sql);
        $admin_result = mysqli_query($conn, $admin_sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result); 

            if ($row['email'] === $email && $row['password'] === $pass) {
                $_SESSION['fname'] = $row['fname'];
                $_SESSION['mname'] = $row['mname'];
                $_SESSION['lname'] = $row['lname'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['user_id'] = $row['user_id'];

                echo '<script src="sweetalert2.all.min.js"></script>';
                echo 'Swal.fire(
                    "Welcome",
                    "You clicked the button!",
                    "success"
                );';

                header("Location: ../index.php");
                exit();
            } else { 
                header("Location: ../login_form.php?error=Incorrect username or password.");
                exit();
            }
        } else if (mysqli_num_rows($admin_result) === 1) {
            $admin_row = mysqli_fetch_assoc($admin_result);

            if ($admin_row['email'] === $email && $admin_row['password'] === $pass) { 
                $_SESSION['fname'] = $admin_row['fname'];
                $_SESSION['mname'] = $admin_row['mname'];
                $_SESSION['lname'] = $admin_row['lname'];
                $_SESSION['email'] = $admin_row['email'];
                $_SESSION['admin_id'] = $admin_row['admin_id'];
                $_SESSION['password'] = $admin_row['password'];

                

                header("Location: ../index.php");
                exit();
            } else { 
                header("Location: ../login_form.php?error=Incorrect username or password.");
                exit();
            }
        } else {
            header("Location: ../login_form.php?error=Incorrect username or password.");
            exit();
        }
    }
} else {
    header("Location: ../login_form.php?error");
    exit();
}

CloseCon($conn);

?>
