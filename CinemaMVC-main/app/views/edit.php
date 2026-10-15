<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Sửa phòng</title>
</head>

<body>

<h2>SỬA PHÒNG CHIẾU</h2>

<form method="POST">

    <p>
        Mã phòng:

        <input
            type="text"
            value="<?= $room["id_phim"] ?>"
            disabled
        >
    </p>

    <p>
        Tên phòng:

        <input
            type="text"
            name="ten_phong"
            value="<?= $room["ten_phong"] ?>"
            required
        >
    </p>

    <p>
        Số ghế:

        <input
            type="number"
            name="so_ghe"
            value="<?= $room["so_ghe"] ?>"
            required
        >
    </p>

    <p>
        Loại phòng:

        <select name="loai_phong">

            <option value="2D">
                2D
            </option>

            <option value="3D">
                3D
            </option>

            <option value="IMAX">
                IMAX
            </option>

        </select>

    </p>

    <p>
        Trạng thái:

        <select name="trang_thai">

            <option value="Hoạt động">
                Hoạt động
            </option>

            <option value="Bảo trì">
                Bảo trì
            </option>

        </select>

    </p>

    <p>
        Mô tả:

        <textarea name="mo_ta"><?= $room["mo_ta"] ?></textarea>
    </p>

    <button type="submit">
        Cập nhật
    </button>

    <a href="../../public/index.php">
        Quay lại
    </a>

</form>

</body>

</html>