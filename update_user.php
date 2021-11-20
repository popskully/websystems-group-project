<?php
require_once "include/config.php";
include 'include/header-sidenav.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="css/styles.css?v=
    
    "> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Manage user accounts</title>
</head>

<body>
    <div class="main-body">
        <div class="grid-container">

            <div class="section-content px-5">


                <?php
                $id = $_GET['updateid'];

                $sql = "SELECT * FROM librarian where libid=$id";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['libid'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $pass = $row['password'];
                        $role = $row['type'];

                        echo '
                <form class="row g-3" method="post">
                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" value="' . $email . '">
                                <label for="email">Email address</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="' . $name . '">
                                <label for="name">Name</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="password" id="password" placeholder="Create a new password" value="">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <select class="form-select" name="role" id="role" aria-label="Floating label select example" >
                                    <option value="administrator">Admin</option>
                                    <option value="librarian">Librarian</option>
                                </select>
                                <label for="role">Role</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary w-25">Update User</button>
                </form>
                                            ';
                    }
                }

                $id = $_GET['updateid'];

                if (isset($_POST['submit'])) {
                    $email = $_POST['email'];
                    $name = $_POST['name'];
                    $pass = $_POST['password'];
                    $role = $_POST['role'];
                    $passEn = md5($pass);

                    if (empty($email) || empty($pass) || empty($name)) {
                        echo ("<script>alert('Fields cannot be empty');</script>");
                        // header('location:update_user.php');
                        exit();
                    } else {
                        $sql = "Update librarian set libid=$id, name='$name',email='$email',password='$passEn',type='$role' where libid=$id";

                        $result = $conn->query($sql_select);

                        if ($result) {
                            echo $row['name'];
                        }
                        //mysqli_query use the connection string and the query to run the query
                        if (mysqli_query($conn, $sql)) {
                            echo ("<script>alert('Record updated');</script>");
                            // header('location:displayUser.php');
                        } else {
                            echo ("<script>alert('Record not updated');</script>");
                            // header('location:displayUser.php');
                        }
                        //close connection
                        mysqli_close($conn);
                    }
                } else {
                    echo ("<script>console.log('no record');</script>");
                }
                ?>

            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>