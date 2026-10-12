<?php
session_start();

if(!isset($_SESSION["user"]))
{
    header("Location: /Kiemtra3/Views/login.php");
    exit();
}

require_once "database.php";

$tongphim = $pdo->query("SELECT COUNT(*) FROM bangchieu")->fetchColumn();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h2>DASHBOARD QUẢN LÝ RẠP CHIẾU PHIM</h2>

    <div class="card p-3 mt-3">
        <h4>Tổng số phim: <?php echo $tongphim; ?></h4>
    </div>

    <br>

    <a href="index.php" class="btn btn-primary">
        Quản lý phim
    </a>

    <a href="/Kiemtra3/logout.php" class="btn btn-danger">
        Đăng xuất
    </a>

</div>

</body>
</html>