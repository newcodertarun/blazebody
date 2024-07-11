<?php
    session_start();
    if(!isset($_SESSION['an'])){
        header("location:index.php");
    }
    include("admin_inc/db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Category</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .table td {
            word-wrap: break-word;
            max-width: 200px; /* Adjust as needed */
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include("admin_inc/sidebar.php");  ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include("admin_inc/top.php"); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">List Of Exercises</h1>

                    <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Exercise Name</th>
                            <th>Repeatation</th>
                            <th>No of Set</th>
                            <th>Duration</th>
                            <th>Exercise Category</th>
                            <th>Video</th>
                            <th>Topic Details</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        include("admin_inc/db.php"); 
                        $sel="SELECT * FROM exercises";
                        $rs=$con->query($sel);
                        while($row=$rs->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $row['tname']; ?></td>
                        <td><?php echo $row['repeatation']; ?></td>
                        <td><?php echo $row['exersize_set']; ?></td>
                        <td><?php echo $row['duration']; ?></td>
                        <td><?php echo $row['catname']; ?></td>
                        <td>
                            <video width="180" height="160" controls>
                            <source src="topic_video/<?php echo $row['tvideo']; ?>" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </td>
                        <td><?php echo $row['tdetails']; ?></td>
                        <th><a onclick="return confirm('Are you sure ?');" href="deltopic.php?did=<?php echo $row['tid']; ?>" class="btn btn-danger">Delete</a></th>
                        <th><a href="editopic.php?eid=<?php echo $row['tid']; ?>" class="btn btn-primary">Edit</a></th>
                    </tr>
                    <?php } ?>
                    </tbody>
                    </table>
                        
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include("admin_inc/footer.php"); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php  include("admin_inc/logout_model.php");  ?>    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>