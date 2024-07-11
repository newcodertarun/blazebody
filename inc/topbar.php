<div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="" class="navbar-brand">
                <h1 class="m-0 display-4 font-weight-bold text-white">BlazeBody</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About Us</a>
                    <a href="feature.php" class="nav-item nav-link">Our Features</a>
                    <a href="class.php" class="nav-item nav-link">Classes</a>
                    <a href="songs.php" class="nav-item nav-link">Music Library</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="blog.php" class="dropdown-item">Blog Grid</a>
                            <a href="single.php" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <?php if(isset($_SESSION['cn'])){ ?>
                        <a href="exersize.php" class="nav-item nav-link">Exersizes</a>
                        <a class="nav-item nav-link" href="logout.php">Logout</a>
                        <a class="nav-item nav-link" href="#"><?php echo $_SESSION['cn']; ?></a>
                    <?php } else { ?>
                        <a data-toggle="modal" data-target="#reg" class="nav-item nav-link" href="#">Sign Up</a>
                        <a data-toggle="modal" data-target="#login" class="nav-item nav-link" href="#">Sign In</a>
                    <?php } ?>
                </div>
        </nav>
    </div>


    <div class="modal" id="login">
            <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title">Sign In</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
            <form action="clogin.php" method="post">
                <p>Email</p>
                <p><input type="email" name="email" id="" class="form-control"></p>
                <p>Password</p>
                <p><input type="password" name="pass" id="" class="form-control"></p>
                <p><input class="btn btn-success" type="submit" name="login" value="Login"></p>
            </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

            </div>
            </div>
    </div>


                <!-- The Modal -->
                <div class="modal" id="reg">
                <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Sign Up</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                <form action="regins.php" method="post">
                <p>Your Name</p>
                <p><input type="text" name="cname" id="" class="form-control"></p>
                <p>Email</p>
                <p><input type="email" name="email" id="" class="form-control"></p>
                <p>Password</p>
                <p><input type="password" name="pass" id="" class="form-control"></p>
                <p><input class="btn btn-success" type="submit" name="save" value="Sign Up"></p>
                </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

                </div>
            </div>
        </div>

<div class="modal" id="membership">
            <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title">Gym Membership</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
            <p>For get membership in our gym center please contact with our physical Fitness center.</p>
            <p>Talk with our trainer for know about Membership plan</p>
            <p>contact with us for further information</p>
            <p style="color:blue;"><span><b>Contact No :</b></span> +91 62745 67890</p>
            <p style="color:blue;"><span><b>Address : </b></span>Dakshinayan, RamKrishna pally, Chandmari raod, Howrah, PIN - 711109</p>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

            </div>
            </div>
</div>