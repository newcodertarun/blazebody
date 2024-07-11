<?php
    include("inc/db.php");
    if(isset($_POST['save'])){
        $n=$_POST['cname'];
        $e=$_POST['email'];
        $p=md5($_POST['pass']);

        $ins="INSERT INTO users SET u_name='$n',u_email='$e',u_password='$p'";
        $con->query($ins);
        header("refresh:2 url=index.php");
    }else{
        echo "404 Forbidden";
    }


?>
<h1>Registration Done</h1>