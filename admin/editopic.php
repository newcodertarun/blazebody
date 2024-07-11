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

    <title>Update Category</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
                    <h1 class="h3 mb-4 text-gray-800">Update Topic</h1>

                    <form action="updtopic.php" method="post" enctype="multipart/form-data">
                        <?php
                            include("admin_inc/db.php");
                            $id=$_GET['eid']; 
                            $sel="SELECT * FROM exercises WHERE $id=tid";
                            $rs=$con->query($sel);
                            while($row=$rs->fetch_assoc()){
                        ?>
                        <p><input type="hidden" name="id" value="<?php echo $row['tid']; ?>"></p>      
                        <p>Name</p>
                        <p><input type="text" name="tname" value="<?php echo $row['tname']; ?>" id=""></p>
                        <p>Repeatation</p>
                        <p><input type="number" name="trep" value="<?php echo $row['repeatation']; ?>" id=""></p>
                        <p>No of Set</p>
                        <p><input type="number" name="tset" value="<?php echo $row['exersize_set']; ?>" id=""></p>
                        <p>Duration</p>
                        <p><select name="duration" id="">
                            <option value="">--select--</option>
                            <option <?php if($row['duration']=="No Duration"){ echo "selected";} ?> value="No Duration">No Duration</option>
                            <option <?php if($row['duration']=="30s"){ echo "selected";} ?> value="30s">30s</option>
                            <option <?php if($row['duration']=="60s"){ echo "selected";} ?> value="60s">60s</option>
                            <option <?php if($row['duration']=="90s"){ echo "selected";} ?> value="90s">90s</option>
                            <option <?php if($row['duration']=="120s"){ echo "selected";} ?> value="120s">120s</option>
                            <option <?php if($row['duration']=="150s"){ echo "selected";} ?> value="150s">150s</option>
                            <option <?php if($row['duration']=="180s"){ echo "selected";} ?> value="180s">180s</option>
                        </select></p>
                        <p>Exercise Description</p>
                        <p><textarea name="edtls" id="" rows="4"><?php echo $row['tdetails']; ?></textarea></p>
                        <p>Video</p>
                        <p><input type="file" name="tvideo" id=""></p>
                        <video width="240" height="180" controls>
                            <source src="topic_video/<?php echo $row['tvideo']; ?>" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        <p>Category Name</p>
                        <p><input type="text" name="cname" value="<?php echo $row['catname']; ?>" id="" readonly></p>
                        <p><input class="btn btn-success" type="submit" name="save" value="Update Topic"></p>
                        <?php } ?>
                    </form>

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