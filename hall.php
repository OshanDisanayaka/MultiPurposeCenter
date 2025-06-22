<html>
    <head>
        <!--Bootstrap-->
        <title>Wedding Hall</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <!--Bootstrap end-->
    </head>
    <body style="background-image: url('Images/other resources/bg.jpg')" class="custom">
        <!--Navigation link-->
        <?php include './navigation.php'; ?>
        <!--Navigation link end-->

        <!--Hall stuff-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center mb-5">
                    <h1 style="font-family: 'Righteous', cursive; font-size: 28px; color: white; margin-top: 55px;">Wedding Hall</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <center>
                        <video controls autoplay muted width="70%;" height="400px;" style=" border: 5px solid #555; border-radius: 20px;">
                            <source src="videos/weddinghall.mp4" type="video/mp4">
                            <source src="videos/weddinghall.ogg" type="video/ogg">
                        </video>
                    </center>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
                    <p style="font-family: 'Raleway', sans-serif; font-size: 20px; color: white;">
                        If you want to celebrate any festive occasion, we have a very beautiful hall in our center, so do you want to celebrate it in our place then contact us now and reserve the hall.<br><br>
                        ‣ Fully air-conditioned hall.<br>
                        ‣ The hall can stay about 225 people.<br>
                        ‣ There is also a changing room and a bar.<br>
                        ‣ The charge for a one day is LKR 67200.00
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2 style="font-family: 'Righteous', cursive; font-size: 22px; color: white; margin-top: 55px; text-decoration: underline;" class="text-center">Conditions</h2>
                    <p class="mt-4" style="font-family: 'Raleway', sans-serif; font-size: 20px; color: white;">
                        ‣ You have to pay LKR 107200.00 for one day, after your event is over,
                        if we have not caused any damage to the hall, LKR 40000.00 will be returned
                        to you from the money you gave.<br>    
                    </p>

                    <h2 style="font-family: 'Righteous', cursive; font-size: 22px; color: white; margin-top: 50px; text-decoration: underline;" class="text-center">Contact</h2><br><br>
                    <p style="font-family: 'Raleway', sans-serif; font-size: 20px; color: white;">‣ Call the person in charge of the wedding hall,<br> + 94 75 412 9414</p>   
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
                    <center>
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="width: 80%;">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                            </div>
                            <div class="carousel-inner" style=" border: 5px solid #555; border-radius: 20px;">
                                <div class="carousel-item active">
                                    <img src="Images/hall/1.jpeg" class="d-block w-100" height="400px;" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="Images/hall/2.jpeg" class="d-block w-100" height="400px;" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="Images/hall/3.jpeg" class="d-block w-100" height="400px;" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="Images/hall/4.jpeg" class="d-block w-100" height="400px;" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="Images/hall/5.jpeg" class="d-block w-100" height="400px;" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </center>
                </div>
            </div>
        </div>

        <script>
            document.getElementById("nav-menu").children[2].children[0].classList.add("active");
            document.getElementById("nav-menu").children[2].children[1].children[2].children[0].classList.add("list-group-item-dark");
        </script>

        <!--Footer link-->
        <?php include './footer.php'; ?>
        <!--Footer link end-->
    </body>
</html>
