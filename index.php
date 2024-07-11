<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BlazeBody-Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <!-- Link to your custom CSS -->
    <link href="css/custom.css" rel="stylesheet">
    
</head>

<body class="bg-white">
    <!-- Navbar Start -->
        <?php include("inc/topbar.php"); ?>  
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="blog-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h3 class="text-primary text-capitalize m-0">Gym & Fitness Center</h3>
                        <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">Best Gym In Town</h2>
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h3 class="text-primary text-capitalize m-0">Gym & Fitness Center</h3>
                        <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">Get Body In Shape</h2>
                        
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Gym Class Start -->
    <div class="container gym-class mb-5">
        <div class="row px-3">
            <div class="col-md-6 p-0">
                <div class="gym-class-box d-flex flex-column align-items-end justify-content-center bg-primary text-right text-white py-5 px-5">
                    <i class="flaticon-six-pack"></i>
                    <h3 class="display-4 mb-3 text-white font-weight-bold">Body Building</h3>
                    <p>
                        **Unlock Your Potential with Every Rep!** Whether you're a seasoned lifter or just starting out,
                         the journey to a stronger, healthier body begins here. 
                        From bulking up to cutting down,
                         we've got you covered with expert advice and motivation to keep you pushing forward.
                        Let's transform sweat into success and redefine what your body is capable of achieving.
                    </p>
                    
                </div>
            </div>
            <div class="col-md-6 p-0">
                <div class="gym-class-box d-flex flex-column align-items-start justify-content-center bg-secondary text-left text-white py-5 px-5">
                    <i class="flaticon-bodybuilding"></i>
                    <h3 class="display-4 mb-3 text-white font-weight-bold">Muscle Building</h3>
                    <p>
                        **Forge Your Physique, One Muscle at a Time!** Whether you're striving for monstrous gains
                        or seeking to refine your physique,
                        the journey to a sculpted body starts now. Dive into the science of muscle growth,
                        discover effective training regimens, and unlock the secrets of nutrition to fuel your gains.
                        It's time to embrace the grind, unleash your potential, and sculpt a masterpiece out of muscle.
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Gym Class End -->


    <!-- About Start -->
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img class="img-fluid mb-4 mb-lg-0" src="img/about.jpg" alt="Image">
            </div>
            <div class="col-lg-6">
                <h2 class="display-4 font-weight-bold mb-4">5 Years Experience</h2>
                <p>For over 5 years, we've been dedicated to guiding individuals towards their fitness goals, fostering a community of strength, resilience, and transformation.</p>
                <div class="row py-2">
                    <div class="col-sm-6">
                        <i class="flaticon-barbell display-2 text-primary"></i>
                        <h4 class="font-weight-bold">Potential GYM Center</h4>
                        <p>Our state-of-the-art facilities are designed to inspire and support your fitness journey.</p>
                    </div>
                    <div class="col-sm-6">
                        <i class="flaticon-medal display-2 text-primary"></i>
                        <h4 class="font-weight-bold">Award Winning</h4>
                        <p>Renowned for guiding fitness success, we've earned accolades for our dedication to helping individuals reach their goals.</p>
                    </div>
                </div>
                <a data-toggle="modal" data-target="#membership" class="btn btn-success" href="#"><b>About Gym Membership</b></a>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-lg-4 p-0">
                <div class="d-flex align-items-center bg-secondary text-white px-5" style="min-height: 300px;">
                    <i class="flaticon-training display-3 text-primary mr-3"></i>
                    <div class="">
                        <h2 class="text-white mb-3">Progression</h2>
                        <p>Embark on a journey of growth and improvement. 
                            Our tailored programs and expert guidance pave the way for continuous progress,
                             helping you reach new heights in your fitness journey.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="d-flex align-items-center bg-primary text-white px-5" style="min-height: 300px;">
                    <i class="flaticon-weightlifting display-3 text-secondary mr-3"></i>
                    <div class="">
                        <h2 class="text-white mb-3">Workout</h2>
                        <p>Experience the thrill of pushing your limits and achieving your fitness goals. 
                            Our dynamic workouts are designed to challenge you, 
                            build strength, and enhance endurance, ensuring every session counts towards your success.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="d-flex align-items-center bg-secondary text-white px-5" style="min-height: 300px;">
                    <i class="flaticon-treadmill display-3 text-primary mr-3"></i>
                    <div class="">
                        <h2 class="text-white mb-3">Nutrition</h2>
                        <p>Fuel your body with the nutrients it needs to thrive. 
                            Our nutrition experts provide personalized guidance and practical advice to optimize your diet, 
                            supporting your fitness journey and enhancing your overall well-being.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


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


    


    <!-- Class Timetable Start -->
    <div class="container gym-feature py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-primary font-weight-bold">Class Timetable</h4>
                <h4 class="display-4 font-weight-bold">Working Hours and Class Time</h4>
            </div>
            <div class="tab-class">
                <ul class="nav nav-pills justify-content-center mb-4">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#class-all">All Classes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#class-cardio">Cardio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#class-crossfit">Crossfit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#class-powerlifting">Powerlifting</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="class-all" class="container tab-pane p-0 active">
                        <div class="table-responsive">
                            <table class="table table-bordered table-lg m-0">
                                <thead class="bg-secondary text-white text-center">
                                    <tr>
                                        <th>Time</th>
                                        <th>Monday</th>
                                        <th>Tuesday</th>
                                        <th>Wednesday</th>
                                        <th>Thursday</th>
                                        <th>Friday</th>
                                        <th>Saturday</th>
                                        <th>Sunday</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                        <td><h5>Cardio</h5>Surveer Singh</td>
                                        <td></td>
                                        <td><h5>Crossfit</h5>Md Salem</td>
                                        <td></td>
                                        <td><h5>Power Lifting</h5>Rajib Menon</td>
                                        <td></td>
                                        <td><h5>Cardio</h5>Surveer Singh</td>
                                    </tr>
                                    <tr>
                                        <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                        <td></td>
                                        <td><h5>Power Lifting</h5>Rajib Menon</td>
                                        <td></td>
                                        <td><h5>Cardio</h5>Surveer Singh</td>
                                        <td></td>
                                        <td><h5>Crossfit</h5>Md Salem</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                        <td><h5>Crossfit</h5>Md Salem</td>
                                        <td></td>
                                        <td><h5>Power Lifting</h5>Rajib Menon</td>
                                        <td></td>
                                        <td><h5>Cardio</h5>Surveer Singh</td>
                                        <td></td>
                                        <td><h5>Crossfit</h5>Md Salem</td>
                                    </tr>
                                    <tr>
                                        <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                        <td></td>
                                        <td><h5>Cardio</h5>Surveer Singh</td>
                                        <td></td>
                                        <td><h5>Crossfit</h5>Md Salem</td>
                                        <td></td>
                                        <td><h5>Power Lifting</h5>Rajib Menon</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="class-cardio" class="container tab-pane fade p-0">
                        <div class="table-responsive">
                            <table class="table table-bordered table-lg m-0">
                                <thead class="bg-secondary text-white text-center">
                                    <tr>
                                        <th>Time</th>
                                        <th>Monday</th>
                                        <th>Tuesday</th>
                                        <th>Wednesday</th>
                                        <th>Thursday</th>
                                        <th>Friday</th>
                                        <th>Saturday</th>
                                        <th>Sunday</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                        <td class="bg-primary text-white"><h5 class="text-white">Cardio</h5>Surveer Singh</td>
                                        <td></td>
                                        <td><h5>Crossfit</h5>Md Salem</td>
                                        <td></td>
                                        <td><h5>Power Lifting</h5>Rajib Menon</td>
                                        <td></td>
                                        <td class="bg-primary text-white"><h5 class="text-white">Cardio</h5>Surveer Singh</td>
                                    </tr>
                                    <tr>
                                        <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                        <td></td>
                                        <td><h5>Power Lifting</h5>Rajib Menon</td>
                                        <td></td>
                                        <td class="bg-primary text-white"><h5 class="text-white">Cardio</h5>Surveer Singh</td>
                                        <td></td>
                                        <td><h5>Crossfit</h5>Md Salem</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                        <td><h5>Crossfit</h5>Md Salem</td>
                                        <td></td>
                                        <td><h5>Power Lifting</h5>Rajib Menon</td>
                                        <td></td>
                                        <td class="bg-primary text-white"><h5 class="text-white">Cardio</h5>Surveer Singh</td>
                                        <td></td>
                                        <td><h5>Crossfit</h5>Md Salem</td>
                                    </tr>
                                    <tr>
                                        <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                        <td></td>
                                        <td class="bg-primary text-white"><h5 class="text-white">Cardio</h5>Surveer Singh</td>
                                        <td></td>
                                        <td><h5>Crossfit</h5>Md Salem</td>
                                        <td></td>
                                        <td><h5>Power Lifting</h5>Rajib Menon</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="class-crossfit" class="container tab-pane fade p-0">
                        <div class="table-responsive">
                            <table class="table table-bordered table-lg m-0">
                                <thead class="bg-secondary text-white text-center">
                                    <tr>
                                        <th>Time</th>
                                        <th>Monday</th>
                                        <th>Tuesday</th>
                                        <th>Wednesday</th>
                                        <th>Thursday</th>
                                        <th>Friday</th>
                                        <th>Saturday</th>
                                        <th>Sunday</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                        <td><h5>Cardio</h5>Surveer Singh</td>
                                        <td></td>
                                        <td class="bg-primary text-white"><h5 class="text-white">Crossfit</h5>Md Salem</td>
                                        <td></td>
                                        <td><h5>Power Lifting</h5>Rajib Menon</td>
                                        <td></td>
                                        <td><h5>Cardio</h5>Surveer Singh</td>
                                    </tr>
                                    <tr>
                                        <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                        <td></td>
                                        <td><h5>Power Lifting</h5>Rajib Menon</td>
                                        <td></td>
                                        <td><h5>Cardio</h5>Surveer Singh</td>
                                        <td></td>
                                        <td class="bg-primary text-white"><h5 class="text-white">Crossfit</h5>Md Salem</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                        <td class="bg-primary text-white"><h5 class="text-white">Crossfit</h5>Md Salem</td>
                                        <td></td>
                                        <td><h5>Power Lifting</h5>Rajib Menon</td>
                                        <td></td>
                                        <td><h5>Cardio</h5>Surveer Singh</td>
                                        <td></td>
                                        <td class="bg-primary text-white"><h5 class="text-white">Crossfit</h5>Md Salem</td>
                                    </tr>
                                    <tr>
                                        <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                        <td></td>
                                        <td><h5>Cardio</h5>Surveer Singh</td>
                                        <td></td>
                                        <td class="bg-primary text-white"><h5 class="text-white">Crossfit</h5>Md Salem</td>
                                        <td></td>
                                        <td><h5>Power Lifting</h5>Rajib Menon</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="class-powerlifting" class="container tab-pane fade p-0">
                        <div class="table-responsive">
                            <table class="table table-bordered table-lg m-0">
                                <thead class="bg-secondary text-white text-center">
                                    <tr>
                                        <th>Time</th>
                                        <th>Monday</th>
                                        <th>Tuesday</th>
                                        <th>Wednesday</th>
                                        <th>Thursday</th>
                                        <th>Friday</th>
                                        <th>Saturday</th>
                                        <th>Sunday</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                        <td><h5>Cardio</h5>Surveer Singh</td>
                                        <td></td>
                                        <td><h5>Crossfit</h5>Md Salem</td>
                                        <td></td>
                                        <td class="bg-primary text-white"><h5 class="text-white">Power Lifting</h5>Rajib Menon</td>
                                        <td></td>
                                        <td><h5>Cardio</h5>Surveer Singh</td>
                                    </tr>
                                    <tr>
                                        <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                        <td></td>
                                        <td class="bg-primary text-white"><h5 class="text-white">Power Lifting</h5>Rajib Menon</td>
                                        <td></td>
                                        <td><h5>Cardio</h5>Surveer Singh</td>
                                        <td></td>
                                        <td><h5>Crossfit</h5>Md Salem</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                        <td><h5>Crossfit</h5>md Salem</td>
                                        <td></td>
                                        <td class="bg-primary text-white"><h5 class="text-white">Power Lifting</h5>Rajib Menon</td>
                                        <td></td>
                                        <td><h5>Cardio</h5>Surveer Singh</td>
                                        <td></td>
                                        <td><h5>Crossfit</h5>Md Salem</td>
                                    </tr>
                                    <tr>
                                        <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                        <td></td>
                                        <td><h5>Cardio</h5>Surveer Singh</td>
                                        <td></td>
                                        <td><h5>Crossfit</h5>Md Salem</td>
                                        <td></td>
                                        <td class="bg-primary text-white"><h5 class="text-white">Power Lifting</h5>Rajib Menon</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- Class Timetable End -->


    <!-- BMI Calculation Start -->
    <div class="container-fluid position-relative bmi my-5">
        <div class="container">
            <div class="row px-3 align-items-center">
                <div class="col-md-6">
                    <div class="pr-md-3 d-none d-md-block">
                        <h4 class="text-primary">Body Mass Index </h4>
                        <h4 class="display-4 text-white font-weight-bold mb-4">Whate is BMI?</h4>
                        <p class="m-0 text-white">BMI, or Body Mass Index, is a measure used to assess a person's body weight relative to their height,
                             providing an indication of whether they are underweight, normal weight, overweight, or obese.</p>
                    </div>
                </div>
                <div class="col-md-6 bg-secondary py-5">
                    <div class="py-5 px-3">
                        <h1 class="mb-4 text-white text-center">Calculate your BMI</h1>
                        </div>
                            <div class="wrapper-bmi">
                                <a href="bmical.php">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Calculate your BMI
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BMI Calculation End -->


    <!-- Team Start -->
    <div class="container pt-5 team">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Our Trainers</h4>
            <h4 class="display-4 font-weight-bold">Meet Our Expert Trainers</h4>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="img/team-1.jpg" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://twitter.com/rajibmenon"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://facebook.com/rajibmenon"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://linkedin.com/in/rajibmenon"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://instagram.com/rajibmenon"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary">Rajib Menon</h4>
                        <p class="card-text">Trainer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="img/team-2.jpg" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://twitter.com/yogeshpatel"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://facebook.com/yogeshpatel"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://linkedin.com/in/yogeshpatel"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://instagram.com/yogeshpatel"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary">Yogesh Patel</h4>
                        <p class="card-text">Trainer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="img/team-3.jpg" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://twitter.com/surveersingh"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://facebook.com/surveersingh"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://linkedin.com/in/surveersingh"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://instagram.com/surveersingh"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary">Surveer Singh</h4>
                        <p class="card-text">Trainer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="img/team-4.jpg" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://twitter.com/mdsalem"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://facebook.com/mdsalem"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://linkedin.com/in/mdsalem"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://instagram.com/mdsalem"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary">md Salem</h4>
                        <p class="card-text">Trainer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


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


    <!-- Blog Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Our Blog</h4>
            <h4 class="display-4 font-weight-bold">Latest Article From Blog</h4>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-5 blog-item">
                <img class="img-fluid mb-4" src="img/blog-1.jpg" alt="Image">
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white" style="width: 80px; height: 80px;">
                        <small>01</small>
                        <strong class="text-uppercase m-0 text-white">Jan</strong>
                        <small>2024</small>
                    </div>
                    <div class="pl-3">
                        <h3 class="font-weight-bold">Achieve Your Fitness Goals with Our Personal Training Sessions</h3>
                        <div class="d-flex">
                            <small class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</small>
                            <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                            <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                        </div>
                    </div>
                </div>
                <p>Take your fitness journey to the next level with our personalized training sessions. Our certified trainers will create a customized workout plan tailored to your specific goals and fitness level.</p>
                <a class="btn btn-outline-primary mt-2 px-3" href="blog.php">Read More <i class="fa fa-angle-right"></i></a>
            </div>
            <div class="col-lg-6 mb-5 blog-item">
                <img class="img-fluid mb-4" src="img/blog-2.jpg" alt="Image">
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white" style="width: 80px; height: 80px;">
                        <small>05</small>
                        <strong class="text-uppercase m-0 text-white">Apr</strong>
                        <small>2024</small>
                    </div>
                    <div class="pl-3">
                        <h3 class="font-weight-bold">Discover Tranquility with Our Yoga Classes</h3>
                        <div class="d-flex">
                            <small class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</small>
                            <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                            <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                        </div>
                    </div>
                </div>
                <p>Indulge in the serenity of our yoga classes and discover inner peace like never before. Our experienced instructors will guide you through various poses and breathing techniques, helping you relax your mind and strengthen your body.</p>
                <a class="btn btn-outline-primary mt-2 px-3" href="blog.php">Read More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
    <!-- Blog End -->


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