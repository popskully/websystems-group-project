<?php
require_once "../include/config.php";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $role = $_POST['role'];
    $passEn = md5($pass);

    $checkEmail = "SELECT * FROM librarian where email='$email'";
    $exist = mysqli_query($conn, $checkEmail);

    if (empty($email) || empty($pass)|| empty($name)) {
        echo ("<script>alert('Fields cannot be empty');</script>");
        header('location:../account.php');
        exit();
    } else if ($exist){
        // while ($row = mysqli_fetch_assoc($exist)) {
            echo ("<script>alert('Email already taken');</script>");
            header('location:../error.php');
        // }
    } else {

        $sql = "INSERT INTO librarian (name, type, email, password) VALUES ('$name', '$role', '$email', '$passEn')";
        //mysqli_query use the connection string and the query to run the query
        if (mysqli_query($conn, $sql)) {
            echo ("<script>console.log('Record inserted');</script>");
            header('location:../account.php');
        } else {
            echo ("<script>console.log('Records not inserted');</script>");
            header('location:../account.php');
        }
        //close connection
        mysqli_close($conn);
    }
       
} else {
    echo ("<script>console.log('no record');</script>");
}
?>