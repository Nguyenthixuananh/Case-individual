<?php

include_once "Model/UserModel.php";
include_once "User.php";

class AuthController
{
    protected $userModel;
//    protected $user;

    public function __construct()
    {
        $this->userModel = new UserModel();
//        $this->user = new User();
    }

    public function showFormLogin()
    {
        include_once "View/auth/login.php";
    }

    public function login($request)
    {
        $email = $request["email"];
        $password = $request["password"];
        if ($this->userModel->checkLogin($email, $password)) {
            $user = $this->userModel->getByEmail($email);
            $_SESSION["username"] = $user["name"];
            header("location:index.php");
        } else {
//            var_dump("Tài khoản không đúng");
            echo "Tài khoản không đúng";
        }
    }

    public function logout()
    {
        session_destroy();
        header("location:index.php?page=login");
    }

    public function checkAuth()
    {
        if (isset($_SESSION["username"])) {
            header("location:index.php?page=login");
        }
    }

    public function showFormCreate()
    {
        // lay het types
        $users = $this->userModel->getAll();
        include_once "View/auth/register.php";
    }

    public function create($data)
    {
        $data2 = [
            "name" =>$data['name'],
            "email" => $data['email'],
            "password" => $data['password']

        ];
//        $this->checkRegister();
        $this->userModel->add($data2);
        header("location:index.php?page=login");
    }

    public function checkRegister($err)
    {
        $err = [];
        if (empty($this->user->getName())) {
            $err['name']= "Bạn chưa nhập tên";
        }
        if (empty($this->user->getEmail())) {
            $err['name']= "Bạn chưa nhập email";
        }
        if (empty($this->user->getPassword())) {
            $err['name']= "Bạn chưa nhập mật khẩu";
        }
    }
}