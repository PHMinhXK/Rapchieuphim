<?php

require_once "database.php";

// Lấy mã lịch cần sửa từ URL
$idlichchieu = $_GET["idlichchieu"] ?? 0;

// Lấy dữ liệu mới từ form
$idphim = $_POST["idphim"];
$idphong = $_POST["idphong"];
$ngaychieu = $_POST["ngaychieu"];
$giobatdau = $_POST["giobatdau"];
$gioketthuc = $_POST["gioketthuc"];
$giave = $_POST["giave"];
$trangthai = $_POST["trangthai"];

// Câu lệnh UPDATE dùng để sửa dữ liệu
$sql = "UPDATE lich
        SET idphim = :idphim,
            idphong = :idphong,
            ngaychieu = :ngaychieu,
            giobatdau = :giobatdau,
            gioketthuc = :gioketthuc,
            giave = :giave,
            trangthai = :trangthai
        WHERE idlichchieu = :idlichchieu";

$stm = $pdo->prepare($sql);

// Thực hiện cập nhật
$stm->execute([
    "idphim" => $idphim,
    "idphong" => $idphong,
    "ngaychieu" => $ngaychieu,
    "giobatdau" => $giobatdau,
    "gioketthuc" => $gioketthuc,
    "giave" => $giave,
    "trangthai" => $trangthai,
    "idlichchieu" => $idlichchieu
]);

// Cập nhật xong quay về trang chính
header("Location: index.php");
exit();

?>