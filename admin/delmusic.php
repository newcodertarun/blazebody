<?php

include("admin_inc/db.php");

if (isset($_GET['did'])) {
    $id = $_GET['did'];
    
    // Fetch the file names to delete the files from the server
    $sel = "SELECT m_cover, m_audio FROM musics WHERE m_id = $id";
    $rs = $con->query($sel);
    if ($rs->num_rows > 0) {
        $row = $rs->fetch_assoc();
        $coverPath = "uploads/" . $row['m_cover'];
        $audioPath = "uploads/" . $row['m_audio'];
        
        // Delete the files
        if (file_exists($coverPath)) {
            unlink($coverPath);
        }
        if (file_exists($audioPath)) {
            unlink($audioPath);
        }
    }

    // Delete the record from the database
    $del = "DELETE FROM musics WHERE m_id = $id";
    if ($con->query($del)) {
        header("location:listmusic.php");
        
    } else {
        echo "Error deleting record: ";
    }
}
?>
