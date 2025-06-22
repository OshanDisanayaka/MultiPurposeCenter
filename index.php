<html>
    <head>
        <!--Bootstrap-->
        <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <!--Bootstrap end-->

        <!--Styles for form-->
        <style>
            input[type=text], select, textarea {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                resize: vertical;
            }

            label {
                padding: 12px 12px 12px 0;
                display: inline-block;
            }

            input[type=submit] {
                background-color: #04AA6D;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                float: right;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }

            .container {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }

            .col-25 {
                float: left;
                width: 25%;
                margin-top: 6px;
            }

            .col-75 {
                float: left;
                width: 75%;
                margin-top: 6px;
            }

            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            @media screen and (max-width: 600px) {
                .col-25, .col-75, input[type=submit] {
                    width: 100%;
                    margin-top: 0;
                }
            }
        </style>
        <!--Styles for form end-->
    </head>
    <body style="background-image: url('Images/other resources/bg.jpg');" class="custom">
        <!--Navigation link-->
        <?php include './navigation.php'; ?>
        <!--Navigation link end-->

        <!--Home stuff-->  
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 mt-4 mb-5">
                <center>
                    <h1 style="color: white; font-family: 'Righteous', cursive; font-size: 38px;">Multi Purpose Center</h1>
                    <h4 style="color: white; font-family: 'Righteous', cursive; font-size: 18px;">MATTAKKULIYA</h4>
                </center>
            </div>
        </div>

        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 text-center mb-5">
                    <center>
                        <video controls autoplay muted class="text-center img-fluid" style=" border: 5px solid #555; border-radius: 20px;" class="embed-responsive">
                            <source src="videos/mainvideo.mp4" type="video/mp4">
                            <source src="videos/mainvideo.ogg" type="video/ogg">
                        </video>
                    </center>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <img src="Images/other resources/main1.gif" width="79%" class="text-center img-fluid" style="border: 5px solid #555; border-radius: 20px;">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-2 col-md-2 col-sm-12 mt-4">
                    <img src="Images/gym/gym.jpeg" class="img-fluid" style="border: 5px solid #555; border-radius: 20px;">
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 mt-4">
                    <p style="color: white; font-family: 'Raleway', sans-serif; font-size: 20px;">Come to our gymnasium, register now and become a member.</p>
                    <a class="btn btn-light" href="gymnasium.php">SEE MORE</a>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-12 mt-4">
                    <img src="Images/library/library.jpeg" class="img-fluid" style="border: 5px solid #555; border-radius: 20px;">
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 mt-4">
                    <p style="color: white; font-family: 'Raleway', sans-serif; font-size: 20px;">Come to our library, register now and become a member.</p>
                    <a class="btn btn-light" href="library.php">SEE MORE</a>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-12 mt-4">
                    <img src="Images/hall/hall.jpeg" class="img-fluid" style="border: 5px solid #555; border-radius: 20px;">
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 mt-4">
                    <p style="color: white; font-family: 'Raleway', sans-serif; font-size: 20px;">Come to our wedding hall, celebrate your festival occasion.</p>
                    <a class="btn btn-light" href="hall.php">SEE MORE</a>
                </div>
            </div>
            <p style="color: white; font-family: 'Raleway', sans-serif; font-size: 23px; text-decoration: underline;" class="mt-3 text-center mt-5">Need to Know Some Information</p>
            <div class="row mt-5">
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <img src="Images/other resources/email.jpeg" width="90%" class="img-fluid" style="border: 5px solid #555; border-radius: 20px;">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <form action="index.php" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label for="name" style="font-weight: 100; font-size: 15px; color: white;">NAME</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="name" name="fullname" id="fullname" placeholder="TYPE YOUR NAME" height="30px;" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="email" style="font-weight: 100; font-size: 15px; color: white;">EMAIL</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="email" name="email" placeholder="EMAIL" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="contact" style="font-weight: 100; font-size: 15px; color: white;">SUBJECT</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="subject" name="subject" placeholder="SUBJECT" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="subject" style="font-weight: 100; font-size: 15px; color: white;">INQUIRY</label>
                            </div>
                            <div class="col-75">
                                <textarea id="message" name="message" placeholder="WRITE YOUR INQUIRY" style="height:200px" required></textarea>
                            </div>
                        </div>
                        <div style="justify-content: center;">
                            <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                                <button type="submit" name="submit" class="btn btn-primary" onclick="myFunction()">SEND MESSAGE</button>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>

            <?php
            // checking if the form is submit
            if (isset($_POST['submit'])) {
                $fullname = $_POST['fullname'];
                $email = $_POST['email'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];

                $to = 'odisanayaka@gmail.com';
                $mail_subject = 'Message from Website';
                $email_body = "Message from Contact Us Page of the Website: <br>";
                $email_body .= "<b>From:</b> {$fullname} <br>";
                $email_body .= "<b>Subject:</b> {$subject} <br>";
                $email_body .= "<b>Message:</b><br>" . nl2br(strip_tags($message));

                $header = "From: {$email}\r\nContent-Type: text/html;";

                $send_mail_result = mail($to, $mail_subject, $email_body, $header);

                if ($send_mail_result) {
                    echo "<script>alert(Message Sent.)</script>";
                } else {
                    echo "<script>alert(Message Not Sent.)</script>";
                }
            }
            ?>
            <div class="row mt-5">
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <p style="color: white; font-family: 'Raleway', sans-serif; font-size: 23px; text-decoration: underline;" class="mt-3">Our Place</p>
                    <img src="Images/other resources/map.jpeg" class="img-fluid" style="border: 5px solid #555; border-radius: 20px; height: 120px; width: 180px;">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <p style="color: white; font-family: 'Raleway', sans-serif; font-size: 23px; text-decoration: underline;" class="mt-3">Follow Us On Facebook</p>
                    <img src="Images/other resources/fb.png" class="img-fluid" style="border: 5px solid #555; border-radius: 20px; height: 120px; width: 180px;">
                </div>
            </div>
            <!--Home stuff end-->
        </div>

        <script>
            document.getElementById("nav-menu").children[0].classList.add("active");
        </script>
        <!--Footer link-->
        <?php include './footer.php'; ?>
        <!--Footer link end-->
    </body>
</html>
