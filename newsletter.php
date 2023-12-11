<html>
    <head>
        <title>News Letter</title>
        <link rel="stylesheet" href="newsletter.css">
    </head>
    <body>
        <section class="news-letter">
            <div class="news-container">
                <div class="news-info">
                    <h1>Get Notified Your Every New Job</h1>
                    <h3>Subscribe our News Letter</h3>
                    <form action="newsletter.php" method="POST">
                        <?php
                        /*$userEmail = "";
                        if(isset($_POST['subscribe']))//if subscribe button clicked
                        { 
                            $userEmail = $_POST['email']; //getting user email
                            if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){ //validating user entered email
                                //echo "Email is correct";
                                $subject = "Thanks for Subscribing us - Job Seeker";
                                $message = "Thanks for Subscribing Us. You'll always receive latest updates from us. And we won't share or sell your information to anyone.";
                                $sender = "From: pereraiasm@gmail.com";
                                if(mail($userEmail, $subject, $message, $sender))
                                {
                                    echo "Thanks for subscribing us!";
                                }
                            }else{
                               
                                echo "Failed while sending your email!";
                                
                            }
                        }*/
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
                        
                            if ($email) {
                                $to = $email;
                                $subject = "Thanks for Subscribing us - Job Seeker";
                                $message = "Thanks for Subscribing Us. You'll always receive latest updates from us. And we won't share or sell your information to anyone.";
                                $sender = "From: pereraiasm@gmail.com";
                                if(mail($to, $subject, $message, $sender))
                                {
                                    echo "Thank you for subscribing!";
                                }
                                else{
                                    echo "Failed while sending your email!";
                                }
                                // You can add code here to store the email in a database or perform other necessary actions.
                            } else {
                                // Handle invalid email address
                                echo "Invalid email address. Please try again.";
                            }
                        }
                        ?>
                        <div class="input-email">
                            <input type="email" placeholder="Enter your email" name="email" class="email" required />
                            <input type="submit" name="subscribe" value="Subscribe" class="button">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>