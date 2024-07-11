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
                    <h1 class="h3 mb-4 text-gray-800">Add Topic</h1>

                    <form action="instopic.php" method="post" enctype="multipart/form-data">

                        
                        <!-- <p> 
                            <select name="parent_id">
                                <option value="0">No Parent</option>
                                <?php
                                    /*$sel="SELECT * FROM categories WHERE pid='0'";
                                    $rs=$con->query($sel);
                                    while($row=$rs->fetch_assoc()){
                                ?>
                                <option value="<?php echo $row['catid']; ?>"><?php echo $row['cat_name']; ?></option>
                            <?php } */?>
                            </select>
                        </p>  -->
                        <?php
                            include("admin_inc/db.php");
                            $id=$_GET['aid']; 
                            $sel="SELECT * FROM categories WHERE $id=catid";
                            $rs=$con->query($sel);
                            while($row=$rs->fetch_assoc()){
                        ?>      
                        <p>Name</p>
                        <p><input type="text" name="tname" id=""></p>
                        <p>Repeatation</p>
                        <p><input type="number" name="trep" id=""></p>
                        <p>No of Set</p>
                        <p><input type="number" name="tset" id=""></p>
                        <p>Duration</p>
                        <p><select name="duration" id="">
                            <option value="">--select--</option>
                            <option value="No Duration">No Duration</option>
                            <option value="30s">30s</option>
                            <option value="60s">60s</option>
                            <option value="90s">90s</option>
                            <option value="120s">120s</option>
                            <option value="150s">150s</option>
                            <option value="180s">180s</option>
                        </select></p>
                        <p>Exercise Description</p>
                        <p><textarea name="edtls" id="" rows="4"></textarea></p>
                        <p>Video</p>
                        <p><input type="file" name="tvideo" id=""></p>
                        <p>Category Name</p>
                        <p><input type="text" name="cname" value="<?php echo $row['cat_name']; ?>" id="" readonly></p>
                        <p><input class="btn btn-success" type="submit" name="save" value="Add Topic"></p>
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