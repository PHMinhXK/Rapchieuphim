<?php
require_once "database.php";

$idphim = $_GET["idphim"] ?? 0;

$sql = "DELETE FROM bangchieu
        WHERE idphim = :idphim";

$stm = $pdo->prepare($sql);

$stm->execute([
    "idphim" => $idphim
]);

header("Location: index.php");
exit();
?>