<?php

session_start();

session_destroy();

header("Location: /Kiemtra3/Views/login.php");
exit();

?>