<?php
include 'connection.php';
$fname=$_POST['fullName'];
$username=$_POST['username'];
$mail=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];

$sql = "INSERT INTO user (fullname, email, username,password,phone) VALUES ('$fname','$mail','$username','$password','$phone')";
$hi = mysqli_execute_query($conn, $sql, );

if($hi==true){
    echo"Data entered successfully";
} else {
    echo "abey saale";
}

?>
