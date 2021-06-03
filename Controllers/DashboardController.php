<?php

class DashboardController extends BaseController
{

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
}
