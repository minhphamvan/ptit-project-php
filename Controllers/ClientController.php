<?php

class ClientController extends BaseController
{
    private $userModel;

    public function __construct()
    {
        $this->loadModel('UserModel');
        $this->userModel = new UserModel;
    }

    public function index()
    {
        return $this->view("client.index");
    }

    public function register()
    {
        return $this->view("client.register");
    }

    public function register_Post()
    {
        $role = 'USER';

        $data = [
            'name' => $_POST['name'],
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'email' => $_POST['email'],
            'role' => $role
        ];

        $this->userModel->addUser($data);

        header("Location: /ptit-project-php/index.php?controller=client&action=login");
    }

    public function login()
    {
        return $this->view("client.login");
    }

    public function login_Post()
    {
        return $this->view("client.login");
    }

    public function forgotPassword()
    {
        return $this->view("client.forgot-password");
    }

    public function forgotPassword_Post()
    {
        header("Location: /ptit-project-php/index.php?controller=client&action=login");
    }
}