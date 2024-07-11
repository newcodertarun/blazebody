<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BlazeBodyU-Contact</title>
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
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Contact Us</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="index.php">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Contact Us</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Get In Touch</h4>
            <h4 class="display-4 font-weight-bold">Email Us For Any Query</h4>
        </div>
        <div class="row px-3 pb-2">
            <div class="col-sm-4 text-center mb-3">
                <i class="fa fa-2x fa-map-marker-alt mb-3 text-primary"></i>
                <h4 class="font-weight-bold">Address</h4>
                <p>Dakshinayan, RamKrishna pally, Chandmari raod, Howrah, PIN - 711109</p>
            </div>
            <div class="col-sm-4 text-center mb-3">
                <i class="fa fa-2x fa-phone-alt mb-3 text-primary"></i>
                <h4 class="font-weight-bold">Phone</h4>
                <p>+91 62745 67890</p>
            </div>
            <div class="col-sm-4 text-center mb-3">
                <i class="far fa-2x fa-envelope mb-3 text-primary"></i>
                <h4 class="font-weight-bold">Email</h4>
                <p>blazebody@gmail.com</p>
            </div>
        </div>
        <div class="row">
        <div class="col-md-6 pb-5">
            <iframe style="width: 100%; height: 392px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15885.57548539668!2d88.27733296174573!3d22.570317279125225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0277482f860d79%3A0x74edfc1c3c861da6!2s22.56828128872329%2C%2088.27972097002767!5e0!3m2!1sen!2sin!4v1621754402152!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
        </div>


        <div class="col-md-6 pb-5">
        <div class="contact-form">
        <div id="warningAlert" class="alert alert-warning" role="alert" style="display: none;">
            You can not use this form.
        </div>
        <div id="success"></div>
        <form name="sentMessage" id="contactForm" novalidate="novalidate" action="contacts.php" method="post" onsubmit="return showWarningMessage();">
            <div class="control-group">
                <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                <p class="help-block text-danger"></p>
            </div>
            <div class="control-group">
                <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                <p class="help-block text-danger"></p>
            </div>
            <div class="control-group">
                <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                <p class="help-block text-danger"></p>
            </div>
            <div class="control-group">
                <textarea class="form-control" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                <p class="help-block text-danger"></p>
            </div>
            <div class="d-flex align-items-center">
                <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Send Message</button>
                <p class="ml-3 mb-0" style="font-size: large; color:orange;">This Form Coming Soon</p>
            </div>
            
        </form>
    </div>
</div>

<script>
    var warningShown = false;

    function showWarningMessage() {
        if (!warningShown) {
            var warningAlert = document.getElementById('warningAlert');
            warningAlert.style.display = 'block'; // Show the alert
            warningShown = true; // Set the flag to true
        }
        return false; // Prevent form submission
    }
</script>

        </div>
    </div>
    
    <!-- Contact End -->


    <!-- Footer Start -->
        <?php include("inc/footer.php"); ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>

    <!-- Contact Javascript File -->
    
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>