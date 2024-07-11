<?php
    include("admin_inc/db.php");
    if(isset($_POST['musicsave'])){
        $mn=$_POST['mname'];
        $ma=$_POST['atisname'];

        // Handling the cover photo upload
        $cover_tmp_name = $_FILES['mp_img']['tmp_name'];
        $cover_filename = time() . '_' . basename($_FILES['mp_img']['name']);
        $cover_target_path = "uploads/" . $cover_filename;

        // Handling the music file upload
        $music_tmp_name = $_FILES['music']['tmp_name'];
        $music_filename = time() . '_' . basename($_FILES['music']['name']);
        $music_target_path = "uploads/" . $music_filename;
        if (move_uploaded_file($cover_tmp_name, $cover_target_path) && move_uploaded_file($music_tmp_name, $music_target_path)) {

        $insmusic="INSERT INTO musics SET m_name='$mn',m_artist='$ma',m_cover='$cover_filename',m_audio='$music_filename'";
        if($res=$con->query($insmusic)){
            header("location:listmusic.php");
        }else{
            echo "Error";
        }
        }else{
            echo "Error uploading files.";
        }
    }
?>