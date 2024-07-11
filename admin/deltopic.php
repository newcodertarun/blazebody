<?php

    include("admin_inc/db.php");
    $id=$_GET['did'];
    $sel="SELECT * FROM exercises WHERE tid='$id'";
    $rs=$con->query($sel);
    $row=$rs->fetch_assoc();
    unlink("topic_video/".$row['tvideo']);
    $d="DELETE FROM exercises WHERE tid='$id'";
    if($rs=$con->query($d)){
        header("location:seltopic.php");
    }
    


?>