<?php
require_once "database.php";

$idphim = $_GET["idphim"] ?? 0;

$sql = "UPDATE bangchieu
        SET tenphim = :tenphim,
            daodien = :daodien,
            theloai = :theloai,
            thoiluong = :thoiluong,
            mota = :mota
        WHERE idphim = :idphim";

$stm = $pdo->prepare($sql);

$stm->execute([
    "tenphim" => $_POST["tenphim"],
    "daodien" => $_POST["daodien"],
    "theloai" => $_POST["theloai"],
    "thoiluong" => $_POST["thoiluong"],
    "mota" => $_POST["mota"],
    "idphim" => $idphim
]);

header("Location: index.php");
exit();
?>