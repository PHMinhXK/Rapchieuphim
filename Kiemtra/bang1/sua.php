<?php

require_once "database.php";

$idphim = $_GET["idphim"] ?? 0;

$sql = "SELECT * FROM bangchieu
        WHERE idphim = :idphim";

$stm = $pdo->prepare($sql);

$stm->execute([
    "idphim" => $idphim
]);

$phim = $stm->fetch(PDO::FETCH_ASSOC);

// Nếu không tìm thấy phim thì quay về trang chủ
if (!$phim) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>

    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Sửa Phim</title>
</head>
<body>

<div class="container">

<h2 class="mt-3">SỬA THÔNG TIN PHIM</h2>

<!-- Form gửi dữ liệu sang file capnhat.php -->
<form action="capnhat.php?idphim=<?= $phim['idphim'] ?>" method="POST">

    <!-- Nhập tên phim -->
    <p>
        <label>Tên phim</label>
        <input type="text" name="tenphim" class="form-control"
               value="<?= $phim['tenphim'] ?>" required>
    </p>

    <!-- Nhập đạo diễn -->
    <p>
        <label>Đạo diễn</label>
        <input type="text" name="daodien" class="form-control"
               value="<?= $phim['daodien'] ?>" required>
    </p>

    <!-- Nhập thể loại -->
    <p>
        <label>Thể loại</label>
        <input type="text" name="theloai" class="form-control"
               value="<?= $phim['theloai'] ?>" required>
    </p>

    <!-- Nhập thời lượng phim -->
    <p>
        <label>Thời lượng</label>
        <input type="number" name="thoiluong" class="form-control"
               value="<?= $phim['thoiluong'] ?>" required>
    </p>

    <!-- Nhập mô tả phim -->
    <p>
        <label>Mô tả</label>
        <textarea name="mota" class="form-control"><?= $phim['mota'] ?></textarea>
    </p>

    <!-- Nút lưu thay đổi -->
    <button type="submit" class="btn btn-primary">
        Lưu thay đổi
    </button>

    <!-- Quay lại trang danh sách phim -->
    <a href="index.php" class="btn btn-danger">
        Quay lại
    </a>

</form>

</div>

</body>
</html>