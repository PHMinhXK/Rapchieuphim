<?php

session_start();

require_once "UserModel.php";

class LoginController
{
    public function DangNhap()
    {
        if(isset($_POST["dangnhap"]))
        {
            $username = $_POST["username"];
            $password = $_POST["password"];

            $model = new UserModel();

            $user = $model->DangNhap($username,$password);

            if($user)
            {
                $_SESSION["user"] = $username;

                header("Location: /Kiemtra/bang1/dashboard.php");
                exit();
            }

            echo "Sai tài khoản hoặc mật khẩu";
        }
    }

    public function DangXuat()
    {
        session_destroy();

        header("Location: ../Views/login.php");
        exit();
    }
}
?>