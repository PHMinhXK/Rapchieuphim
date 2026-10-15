<?php

require_once __DIR__ . "/../models/Room.php";

class RoomController
{
    private $room;

    public function __construct()
    {
        $this->room = new Room();
    }

    public function index()
    {
        $rooms = $this->room->getAll();

        require_once __DIR__ . "/../views/room/index.php";
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $ten_phong = $_POST["ten_phong"];
            $so_ghe = $_POST["so_ghe"];
            $loai_phong = $_POST["loai_phong"];
            $trang_thai = $_POST["trang_thai"];
            $mo_ta = $_POST["mo_ta"];

            $this->room->insert(
                $ten_phong,
                $so_ghe,
                $loai_phong,
                $trang_thai,
                $mo_ta
            );

            header("Location: index.php");
            exit;
        }

        require_once __DIR__ . "/../views/room/create.php";
    }

    public function edit($id)
    {
        $room = $this->room->getById($id);

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $ten_phong = $_POST["ten_phong"];
            $so_ghe = $_POST["so_ghe"];
            $loai_phong = $_POST["loai_phong"];
            $trang_thai = $_POST["trang_thai"];
            $mo_ta = $_POST["mo_ta"];

            $this->room->update(
                $id,
                $ten_phong,
                $so_ghe,
                $loai_phong,
                $trang_thai,
                $mo_ta
            );

            header("Location: index.php");
            exit;
        }

        require_once __DIR__ . "/../views/room/edit.php";
    }

    public function delete($id)
    {
        $this->room->delete($id);

        header("Location: index.php");
        exit;
    }
}
