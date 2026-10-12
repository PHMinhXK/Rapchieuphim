<?php

require_once "../LoginController.php";

$controller = new LoginController();

$controller->DangNhap();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>ĐĂNG NHẬP HỆ THỐNG</h2>

    <form method="POST">

        <div class="mb-3">
            <label>Tài khoản</label>
            <input type="text" name="username" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Mật khẩu</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" name="dangnhap" class="btn btn-primary">
            Đăng nhập
        </button>

    </form>

</div>

</body>
</html>