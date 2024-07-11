<?php
    include("admin_inc/db.php");
    if($_POST['save']){
        $tn=$_POST['tname'];
        $tr=$_POST['trep'];
        $ts=$_POST['tset'];
        $td=$_POST['duration'];
        $cn=$_POST['cname'];
        $tds=$_POST['edtls'];

        $buf=$_FILES['tvideo']['tmp_name'];
        $fn=time().$_FILES['tvideo']['name'];
        move_uploaded_file($buf,"topic_video/".$fn);

        $ins="INSERT INTO exercises SET tname='$tn',repeatation='$tr',duration='$td',tvideo='$fn',catname='$cn', tdetails='$tds', exersize_set='$ts'";
        if($rs=$con->query($ins)){
            header("location:seltopic.php");
        }
    }
?>