<!DOCTYPE html>

<html>
    <head>

        <title>CNSHS - Login</title>
        <link href="css/login.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="images/stem_logo.png" />
    
        <!--FONT STYLE IMPORTS-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Mukta&family=Poppins&family=Sansita+Swashed:wght@500&family=Sigmar&display=swap" rel="stylesheet">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


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

                    <form action="php/login.php" method="post">

                        
                        <div class="text_form_label">
                            <div class="login_text_container">
                                <p><strong>LOGIN</strong><br><br></p>
                            </div>    
                            
                            <div class="email_container"> 
                                <p>Email:</p> 
                                    
                                <div class="input_textlemail_container">
                                    <input type="email" name="email" ><br><br>
                                </div>
                            </div> 

                            <div class="password_container"> 
                                <p>Password:</p> 
                                    
                                <div class="input_password_container">
                                    <input type="password" name="password" ><br><br>
                                </div>
                            </div> 

                            <?php if (isset($_GET['error'])) { ?>
                                <p class="error"><?php echo $_GET['error']; ?></p>
                            <?php } ?>
                            
                            <div class="register_btn_container">
                                <input class="register_btn" type="submit" name="submit" value="LOGIN"> 
                            </div> 

                            <div class="login_caption_label_container">
                                <p>Don't have an account?</p>
                            </div>
                            
                            <p class="login_label_container"><a href="registration_form.php"><b>Sign Up</b></a></p>

                        </div>

                    </form>

                </div>    
            </div>
        </section>  

        <!-- Your PHP code here -->

        <script src="path/to/sweetalert.min.js"></script>  
    </body>
</html>