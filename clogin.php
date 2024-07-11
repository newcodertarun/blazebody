<?php
    session_start();
    include("inc/db.php");
    if(isset($_POST['login'])){
        $e=$_POST['email'];
        $p=md5($_POST['pass']);


        $sel="SELECT * FROM users WHERE u_email='$e' AND u_password='$p'";
        $rs=$con->query($sel);
        if($rs->num_rows>0){
            $row=$rs->fetch_assoc();
            $_SESSION['cn']=$row['u_name'];
            header("location:index.php");
        }else{
            $err="Invalid login";
            header("refresh:2 url=index.php");
        }

        
    }
?>
<?php if(isset($err)){ ?>
<h1><?php echo $err; ?></h1>
<?php } ?>