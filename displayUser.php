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
                <a href="account.php">
                    <button type="submit" name="add" class="btn btn-primary w-25">Add User</button>
                </a>
                <br><br>

                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM librarian";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['libid'];
                                $name = $row['name'];
                                $email = $row['email'];
                                $role = $row['type'];
                                echo '
                                <tr>
                                    <th scope="row">' . $id . '</th>
                                    <td>' . $name . '</td>
                                    <td>' . $email . '</td>
                                    <td>' . $role . '</td>
                                    <td>
                                        <a href="update_user.php?updateid='.$id.'"><button class="btn btn-primary">Edit</button></a>
                                        <a href="./controller/delete_user.php?deleteid='.$id.'"><button class="btn btn-danger">Delete</button></a>
                                     </td>
                                </tr>';
                            }
                        }
                        ?>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>