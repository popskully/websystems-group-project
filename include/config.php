<?php 

$dbserver ="localhost";
$user = "root";
$password = "";
$dbname = "highschoolbooks_db";


    try{
        $conn = mysqli_connect($dbserver,$user,$password,"$dbname");
        echo ("<script>console.log('connected successfully');</script>");
    }catch(mysqli_sql_exception $e)
    {
        die('Could not Connect My Sql:');
        echo "You are not connected".$e;
        echo ("<script>console.log('Could not Connect to Sql');</script>");
    
    }
    //set timezone
    date_default_timezone_set('America/Los_Angeles');


?>