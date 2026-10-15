<?php

session_start();

if(!isset($_SESSION["user"]))
{
    header("Location: /Kiemtra3/Views/login.php");
    exit();
}

header("Location: /Kiemtra3/bang1/dashboard.php");
exit();

?>