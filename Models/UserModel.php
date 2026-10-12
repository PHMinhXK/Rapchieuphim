<?php

require_once __DIR__ . "/Database.php";

class UserModel
{
    private $pdo;

    public function __construct()
    {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function DangNhap($username, $password)
    {
        $sql = "SELECT * FROM users
                WHERE username = :username
                AND password = :password";

        $stm = $this->pdo->prepare($sql);

        $stm->execute([
            ":username" => $username,
            ":password" => $password
        ]);

        return $stm->fetch(PDO::FETCH_ASSOC);
    }
}

?>