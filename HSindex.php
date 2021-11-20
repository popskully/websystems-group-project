
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">

    <title>SHS Library Management System</title>
</head>
<body>
    <div class="header">
        <a href="" class="name"> <h1><strong>Young High School</strong></h1></a>
        <div class="header-right">
            <a href="HSlogin.php" class="logout"><i class="fas fa-power-off"></i> Login</a>
        </div>
    </div>

    <div class="page-design container">
        <div class="page-heading">
            <h3><strong>Online Library Management System</strong></h3>
            <div class="welcome-button container">             
                    <button type="submit" class="welcome-btn" onclick="location.href='HSlogin.php'"><span>Login In Here</span></button>      
                    
                    <button type="submit" class="welcome-btn" onclick="location.href='guest/guestviewbooks.php'"><span>Log in as a Guest</span></button> 
                </div>
        </div>


    </div>
    <div class="HSfooter">
    <p>Young High School</p>
    </div>
</body>
</html>