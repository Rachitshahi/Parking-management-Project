<?php
include 'connection.php';
$username=$_POST['username'];
$pass=$_POST['password'];

$sql="SELECT * FROM user where username ='$username' and password ='$pass' ";
$search=mysqli_execute_query($conn,$sql);
if($search==true){
    header('users.php');
}else{
    header('loginform.html');
}
