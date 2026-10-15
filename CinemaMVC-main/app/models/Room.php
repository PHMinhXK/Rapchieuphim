<?php

require_once __DIR__ . "/../../config/database.php";

class Room
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM tblRoom";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM tblRoom WHERE id_phim = :id";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insert(
        $ten_phong,
        $so_ghe,
        $loai_phong,
        $trang_thai,
        $mo_ta
    )
    {
        $sql = "INSERT INTO tblRoom
                (
                    ten_phong,
                    so_ghe,
                    loai_phong,
                    trang_thai,
                    mo_ta
                )
                VALUES
                (
                    :ten_phong,
                    :so_ghe,
                    :loai_phong,
                    :trang_thai,
                    :mo_ta
                )";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(":ten_phong", $ten_phong);
        $stmt->bindParam(":so_ghe", $so_ghe);
        $stmt->bindParam(":loai_phong", $loai_phong);
        $stmt->bindParam(":trang_thai", $trang_thai);
        $stmt->bindParam(":mo_ta", $mo_ta);

        return $stmt->execute();
    }

    public function update(
        $id,
        $ten_phong,
        $so_ghe,
        $loai_phong,
        $trang_thai,
        $mo_ta
    )
    {
        $sql = "UPDATE tblRoom SET
                ten_phong = :ten_phong,
                so_ghe = :so_ghe,
                loai_phong = :loai_phong,
                trang_thai = :trang_thai,
                mo_ta = :mo_ta
                WHERE id_phim = :id";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":ten_phong", $ten_phong);
        $stmt->bindParam(":so_ghe", $so_ghe);
        $stmt->bindParam(":loai_phong", $loai_phong);
        $stmt->bindParam(":trang_thai", $trang_thai);
        $stmt->bindParam(":mo_ta", $mo_ta);

        return $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM tblRoom WHERE id_phim = :id";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $id);

        return $stmt->execute();
    }
}