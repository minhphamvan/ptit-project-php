<?php

class  StudentController extends BaseController
{
    private $studentModel;
    private $majorModel;

    public function __construct()
    {
        $this->loadModel('StudentModel');
        $this->studentModel = new StudentModel;

        $this->loadModel('MajorModel');
        $this->majorModel = new MajorModel;
    }

    public function index()
    {
        header("Location: /ptit-project-php/index.php?controller=student&action=show");
    }

    public function show()
    {
        $pageTitle = 'Xem tất cả sinh viên';

        $students = $this->studentModel->getAllStudent();

        return $this->view("admin.show-all-student", 
                            ['pageTitle' => $pageTitle,
                            'students' => $students
                            ]);
    }

    public function haveBirthday()
    {
        $pageTitle = 'Sinh nhật hôm nay';

        $today = date("m-d");

        $students = $this->studentModel->getAllStudentHaveBirthday($today);

        return $this->view("admin.show-all-student-have-birthday", 
                            ['pageTitle' => $pageTitle,
                            'students' => $students
                            ]);
    }

    public function export()
    {  
        $this->studentModel->export(); 
    }

    public function add()
    {
        $pageTitle = 'Thêm sinh viên';

        $majors = $this->majorModel->getAllMajor();

        return $this->view("admin.add-student", [
            'pageTitle' => $pageTitle,
            'majors' => $majors
        ]);
    }

    public function add_Post()
    {
        $data = [
            'code' => $_POST['code'],
            'name' => $_POST['name'],
            'birthday' => $_POST['birthday'],
            'address' => $_POST['address'],
            'email' => $_POST['email'],
            'id_major' => $_POST['id_major'],
        ];

        $this->studentModel->addStudent($data);

        header("Location: /ptit-project-php/index.php?controller=student&action=show"); // Redirect
    }

    public function details()
    {
        $pageTitle = "Xem chi tiết sinh viên";

        $id = $_GET['id'];   
        $student = $this->studentModel->getStudentById($id); 

        $majors = $this->majorModel->getAllMajor();

        return $this->view("admin.details-student",[
            'pageTitle' => $pageTitle,
            'student' => $student,
            'majors' => $majors
        ]);
    }

    public function update()
    {
        $id = $_POST['id'];

        $data = [
            'code' => $_POST['code'],
            'name' => $_POST['name'],
            'birthday' => $_POST['birthday'],
            'address' => $_POST['address'],
            'email' => $_POST['email'],
            'id_major' => $_POST['id_major'],
        ];

        $this->studentModel->updateStudent($id, $data);

        header("Location: /ptit-project-php/index.php?controller=student&action=show");
    }

    public function delete()
    {
        $id = $_GET['id'];   
        $this->studentModel->deleteStudent($id); 

        header("Location: /ptit-project-php/index.php?controller=student&action=show");
    }
}
