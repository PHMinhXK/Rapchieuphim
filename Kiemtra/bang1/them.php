<?php

require_once "database.php";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $sql = "INSERT INTO bangchieu
            (idphim, tenphim, daodien, theloai, thoiluong, mota)
            VALUES
            (:idphim, :tenphim, :daodien, :theloai, :thoiluong, :mota)";

    $stm = $pdo->prepare($sql);

    $stm->execute([

        // Lấy mã phim từ form
        "idphim" => $_POST["idphim"],

        // Lấy tên phim từ form
        "tenphim" => $_POST["tenphim"],

        // Lấy tên đạo diễn từ form
        "daodien" => $_POST["daodien"],

        // Lấy thể loại phim từ form
        "theloai" => $_POST["theloai"],

        // Lấy thời lượng phim từ form
        "thoiluong" => $_POST["thoiluong"],

        // Lấy mô tả phim từ form
        "mota" => $_POST["mota"]
    ]);

    // Chuyển về trang danh sách phim sau khi thêm thành công
    header("Location: index.php");

    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <title>Thêm Phim</title>
</head>

<body>

    <div class="container mt-4">

        <h2 class="text-center mb-4">THÊM PHIM</h2>

        <!-- Form thêm phim -->
        <form method="POST">

            <!-- Nhập mã phim -->
            <div class="mb-3">
                <label for="idphim" class="form-label">Mã phim</label>
                <input
                    type="number"
                    id="idphim"
                    name="idphim"
                    class="form-control"
                    required
                >
            </div>

            <!-- Nhập tên phim -->
            <div class="mb-3">
                <label for="tenphim" class="form-label">Tên phim</label>
                <input
                    type="text"
                    id="tenphim"
                    name="tenphim"
                    class="form-control"
                    required
                >
            </div>

            <!-- Nhập đạo diễn -->
            <div class="mb-3">
                <label for="daodien" class="form-label">Đạo diễn</label>
                <input
                    type="text"
                    id="daodien"
                    name="daodien"
                    class="form-control"
                    required
                >
            </div>

            <!-- Nhập thể loại phim -->
            <div class="mb-3">
                <label for="theloai" class="form-label">Thể loại</label>
                <input
                    type="text"
                    id="theloai"
                    name="theloai"
                    class="form-control"
                    required
                >
            </div>

            <!-- Nhập thời lượng phim -->
            <div class="mb-3">
                <label for="thoiluong" class="form-label">Thời lượng (phút)</label>
                <input
                    type="number"
                    id="thoiluong"
                    name="thoiluong"
                    class="form-control"
                    required
                >
            </div>

            <!-- Nhập mô tả phim -->
            <div class="mb-3">
                <label for="mota" class="form-label">Mô tả</label>
                <textarea
                    id="mota"
                    name="mota"
                    class="form-control"
                    rows="4"
                ></textarea>
            </div>

            <!-- Các nút chức năng -->
            <div class="mt-3">

                <!-- Nút lưu dữ liệu -->
                <button type="submit" class="btn btn-primary">
                    Lưu phim
                </button>

                <!-- Quay lại trang danh sách -->
                <a href="index.php" class="btn btn-danger">
                    Quay lại
                </a>

            </div>

        </form>

    </div>

</body>

</html>