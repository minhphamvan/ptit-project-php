<?php

session_start();

class UserController extends BaseController
{
    private $userModel;

    public function __construct()
    {
        $this->loadModel('UserModel');
        $this->userModel = new UserModel;

        if(isset($_SESSION["userLogin"]) == false){
            header("Location: /ptit-project-php/index.php?controller=client&action=login");
        } else {
            $userLogin =$_SESSION["userLogin"];

            if($userLogin['role'] == "USER"){
                header("Location: /ptit-project-php/index.php?controller=client");
            }
        }
    }

    public function index()
    {
        header("Location: /ptit-project-php/index.php?controller=user&action=show");
    }

    public function show()
    {
        $pageTitle = 'Xem tất cả người dùng';

        $users = $this->userModel->getAllUser();

        return $this->view("admin.show-all-user", 
                            ['pageTitle' => $pageTitle,
                            'users' => $users
                            ]);
    }

    public function add()
    {
        $pageTitle = 'Thêm người dùng';

        return $this->view("admin.add-user", [
            'pageTitle' => $pageTitle
        ]);
    }

    public function add_Post()
    {
        $data = [
            'name' => $_POST['name'],
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'email' => $_POST['email'],
            'role' => $_POST['role']
        ];

        $this->userModel->addUser($data);

        $message = "Thêm thành công !";

        echo '<script>
                alert("' . $message . '")
                window.location.href="/ptit-project-php/index.php?controller=user&action=show";
            </script> ';
    }

    public function details()
    {
        $pageTitle = "Xem chi tiết người dùng";

        $id = $_GET['id'];   
        $user = $this->userModel->getUserById($id); 

        return $this->view("admin.details-user",[
            'pageTitle' => $pageTitle,
            'user' => $user
        ]);
    }

    public function update()
    {
        $id = $_POST['id'];

        $data = [
            'name' => $_POST['name'],
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'email' => $_POST['email'],
            'role' => $_POST['role']
        ];

        $this->userModel->updateUser($id, $data);

        $message = "Sửa thành công !";

        echo '<script>
                alert("' . $message . '")
                window.location.href="/ptit-project-php/index.php?controller=user&action=show";
            </script> ';
    }

    public function delete()
    {
        $id = $_GET['id'];   
        $this->userModel->deleteUser($id); 

        $message = "Xóa thành công !";

        echo '<script>
                alert("' . $message . '")
                window.location.href="/ptit-project-php/index.php?controller=user&action=show";
            </script> ';
    }
}
