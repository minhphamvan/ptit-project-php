<?php

session_start();

class DashboardController extends BaseController{

    private $departmentModel;
    private $majorModel;
    private $studentModel;
    private $subjectModel;

    private $userModel;

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

        if(isset($_SESSION["userLogin"]) == false){
            header("Location: /ptit-project-php/index.php?controller=client&action=login");
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

}
