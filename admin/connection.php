<?php
if (isset($_POST['login'])) {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "project1";
    //database connection
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
    if($conn){
        //echo"Database connected successfully";
    }else {
        echo"connection failed";
    }
    }

if (isset($_POST['signup'])) {
   echo "this is connection.php";
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "project1";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname); 
    if($conn){
        //echo"Database connected successfully";
    }else {
        echo"connection failed";
    }
}
?>