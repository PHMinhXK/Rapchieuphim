<?php
session_start();

if(!isset($_SESSION["user"]))
{
    header("Location: Views/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Trang chủ</title>
</head>
<body>

<h2>Đăng nhập thành công</h2>

<p>Xin chào <?php echo $_SESSION["user"]; ?></p>

<a href="logout.php">Đăng xuất</a>

</body>
</html>