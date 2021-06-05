<?php

class ClientController extends BaseController
{
    private $userModel;

    private $departmentModel;
    private $majorModel;
    private $studentModel;

    public function __construct()
    {
        $this->loadModel('UserModel');
        $this->userModel = new UserModel;

        $this->loadModel('DepartmentModel');
        $this->departmentModel = new DepartmentModel;

        $this->loadModel('MajorModel');
        $this->majorModel = new MajorModel;

        $this->loadModel('StudentModel');
        $this->studentModel = new StudentModel;
    }

    public function index()
    {
        header("Location: /ptit-project-php/index.php?controller=client&action=home");
    }

    public function home()
    {
        $pageTitle = "Trang chủ";

        $numberDepartment = $this->departmentModel->countDepartment();
        $numberMajor = $this->majorModel->countMajor();
        $numberStudent = $this->studentModel->countStudent();

        return $this->view("client.home", [
                            'pageTitle' => $pageTitle,
                            'numberDepartment' => $numberDepartment,
                            'numberMajor' => $numberMajor,
                            'numberStudent' => $numberStudent
                            ]);
    }

    public function register()
    {
        $pageTitle = "Đăng kí";

        return $this->view("client.register", [
                            'pageTitle' => $pageTitle
                            ]);
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
        $pageTitle = "Đăng nhập";

        return $this->view("client.login", [
                            'pageTitle' => $pageTitle
                            ]);
    }

    public function login_Post()
    {
        return $this->view("client.login");
    }

    public function forgotPassword()
    {
        $pageTitle = "Quên mật khẩu";

        return $this->view("client.forgot-password", [
                            'pageTitle' => $pageTitle
                            ]);
    }

    public function forgotPassword_Post()
    {
        $username = $_POST['username'];
        $email = $_POST['email'];

        $password = $username . date("His");

        $this->userModel->resetPassword($username, $password, $email);

        // Gửi email
        $to_email = $email;
        $subject = 'PTIT - Lấy lại mật khẩu';
        $message = 'Mật khẩu mới của ' . $username . ' là: ' . $password;
        $headers = 'From: ptit-university@ptit.edu.vn';
        mail($to_email, $subject, $message, $headers);

        header("Location: /ptit-project-php/index.php?controller=client&action=login");
    }
}