<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Quản lý phòng chiếu</title>
</head>

<body>

<h2>QUẢN LÝ PHÒNG CHIẾU</h2>

<a href="../../public/index.php?action=create">
    Thêm phòng
</a>

<br><br>

<table border="1" cellpadding="10">

<tr>
    <th>Mã phòng</th>
    <th>Tên phòng</th>
    <th>Số ghế</th>
    <th>Loại phòng</th>
    <th>Trạng thái</th>
    <th>Mô tả</th>
    <th>Chức năng</th>
</tr>

<?php foreach ($rooms as $room): ?>

<tr>

<td>
    <?= $room["id_phim"] ?>
</td>

<td>
    <?= $room["ten_phong"] ?>
</td>

<td>
    <?= $room["so_ghe"] ?>
</td>

<td>
    <?= $room["loai_phong"] ?>
</td>

<td>
    <?= $room["trang_thai"] ?>
</td>

<td>
    <?= $room["mo_ta"] ?>
</td>

<td>

<a href="../../public/index.php?action=edit&id=<?= $room["id_phim"] ?>">
    Sửa
</a>

|

<a
href="../../public/index.php?action=delete&id=<?= $room["id_phim"] ?>"
onclick="return confirm('Bạn có chắc muốn xóa không?')">
    Xóa
</a>

</td>

</tr>

<?php endforeach; ?>

</table>

</body>

</html>