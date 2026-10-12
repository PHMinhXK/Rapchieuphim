<?php

require_once "Database.php";

class UserModel
{
    private $pdo;

    public function __construct()
    {
        require_once "Database.php";
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