<?php
    require_once "../include/config.php";

    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="Delete from librarian where libid=$id";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo '<script>alert("Deleted successfully");</script>';
            header('location:../displayUser.php');
        }else {
            die(mysqli_error($conn));
            echo '<script>alert("Delete failed");</script>';
            header('location:../displayUser.php');
        }
    }
?>