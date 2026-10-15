<?php

require_once "database.php";

// Lấy mã lịch cần xóa từ URL
$idlichchieu = $_GET["idlichchieu"] ?? 0;

$sql = "DELETE FROM lich
        WHERE idlichchieu = :idlichchieu";

$stm = $pdo->prepare($sql);

$stm->execute([
    "idlichchieu" => $idlichchieu
]);

// Xóa xong quay lại trang chính
header("Location: index.php");
exit();

?>