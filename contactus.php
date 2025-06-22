<html>
    <head>
        <!--Bootstrap-->
        <title>Contact Us</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <!--Bootstrap end-->
    </head>
    <body style="background-image: url('Images/other resources/bg.jpg');" class="custom">
        <!--Navigation link-->
        <?php include './navigation.php'; ?>
        <!--Navigation link end-->

        <!--Contact us stuff-->
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
                    <img src="Images/other resources/contactus.png" width="70%" class="img-fluid" style=" margin-top: 10px; border: 5px solid #555; border-radius: 20px;">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="row text-center">
                        <h1 style="font-family: 'Righteous', cursive; font-size: 28px; color: white; margin-top: 70px;">Contact Us</h1>
                    </div>
                    <p style="color: white; font-family: 'Raleway', sans-serif; font-size: 23px;" class="mt-3">Address</p>
                    <p style="color: white; font-family: 'Raleway', sans-serif; font-size: 20px;">145 St Marry's Road Mattakkuliya Colombo 15</p>
                    <br>
                    <p style="color: white; font-family: 'Raleway', sans-serif; font-size: 23px;" class="mt-2">Contact Us</p>
                    <p style="color: white; font-family: 'Raleway', sans-serif; font-size: 20px;">+ 94 75 076 5462</p>
                    <br>
                    <p style="color: white; font-family: 'Raleway', sans-serif; font-size: 23px;" class="mt-2">Email</p>
                    <p style="color: white; font-family: 'Raleway', sans-serif; font-size: 20px;">mattakkuliyamultipurposecenter@gmail.com</p>
                </div>
            </div>
        </div>
        <!--Contact us stuff end-->

        <script>
            document.getElementById("nav-menu").children[3].classList.add("active")
        </script>

        <!--Footer link-->
        <?php include './footer.php'; ?>
        <!--Footer link end-->
    </body>
</html>
