<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BlazeBodyU-Single</title>
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
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Detail Page</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="index.php">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Detail</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog Detail Start -->
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <img class="img-fluid mb-4" src="img/carousel-1.jpg" alt="Image">
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white" style="width: 100px; height: 100px;">
                        <span>01</span>
                        <strong class="text-uppercase m-0 text-white">Jan</strong>
                        <span>2024</span>
                    </div>
                    <div class="pl-3">
                        <h1 class="font-weight-bold mb-3">High-Intensity Interval Training (HIIT)</h1> 
                        <div class="d-flex">
                            <span class="mr-2 text-muted"><i class="fa fa-user"></i> Mohit Sharma</span> 
                            <span class="mr-2 text-muted"><i class="fa fa-folder"></i> HIIT</span> 
                            <span class="mr-2 text-muted"><i class="fa fa-clock"></i> 45 Minutes</span> 
                        </div>
                    </div>

                </div>
                <p>Join us for an exhilarating High-Intensity Interval Training (HIIT) class that combines cardio and strength training for a full-body workout. This class is perfect for those looking to burn calories and build muscle.</p>
                <p>In this class, you'll experience a variety of exercises including jump squats, burpees, and push-ups, all designed to challenge your endurance and strength. Each session is different, keeping you engaged and motivated to push your limits.</p>
                <p>Our certified instructor, Jane Smith, will guide you through each exercise, ensuring proper form and technique to maximize your workout and minimize the risk of injury. Whether you're a beginner or an experienced athlete, this class can be tailored to meet your fitness level.</p>
                <p>Don't forget to bring a water bottle and a towel, as you are sure to work up a sweat! Join us and take the first step towards a healthier, stronger you.</p>
                <h3 class="mb-4 font-weight-bold">Unleash Your Strength with Our Powerlifting Classes</h3>
                <img class="w-50 float-right ml-4 mb-3" src="img/blog-2.jpg" alt="Image">
                <p>Experience the thrill of powerlifting in our dynamic classes designed to help you build strength and confidence. Whether you're a seasoned lifter or just starting out, our expert trainers will guide you through each lift, ensuring proper form and technique. From squats to deadlifts, our classes cover a range of exercises to target every muscle group. Join us and push your limits as you lift heavier weights and reach new personal bests. Our supportive community will cheer you on every step of the way, helping you stay motivated and focused on your goals. Don't miss out on the opportunity to transform your physique and become the strongest version of yourself. Sign up for our powerlifting classes today!</p>
                <h3 class="mb-4 font-weight-bold">Discover Tranquility with Our Yoga Classes</h3>
                <img style="height: 300px;" class="w-50 float-left mr-4 mb-3" src="img/yoga-image.jpg" alt="Image">
                <p>Embark on a journey of self-discovery and inner peace with our invigorating yoga classes. Guided by experienced instructors, our classes offer a sanctuary where you can unwind, de-stress, and reconnect with your body and mind. Through gentle stretches, controlled breathing, and meditation, you'll learn to release tension, improve flexibility, and cultivate a sense of tranquility within. Whether you're a beginner or an experienced yogi, our classes cater to all levels, allowing you to progress at your own pace. Join our community of like-minded individuals and explore the transformative power of yoga. Say goodbye to the chaos of daily life and embrace a calmer, more centered existence. Start your journey to inner peace today by joining our yoga classes!</p>

            </div>
            <div class="col-12 pt-4">
                <div class="media bg-secondary text-white mb-4 p-5">
                    <img src="img/user.jpg" alt="Image" class="mr-3 mt-1 rounded-circle p-3 bg-dark" style="width:150px;">
                    <div class="media-body">
                        <h4 class="text-primary mb-3">Karan shaw</h4>
                        <p class="m-0">Karan shaw is a certified fitness instructor with over 10 years of experience in the industry. He specializes in helping clients achieve their health and wellness goals through personalized training programs. John believes in a holistic approach to fitness, focusing not only on physical strength but also on mental well-being. He is passionate about motivating and guiding individuals to lead healthier, happier lives. Whether you are looking to lose weight, build muscle, or simply improve your overall fitness, John is dedicated to supporting you every step of the way.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 py-4">
                <h3 class="mb-4 font-weight-bold">3 Comments</h3>
                <div class="media mb-4">
                    <img src="img/team-4.jpg" alt="Image" class="mr-3 mt-1 rounded-circle" style="width:60px;">
                    <div class="media-body">
                        <h4>Tapan Sinha <small><i>07 Feb 2024 at 12:00pm</i></small></h4>
                        <p>I love this gym! The classes are amazing and the trainers are incredibly supportive. I've seen great improvements in my fitness levels since I joined.</p>
                    </div>
                </div>
                <div class="media mb-4">
                    <img src="img/team-3.jpg" alt="Image" class="mr-3 mt-1 rounded-circle"
                        style="width:60px;">
                    <div class="media-body">
                        <h4>Subham Adhikari <small><i>18 Mar 2024 at 10:00pm</i></small></h4>
                        <p>The equipment here is top-notch and the environment is very motivating. I've been able to stick to my fitness goals much more consistently.</p>
                        <div class="media mt-4">
                            <img src="img/team-1.jpg" alt="Image" class="mr-3 mt-1 rounded-circle"
                                style="width:60px;">
                            <div class="media-body">
                                <h4>Hari Roy <small><i>05 Apr 2024 at 07:00pm</i></small></h4>
                                <p>The variety of classes offered keeps me excited to come back every week. The HIIT sessions, in particular, are intense but so rewarding!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Blog Detail End -->


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