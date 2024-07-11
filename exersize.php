<?php
session_start();
include("admin/admin_inc/db.php");

// Fetch unique categories from the topics table
$selc = "SELECT DISTINCT catname FROM exercises";
$categories = $con->query($selc);

// Check if a category is selected
$categoryName = isset($_GET['catname']) ? $_GET['catname'] : '';

// Fetch exercises based on category name
$exercises = [];
if (!empty($categoryName)) {
    $stmt = $con->prepare("SELECT * FROM exercises WHERE catname = ?");
    if ($stmt) {
        $stmt->bind_param("s", $categoryName);
        $stmt->execute();
        $exercises = $stmt->get_result();
    } else {
        die("Database query failed: " . $con->error);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BlazeBodyU - Exercises</title>
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

    <!-- Custom Styles -->
    <style>
        .category-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .category-card {
            position: relative;
            width: calc(50% - 10px);
            height: 200px;
            background-size: cover;
            background-position: center;
            margin-bottom: 10px;
            color: white;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: transform 0.3s ease;
            
        }

        .category-card:hover {
            transform: scale(1.05);
            color: greenyellow;
        }

        .category-card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .category-card-text {
            font-size: 1.5em;
            font-weight: bold;
            font-size: 40px;
        }
        .border-5px {
            border-width: 5px !important;
        }
    </style>
</head>

<body class="bg-white">
    <!-- Navbar Start -->
    <?php include("inc/topbar.php"); ?>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Our Exercises</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="index.php">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Our Exercises</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Exercise Content Start -->
    <div class="container">
        <h2 class="text-center">Exercise Categories</h2>
        <div class="category-container">
            <?php
            if ($categories->num_rows > 0) {
                while ($category = $categories->fetch_assoc()) {
                    // Assuming a default image path or you can fetch this from your database
                    $backgroundImage = './img/home-workout.jpg';
                    echo '<a href="exersize.php?catname=' . htmlspecialchars($category['catname']) . '" class="category-card" style="background-image: url(' . htmlspecialchars($backgroundImage) . ');">';
                    echo '<div class="category-card-overlay">';
                    echo '<div class="category-card-text">' . htmlspecialchars($category['catname']) . '</div>';
                    echo '</div>';
                    echo '</a>';
                }
            } else {
                echo '<p>No categories found.</p>';
            }
            ?>
        </div>

        <h2 class="text-center">Exercise List</h2>
        <div class="row">
            <?php
            if (!empty($categoryName)) {
                if ($exercises->num_rows > 0) {
                    while ($exercise = $exercises->fetch_assoc()) {
                        echo '<div class="col-md-4">';
                        echo '<div class="card mb-4 border border-info border-5px">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title text-center h4">' . htmlspecialchars($exercise['tname'], ENT_QUOTES, 'UTF-8') . '</h5>';
                        echo '<p class="card-text"><strong>Repetitions:</strong> ' . htmlspecialchars($exercise['repeatation'], ENT_QUOTES, 'UTF-8') . '</p>';
                        echo '<p class="card-text"><strong>No of Set:</strong> ' . htmlspecialchars($exercise['exersize_set'], ENT_QUOTES, 'UTF-8') . '</p>';
                        echo '<p class="card-text"><strong>Duration:</strong> ' . htmlspecialchars($exercise['duration'], ENT_QUOTES, 'UTF-8') . '</p>';
                        echo '<p class="card-text"><strong>Category:</strong> ' . htmlspecialchars($exercise['catname'], ENT_QUOTES, 'UTF-8') . '</p>';
                        echo '<p class="card-text">' . htmlspecialchars($exercise['tdetails'], ENT_QUOTES, 'UTF-8') . '</p>';
                        if (!empty($exercise['tvideo'])) {
                            $videoPath = 'admin/topic_video/' . htmlspecialchars($exercise['tvideo'], ENT_QUOTES, 'UTF-8');
                            if (file_exists($videoPath)) {
                                echo '<video width="100%" controls>';
                                echo '<source src="' . $videoPath . '" type="video/mp4">';
                                echo 'Your browser does not support the video tag.';
                                echo '</video>';
                            } else {
                                echo '<p class="text-danger">Video file not found: ' . htmlspecialchars($exercise['tvideo'], ENT_QUOTES, 'UTF-8') . '</p>';
                            }
                        }
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No exercises found for this category.</p>';
                }
            } else {
                echo '<p>Please select a category to view exercises.</p>';
            }
            ?>
        </div>
    </div>
    <!-- Exercise Content End -->

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
<?php
if (isset($stmt)) {
    $stmt->close();
}
$con->close();
?>
