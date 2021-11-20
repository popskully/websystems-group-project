<?php
require_once "../include/config.php";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $role = $_POST['role'];
    $passEn = md5($pass);

    // $checkEmail = "SELECT * FROM librarian where email='$email'";
    // $exist = mysqli_query($conn, $checkEmail);

    if (empty($email) || empty($pass)|| empty($name)) {
        echo ("<script>alert('Fields cannot be empty');</script>");
        header('location:../account.php');
        exit();
    } else {

        $query = "SELECT * from librarian where email = '$email'";
        $valid = $conn->query($query);

        if($valid->num_rows > 0) {
            $row = $valid->fetch_assoc();
                 echo ("<script>console.log('".$row['email']."');</script>");
                 header('location:../error.php');
                 exit();
        }

        $sql = "INSERT INTO librarian (name, type, email, password) VALUES ('$name', '$role', '$email', '$passEn')";
        //mysqli_query use the connection string and the query to run the query
        if (mysqli_query($conn, $sql)) {
            echo ("<script>console.log('Record inserted');</script>");
            header('location:../displayUser.php');
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