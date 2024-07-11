<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BlazeBody-Classes</title>
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
    <!-- Link to your custom CSS -->
    <link href="css/custom.css" rel="stylesheet">
</head>

<body class="bg-white">
    <!-- Navbar Start -->
        <?php include("inc/topbar.php"); ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Gym Classes</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="index.php">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Gym Classes</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Gym Class Start -->
    <div class="container gym-class mb-5" style="margin-top: 90px;">
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
    <div class="container-fluid position-relative bmi mt-5" style="margin-bottom: 90px;">
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
                        <h1 class="mb-4 text-white">Calculate your BMI</h1>
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
    </div>
    <!-- BMI Calculation End -->


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