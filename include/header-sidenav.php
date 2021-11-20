
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Management</title>
</head>
<body>
    <!--Header and Side Nav-->
    <div class="header">
        <a href="" class="name"> </a>
        <div class="header-right">
        <a> <?php $date = date('m/d/Y', time());echo $date;?></a>
            <a href="" class="Hello" id="dateTime"> <i class="fas fa-user"></i> 
            Hello 
            <?php if(!empty( $_SESSION['username'])) echo $_SESSION['username'] ; else {echo "";}?>
            </a>

            <a href="logout.php" class="logout"><i class="fas fa-power-off"></i> Logout</a>
        </div>
    </div>

    <div class="sidenav">
        <div class="sidenav-title">
            <a href="#title"><h1>Library </h1></a>
        </div>
        <div class="sidenav-items">
            <a href="#"></a>
            <a href="dashboard.php"><i class="fas fa-home"></i> Dashboard </a>
            <a href="HSaddbook.php"><i class="fas fa-plus-circle"></i > Add Books</a>
            <a href="HSviewbooks.php"><i class="fas fa-eye"></i> View Books</a>
            <a href="issuebooks.php"><i class="fas fa-asterisk"></i> Issue Books</a>
            <a href="patrons.php"><i class="fas fa-search"></i> Search Patron Records</a>
            <a href="displayUser.php"><i class="fas fa-users-cog"></i> Manage Accounts</a>
        </div>
        
    </div>

    <div class="footer">
        <p>Young High School</p>
    </div>
</body>
</html>