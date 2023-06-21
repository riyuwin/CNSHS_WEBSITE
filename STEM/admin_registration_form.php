<!DOCTYPE html>
<html>
<head> 
    <title>CNSHS - Teacher Registration</title>
    <link href="css/registration_style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images/stem_logo.png" />
    
    <!--<link href="https://fonts.googleapis.com/css2?family=Anton&family=Mukta&family=Poppins&family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Mukta&family=Poppins&family=Sansita+Swashed:wght@500&family=Sigmar&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
</head>

<body> 
        <section>    
            <div class="auth_container">  
                <div class="content_wrapper">
                    <div class="text_form1_label">
 
                    <a href="index.php"><img class="auth_logo_image" src="images/stem_logo.png" alt="logo"></a> 
                    
                    <div class="applynow_whitetext_container">
                            <p class="applynow_headline_text">Apply Now!<br><span class="applynow_caption_container">Be a part of our institution</span></p>
                    
                    
                        </div>  
                </div>

                    
                    <form action="php/admin_registration.php" method="post">
                        
                        <div class="text_form_label">
                            <div class="registration_text_container">
                                <p><strong>TEACHER REGISTRATION FORM</strong><br><br></p>
                            </div>  
                                
                            <div class="fname_container">
                                
                                <div class="fname_label_container">
                                    <p>First Name:</p>
                                </div>
                                    
                                <div class="input_textfname_container">
                                    <input type="Text" name="fname" ><br><br>
                                </div>
                            </div> 
                            <div class="mname_container">
                                
                                <div class="mname_label_container">
                                    <p>Middle Name:</p>
                                </div>
                                    
                                <div class="input_textmname_container">
                                    <input type="Text" name="mname" ><br><br>
                                </div>
                            </div> 
                            <div class="lname_container">
                                
                                <div class="lname_label_container">
                                    <p>Last Name:</p>
                                </div>
                                    
                                <div class="input_textlname_container">
                                    <input type="Text" name="lname" ><br><br>
                                </div>
                            </div> 
                            <div class="email_container">
                                
                                <div class="email_label_container">
                                    <p>Email:</p>
                                </div>
                                    
                                <div class="input_textlemail_container">
                                    <input type="Text" name="email" ><br><br>
                                </div>
                            </div> 

                            <div class="password_container">
                                
                                <div class="password_label_container">
                                    <p>Password:</p>
                                </div>
                                    
                                <div class="input_password_container">
                                    <input type="password" name="pass" ><br><br>
                                </div>
                            </div> 

                            <div class="confirm_password_container">
                                
                                <div class="confirm_password_label_container">
                                    <p>Confirm Password:</p>
                                </div>
                                    
                                <div class="input_confirm_password_container">
                                    <input type="password" name="confirm_pass" ><br><br>
                                </div>
                            </div> 

                            <?php if (isset($_GET['error'])) { ?>
                                <p class="error"><?php echo $_GET['error']; ?></p>
                            <?php } ?>

                            <div class="register_btn_container">
                                <input class="register_btn" type="submit" name="submit" value="REGISTER"> 
                            </div> 

                            <div class="login_caption_label_container">
                                <p>Already have an account?</p>
                            </div>
                            
                            <p class="login_label_container"><a href="login_form.php"><b>Login</b></a></p>
                        </div> 
                    </form>
                    
                    
                </div>  
            </div> 
        </section>
     


    <main>

    </main>
</body>

</html>