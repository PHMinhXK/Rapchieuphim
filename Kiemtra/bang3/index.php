<?php

require_once "database.php";

$sql = "SELECT * FROM lich ORDER BY idlichchieu DESC";

$stm = $pdo->prepare($sql);

$stm->execute();

$data = $stm->fetchAll();

?>

<!DOCTYPE html>
<html lang="vi">

<head>

    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Quản lý lịch chiếu</title>

</head>

<body>

<div class="container">

    <h2 class="mt-3">QUẢN LÝ LỊCH CHIẾU</h2>

    <!-- Nút chuyển sang trang thêm lịch chiếu -->
    <a href="them.php" class="btn btn-primary mb-3">
        Thêm lịch chiếu
    </a>

    <table class="table table-bordered table-striped">

        <tr>

            <th>Mã lịch</th>
            <th>Mã phim</th>
            <th>Mã phòng</th>
            <th>Ngày chiếu</th>
            <th>Giờ bắt đầu</th>
            <th>Giờ kết thúc</th>
            <th>Giá vé</th>
            <th>Trạng thái</th>
            <th>Sửa</th>
            <th>Xóa</th>

        </tr>

        <!-- Duyệt từng lịch chiếu lấy từ database -->
        <?php foreach($data as $lich): ?>

        <tr>

            <td><?= $lich["idlichchieu"] ?></td>

            <td><?= $lich["idphim"] ?></td>

            <td><?= $lich["idphong"] ?></td>

            <td><?= $lich["ngaychieu"] ?></td>

            <td><?= $lich["giobatdau"] ?></td>

            <td><?= $lich["gioketthuc"] ?></td>

            <td><?= $lich["giave"] ?></td>

            <td><?= $lich["trangthai"] ?></td>

            <!-- Nút sửa, truyền mã lịch cần sửa -->
            <td>
                <a href="sua.php?idlichchieu=<?= $lich["idlichchieu"] ?>"
                   class="btn btn-warning">
                    Sửa
                </a>
            </td>

            <!-- Nút xóa, truyền mã lịch cần xóa -->
            <td>
                <a href="xoa.php?idlichchieu=<?= $lich["idlichchieu"] ?>"
                   class="btn btn-danger"
                   onclick="return confirm('Bạn có muốn xóa không?')">
                    Xóa
                </a>
            </td>

        </tr>

        <?php endforeach ?>

    </table>

</div>

</body>
</html>