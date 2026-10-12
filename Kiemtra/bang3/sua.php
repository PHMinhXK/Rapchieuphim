<?php

require_once "database.php";

$idlichchieu = $_GET["idlichchieu"] ?? 0;

$sql = "SELECT * FROM lich
        WHERE idlichchieu = :idlichchieu";

$stm = $pdo->prepare($sql);

$stm->execute([
    "idlichchieu" => $idlichchieu
]);

$lich = $stm->fetch();

// Nếu không tìm thấy thì quay lại trang chính
if(!$lich){

    header("Location: index.php");

    exit();
}

?>

<!DOCTYPE html>
<html lang="vi">

<head>

    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Sửa lịch chiếu</title>

</head>

<body>

<div class="container">

    <h2 class="mt-3">SỬA LỊCH CHIẾU</h2>

    <form action="capnhat.php?idlichchieu=<?= $lich["idlichchieu"] ?>"
          method="POST">

        <!-- Mã phim -->
        <p>

            Mã phim:

            <input type="text"
                   name="idphim"
                   class="form-control"
                   value="<?= $lich["idphim"] ?>"
                   required>

        </p>

        <!-- Mã phòng -->
        <p>

            Mã phòng:

            <input type="text"
                   name="idphong"
                   class="form-control"
                   value="<?= $lich["idphong"] ?>"
                   required>

        </p>

        <!-- Ngày chiếu -->
        <p>

            Ngày chiếu:

            <input type="text"
                   name="ngaychieu"
                   class="form-control"
                   value="<?= $lich["ngaychieu"] ?>"
                   required>

        </p>

        <!-- Giờ bắt đầu -->
        <p>

            Giờ bắt đầu:

            <input type="text"
                   name="giobatdau"
                   class="form-control"
                   value="<?= $lich["giobatdau"] ?>"
                   required>

        </p>

        <!-- Giờ kết thúc -->
        <p>

            Giờ kết thúc:

            <input type="text"
                   name="gioketthuc"
                   class="form-control"
                   value="<?= $lich["gioketthuc"] ?>"
                   required>

        </p>

        <!-- Giá vé -->
        <p>

            Giá vé:

            <input type="text"
                   name="giave"
                   class="form-control"
                   value="<?= $lich["giave"] ?>"
                   required>

        </p>

        <!-- Trạng thái -->
        <p>

            Trạng thái:

            <input type="text"
                   name="trangthai"
                   class="form-control"
                   value="<?= $lich["trangthai"] ?>"
                   required>

        </p>

        <!-- Nút cập nhật -->
        <button type="submit" class="btn btn-primary">

            Cập nhật

        </button>

        <!-- Nút quay lại -->
        <a href="index.php" class="btn btn-danger">

            Quay lại

        </a>

    </form>

</div>

</body>
</html>