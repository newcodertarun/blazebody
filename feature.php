<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BlazeBody-Feature</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body class="bg-white">
    <!-- Navbar Start -->
        <?php include("inc/topbar.php"); ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Our Features</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="index.php">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Our Features</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- GYM Feature Start -->
    <div class="container feature pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Why Choose Us?</h4>
            <h4 class="display-4 font-weight-bold">Benifits of Joining Our GYM</h4>
        </div>
        <div class="row">
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="img/feature-1.jpg" alt="Image">
                        <i class="flaticon-barbell"></i>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">Videos Instruction</h4>
                        <p>Get expert guidance through our concise video tutorials. 
                            Perfect for all fitness levels, they cover exercises, techniques,
                             and tips to boost your workout efficiency and safety.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="img/feature-2.jpg" alt="Image">
                        <i class="flaticon-training"></i>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">Training Calendar</h4>
                        <p>Stay organized and track your progress with our training calendar. Seamlessly plan your workouts, set goals,
                             and monitor your achievements to stay on course.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="img/feature-3.jpg" alt="Image">
                        <i class="flaticon-trends"></i>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">Free Apps & WiFi</h4>
                        <p>Stay connected and make the most of your workout with our free apps and WiFi.
                             Access training tools, track your progress,
                             and enjoy seamless connectivity while you sweat it out.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="img/feature-4.jpg" alt="Image">
                        <i class="flaticon-support"></i>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">Community Support</h4>
                        <p>Join our vibrant offline community for motivation, encouragement, and accountability.
                             Connect with like-minded individuals
                             and embark on your fitness journey together.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- GYM Feature End -->


    <!-- Testimonial Start -->
    <div class="container-fluid position-relative testimonial mt-5" style="margin-bottom: 90px;">
        <div class="container">
        <div class="row px-3 align-items-center">
            <div class="col-md-6 bg-secondary">
                <div class="d-flex align-items-center px-3" style="min-height: 450px;">
                    <div id="carouselId" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselId" data-slide-to="1"></li>
                            <li data-target="#carouselId" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="d-flex align-items-center mb-4 text-white">
                                    <img width="80" height="80" class="rounded-circle bg-dark p-2" src="img/testimonial-1.jpg" alt="Client Image">
                                    <div class="pl-4">
                                        <h4 class="text-primary">Rahul Mehra</h4>
                                        <p class="m-0">Software Engineer</p>
                                    </div>
                                </div>
                                <div class="testimonial-text position-relative border bg-dark text-white mb-5 p-4">
                                    "Joining this gym has transformed my life. The trainers are extremely knowledgeable and the environment is incredibly motivating."
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex align-items-center mb-4 text-white">
                                    <img width="80" height="80" class="rounded-circle bg-dark p-2" src="img/testimonial-2.jpg" alt="Client Image">
                                    <div class="pl-4">
                                        <h4 class="text-primary">Arjun Singh</h4>
                                        <p class="m-0">Entrepreneur</p>
                                    </div>
                                </div>
                                <div class="testimonial-text position-relative border bg-dark text-white mb-5 p-4">
                                    "The variety of equipment and classes available has helped me achieve my fitness goals. Highly recommend this gym to anyone serious about fitness."
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex align-items-center mb-4 text-white">
                                    <img width="80" height="80" class="rounded-circle bg-dark p-2" src="img/testimonial-3.jpg" alt="Client Image">
                                    <div class="pl-4">
                                        <h4 class="text-primary">Vikram Patel</h4>
                                        <p class="m-0">Doctor</p>
                                    </div>
                                </div>
                                <div class="testimonial-text position-relative border bg-dark text-white mb-5 p-4">
                                    "I appreciate the personal training sessions and the attention to detail from the staff. It's a great place to work out and stay fit."
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pl-md-3 d-none d-md-block">
                    <h4 class="text-primary">Testimonials</h4>
                    <h4 class="display-4 mb-4 text-white font-weight-bold">What Our Members Say</h4>
                    <p class="m-0 text-white">Our members' satisfaction is our top priority. Hear from some of our dedicated members who have achieved their fitness goals with our support and facilities.</p>
                </div>
            </div>
        </div>
        </div>
    </div>  
    <!-- Testimonial End -->


    <!-- Footer Start -->
        <?php include("inc/footer.php"); ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>