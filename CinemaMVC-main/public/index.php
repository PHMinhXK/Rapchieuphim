<?php

require_once __DIR__ . "/../app/controllers/RoomController.php";

$controller = new RoomController();

$action = $_GET["action"] ?? "index";

if ($action == "create")
{
    $controller->create();
}
elseif ($action == "edit")
{
    $id = $_GET["id"];

    $controller->edit($id);
}
elseif ($action == "delete")
{
    $id = $_GET["id"];

    $controller->delete($id);
}
else
{
    $controller->index();
}