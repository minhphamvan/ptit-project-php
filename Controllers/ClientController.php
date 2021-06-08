<?php

session_start();

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
        $pageTitle = "PTIT - Trang chủ";

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
        $pageTitle = "PTIT - Đăng kí";

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

        $message = "Đăng kí thành công !";

        echo '<script>
                alert("' . $message . '")
                window.location.href="/ptit-project-php/index.php?controller=client&action=login";
            </script> ';
    }

    public function login()
    {
        if(isset($_SESSION["userLogin"])){
            $userLogin = $_SESSION["userLogin"];

            if($userLogin['role'] == 'ADMIN'){
                header("Location: /ptit-project-php/index.php?controller=dashboard");
            }
            else if ($userLogin['role'] == 'USER') {
                header("Location: /ptit-project-php/index.php?controller=client&action=home");
            }
        } else{
            $pageTitle = "PTIT - Đăng nhập";

            return $this->view("client.login", [
                                'pageTitle' => $pageTitle
                                ]);
        }
    }

    public function login_Post()
    {
        if(isset($_POST['username']) && isset($_POST['password'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $userLogin = $this->userModel->getUserLogin($username, $password);

            if($userLogin == null){
                $message = "Sai tên đăng nhập, mật khẩu !";

                echo '<script>
                    alert("' . $message . '")
                    window.location.href="/ptit-project-php/index.php?controller=client&action=login";
                </script> ';
            }else{
                $_SESSION["userLogin"] = $userLogin;

                if($userLogin['role'] == 'ADMIN'){
                    header("Location: /ptit-project-php/index.php?controller=dashboard");
                }
                else if ($userLogin['role'] == 'USER') {
                    header("Location: /ptit-project-php/index.php?controller=client&action=home");
                }
            }
        }
    }

    public function logout()
    {
        session_unset();

        header("Location: /ptit-project-php/index.php?controller=client&action=login");
    }

    public function forgotPassword()
    {
        $pageTitle = "PTIT - Quên mật khẩu";

        return $this->view("client.forgot-password", [
                            'pageTitle' => $pageTitle
                            ]);
    }

    public function forgotPassword_Post()
    {
        $username = $_POST['username'];
        $email = $_POST['email'];

        $check = $this->userModel->checkUser($username, $email);

        if($check == null){
            $message = "Tên tài khoản, email không tồn tại !";

            echo '<script>
                    alert("' . $message . '")
                    window.location.href="/ptit-project-php/index.php?controller=client&action=forgotPassword";
            </script> ';
        } else {
            $password = $username . date("His");
            $this->userModel->resetPassword($username, $password, $email);

            // Gửi email
            $to_email = $email;
            $subject = 'PTIT - Lấy lại mật khẩu';
            $message = 'Mật khẩu mới của ' . $username . ' là: ' . $password;
            $headers = 'From: ptit-university@ptit.edu.vn';
            mail($to_email, $subject, $message, $headers);

            $success = "Đã gửi mật khẩu qua mail !";

            echo '<script>
                    alert("' . $success . '")
                    window.location.href="/ptit-project-php/index.php?controller=client&action=login";
            </script> ';
        }
    }
}