<?php

require_once "database.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Lấy dữ liệu từ form
    $idlichchieu = $_POST["idlichchieu"];
    $idphim = $_POST["idphim"];
    $idphong = $_POST["idphong"];
    $ngaychieu = $_POST["ngaychieu"];
    $giobatdau = $_POST["giobatdau"];
    $gioketthuc = $_POST["gioketthuc"];
    $giave = $_POST["giave"];
    $trangthai = $_POST["trangthai"];

    $sql = "INSERT INTO lich
            (idlichchieu, idphim, idphong, ngaychieu, giobatdau, gioketthuc, giave, trangthai)
            VALUES
            (:idlichchieu, :idphim, :idphong, :ngaychieu, :giobatdau, :gioketthuc, :giave, :trangthai)";

    $stm = $pdo->prepare($sql);

    $stm->execute([
        "idlichchieu" => $idlichchieu,
        "idphim" => $idphim,
        "idphong" => $idphong,
        "ngaychieu" => $ngaychieu,
        "giobatdau" => $giobatdau,
        "gioketthuc" => $gioketthuc,
        "giave" => $giave,
        "trangthai" => $trangthai
    ]);

    // Quay về trang chính
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="vi">

<head>

    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Thêm lịch chiếu</title>

</head>

<body>

<div class="container">

    <h2 class="mt-3">THÊM LỊCH CHIẾU</h2>

    <form method="POST">

        <!-- Mã lịch chiếu -->
        <p>
            Mã lịch chiếu:

            <input type="text"
                   name="idlichchieu"
                   class="form-control"
                   required>
        </p>

        <!-- Mã phim -->
        <p>
            Mã phim:

            <input type="text"
                   name="idphim"
                   class="form-control"
                   required>
        </p>

        <!-- Mã phòng -->
        <p>
            Mã phòng:

            <input type="text"
                   name="idphong"
                   class="form-control"
                   required>
        </p>

        <!-- Ngày chiếu -->
        <p>
            Ngày chiếu:

            <input type="text"
                   name="ngaychieu"
                   class="form-control"
                   required>
        </p>

        <!-- Giờ bắt đầu -->
        <p>
            Giờ bắt đầu:

            <input type="text"
                   name="giobatdau"
                   class="form-control"
                   required>
        </p>

        <!-- Giờ kết thúc -->
        <p>
            Giờ kết thúc:

            <input type="text"
                   name="gioketthuc"
                   class="form-control"
                   required>
        </p>

        <!-- Giá vé -->
        <p>
            Giá vé:

            <input type="text"
                   name="giave"
                   class="form-control"
                   required>
        </p>

        <!-- Trạng thái -->
        <p>
            Trạng thái:

            <input type="text"
                   name="trangthai"
                   class="form-control"
                   required>
        </p>

        <!-- Nút lưu -->
        <button class="btn btn-primary">
            Lưu lịch chiếu
        </button>

        <!-- Nút quay lại -->
        <a href="index.php" class="btn btn-danger">
            Quay lại
        </a>

    </form>

</div>

</body>
</html>