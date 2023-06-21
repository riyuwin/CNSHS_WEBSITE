<?php


/* IMPORTING/CALLING THE MAIN CONNECTION OF MYSQL*/
include 'db_connection.php';

/* PANG OPEN NG CONNECTION NG DATABASE --- (THIS IS A FUNCTION)*/
$conn = OpenCon();

/* FOR IF CONDITIONALS - KAPAG KA PININDOT ANG SUBMIT DITO MADIRECT */
if (isset($_POST['submit'])) {

    /* IF ENTRIES ARE NOT EMPTY */
    if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['gender']) && !empty($_POST['bdate']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['father_name']) && !empty($_POST['father_phone']) && !empty($_POST['father_occupation']) && !empty($_POST['mother_name']) && !empty($_POST['mother_phone']) && !empty($_POST['mother_occupation']) && !empty($_POST['guardian_name']) && !empty($_POST['guardian_relationship']) && !empty($_POST['guardian_phone']) && !empty($_POST['guardian_email']) && !empty($_POST['guardian_address']) && !empty($_POST['bcert']) && !empty($_POST['form138']) && !empty($_POST['ncae']) && !empty($_POST['good_moral'])) {


        /* PUTTING ENTRIES IN VARIABLES */
        /* BASIC DETAILS */
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $extname = $_POST['extname'];
        $gender = $_POST['gender'];
        $bdate = $_POST['bdate'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        
        /* PARENT DETAILS */
        $father_name = $_POST['father_name']; 
        $father_phone = $_POST['father_phone'];
        $father_occupation = $_POST['father_occupation'];
        $mother_name = $_POST['mother_name'];
        $mother_phone = $_POST['mother_phone'];
        $mother_occupation = $_POST['mother_occupation'];

        
        /* GUARDIAN DETAILS */
        $guardian_name = $_POST['guardian_name'];
        $guardian_relationship = $_POST['guardian_relationship'];
        $guardian_phone = $_POST['guardian_phone'];
        $guardian_email = $_POST['guardian_email'];
        $guardian_address = $_POST['guardian_address'];

        /* DOCUMENTS */
        $bcert = $_POST['bcert'];
        $form138 = $_POST['form138'];
        $ncae = $_POST['ncae'];
        $good_moral = $_POST['good_moral'];

        /* DEFAULT STATUS */    
        $pending_status = "Pending";


        /* CREATING QUERIES FOR MYSQL (IN THIS CASE INSERTING) */
        $query = "INSERT INTO admission_form(fname, mname, lname, extname, gender, bdate, phone, email, father_name, father_phone, father_occupation, mother_name, mother_phone, mother_occupation, guardian_name, relationship, guardian_phone, guardian_email, guardian_address, bcert, form138, ncae, good_moral, status) VALUES ('$fname', '$mname', '$lname', '$extname', '$gender', '$bdate', '$phone', '$email', '$father_name', '$father_phone', '$father_occupation', '$mother_name', '$mother_phone', '$mother_occupation', '$guardian_name', '$guardian_relationship', '$guardian_phone', '$guardian_email', '$guardian_address', '$bcert', '$form138', '$ncae', '$good_moral', '$pending_status')";  
  
        /* ACTION METHOD FOR INSERTING QUERIES IN MYSQL (FOR SINGLE QUERY ONLY) */
        $run = mysqli_query($conn, $query) or die(mysqli_error());

        // getting the last id inserted in admission form
        $applicant_last_id = mysqli_insert_id($conn);

        if($run){ 

            //getting the user id in database
            session_start();
            
            $session_id = session_id();
            $user_id = $_SESSION['user_id'];

            $inserting_applicant_status = "INSERT INTO applicant_status(user_id, applicant_id, status) VALUES ('$user_id', '$applicant_last_id', '$pending_status')";

            /* ACTION METHOD FOR INSERTING QUERIES IN MYSQL (FOR SINGLE QUERY ONLY) */
            $run_inserting_applicant_status = mysqli_query($conn, $inserting_applicant_status) or die(mysqli_error());

            echo "Application Submitted Successfully" ;
            header("Location: ../admission_complete.php");
        } else {
                echo "Application not submitted"; 
                header("Location: ../admission.php?error=Please check all the fields required.");
        }

    } else {
        echo "Application not submitted";
        header("Location: ../admission_form_temp.php?error=Please check all the fields required.");
    }

    CloseCon($conn);

} else {
    echo "Application not submitted";
    header("Location: ../admission_form_temp.php?error=Please check all the fields required.");
}

?>