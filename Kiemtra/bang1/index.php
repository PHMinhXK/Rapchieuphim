<?php
session_start();

if(!isset($_SESSION["user"]))
{
    header("Location: /Kiemtra3/Views/login.php");
    exit();
}

require_once "database.php";

$tukhoa = $_GET["tukhoa"] ?? "";

if($tukhoa != "")
{
    $sql = "SELECT * FROM bangchieu
            WHERE tenphim LIKE :tukhoa
            ORDER BY idphim DESC";

    $stm = $pdo->prepare($sql);

    $stm->execute([
        "tukhoa" => "%$tukhoa%"
    ]);
}
else
{
    $sql = "SELECT * FROM bangchieu
            ORDER BY idphim DESC";

    $stm = $pdo->prepare($sql);

    $stm->execute();
}

$data = $stm->fetchAll();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Quản Lý Rạp Chiếu Phim</title>
    
</head>

<body>

    <div class="container">

        <h2 class="mt-3">QUẢN LÝ RẠP CHIẾU PHIM</h2>

        <div class="mb-3">

        <a href="them.php" class="btn btn-primary">
            Thêm phim
        </a>

        <a href="dashboard.php" class="btn btn-success">
            Xem Dashboard
        </a>

        <a href="/Kiemtra3/Views/logout.php" class="btn btn-danger">
            Đăng xuất
        </a>

    </div>

    <form action="" method="GET" class="mb-3">

        <input type="text"
               name="tukhoa"
               placeholder="Nhập tên phim cần tìm"
               value="<?= $tukhoa ?>">

        <button type="submit" class="btn btn-success">
            Tìm kiếm
        </button>

        <a href="index.php" class="btn btn-secondary">
            Xem tất cả
        </a>

    </form>

    <table class="table table-bordered table-striped">

        <thead>
            <tr>
                <th>Mã phim</th>
                <th>Tên phim</th>
                <th>Đạo diễn</th>
                <th>Thể loại</th>
                <th>Thời lượng</th>
                <th>Mô tả</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>

        <tbody>

        <?php foreach($data as $phim): ?>

            <tr>

                <td><?= $phim["idphim"] ?></td>
                <td><?= $phim["tenphim"] ?></td>
                <td><?= $phim["daodien"] ?></td>
                <td><?= $phim["theloai"] ?></td>
                <td><?= $phim["thoiluong"] ?> phút</td>
                <td><?= $phim["mota"] ?></td>

                <td>
                    <a href="sua.php?idphim=<?= $phim['idphim'] ?>"
                       class="btn btn-warning">
                        Sửa
                    </a>
                </td>

                <td>
                    <a href="xoa.php?idphim=<?= $phim['idphim'] ?>"
                       class="btn btn-danger"
                       onclick="return confirm('Bạn có muốn xóa không?')">
                        Xóa
                    </a>
                </td>

            </tr>

        <?php endforeach ?>

        </tbody>

    </table>

</div>

</body>
</html>