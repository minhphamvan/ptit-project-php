<?php

session_start();

class DashboardController extends BaseController{

    private $departmentModel;
    private $majorModel;
    private $studentModel;
    private $subjectModel;

    private $userModel;

    private $imageModel;

    public function __construct()
    {
        $this->loadModel('DepartmentModel');
        $this->departmentModel = new DepartmentModel;

        $this->loadModel('MajorModel');
        $this->majorModel = new MajorModel;

        $this->loadModel('StudentModel');
        $this->studentModel = new StudentModel;

        $this->loadModel('SubjectModel');
        $this->subjectModel = new SubjectModel;

        $this->loadModel('UserModel');
        $this->userModel = new UserModel;

        $this->loadModel('ImageModel');
        $this->imageModel = new ImageModel;

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
        header("Location: /ptit-project-php/index.php?controller=dashboard&action=show");
    }

    public function show()
    {
        $pageTitle = "Trang quản trị";

        $numberDepartment = $this->departmentModel->countDepartment();
        $numberMajor = $this->majorModel->countMajor();
        $numberStudent = $this->studentModel->countStudent();
        $numberSubject = $this->subjectModel->countSubject();

        $users = $this->userModel->getAllAdmin();

        return $this->view("admin.dashboard", [
                            'pageTitle' => $pageTitle,
                            'numberDepartment' => $numberDepartment,
                            'numberMajor' => $numberMajor,
                            'numberStudent' => $numberStudent,
                            'numberSubject' => $numberSubject,
                            'users' => $users
                            ]);
    }

    public function chart()
    {
        $pageTitle = "Biểu đồ";

        $address = $this->studentModel->getAddress();
        $count_address = $this->studentModel->countAddress();

        return $this->view("admin.chart", [
                            'pageTitle' => $pageTitle,
                            'address' => $address,
                            'count_address' => $count_address
                            ]);
    }

    public function addImage()
    {
        $pageTitle = "Thêm ảnh";

        return $this->view("admin.add-image", [
                            'pageTitle' => $pageTitle
                            ]);
    }

    public function addImage_Post()
    {
        $temp = explode(".", $_FILES["image_file"]["name"]);
        $image_name = round(microtime(true)) . '.' . end($temp);

        $path = './Views/client/images/image-for-home/' . $image_name;

        $check  = move_uploaded_file($_FILES['image_file']['tmp_name'], $path);

        if($check == true){
            $data = ['name' => $image_name,
                        'path' => $path,
                        'choose' => false
                    ];

            $this->imageModel->addImage($data);

            $message = "Upload ảnh thành công !";

            echo '<script>
                alert("' . $message . '")
                window.location.href="/ptit-project-php/index.php?controller=dashboard&action=showAllImage";
            </script> ';
        }                
    }

    public function deleteImage()
    {
        $id = $_GET['id'];   
        $this->imageModel->deleteImage($id); 

        $message = "Xóa thành công !";

        echo '<script>
                alert("' . $message . '")
                window.location.href="/ptit-project-php/index.php?controller=dashboard&action=showAllImage";
            </script> ';
    }

    public function showAllImage()
    {
        $pageTitle = "Xem tất cả ảnh";

        $images = $this->imageModel->getAllImage();

        return $this->view("admin.show-all-image", [
                            'pageTitle' => $pageTitle,
                            'images' => $images
                            ]);
    }

    public function updateImageForHome()
    {
        $id_image = $_GET['id'];

        $this->imageModel->updateImageForHome($id_image);

        $message = "Cập nhật thành công !";

        echo '<script>
                alert("' . $message . '")
                window.location.href="/ptit-project-php/index.php?controller=dashboard&action=showAllImage";
            </script> ';
    }
                                    
}
?>