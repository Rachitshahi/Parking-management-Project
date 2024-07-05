<?php

require '../config/function.php';

if(isset($_SESSION['auth']))
{
    logoutSession();
    redirect('../admin/loginform.php','Logged Out Successfully');
}

?>