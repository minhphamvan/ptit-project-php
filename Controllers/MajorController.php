<?php

class  MajorController extends BaseController
{
    private $majorModel;
    private $departmentModel;

    public function __construct()
    {
        $this->loadModel('MajorModel');
        $this->majorModel = new MajorModel;

        $this->loadModel('DepartmentModel');
        $this->departmentModel = new DepartmentModel;
    }

    public function index()
    {
        header("Location: /ptit-project-php/index.php?controller=major&action=show");
    }

    public function show()
    {
        $departments = $this->departmentModel->getAllDepartment();

        $pageTitle = 'Xem tất cả ngành';

        $majors = $this->majorModel->getAllMajor();

        return $this->view("admin.show-all-major", 
                            ['pageTitle' => $pageTitle,
                            'majors' => $majors,
                            'departments' => $departments
                            ]);
    }

    public function add()
    {
        $pageTitle = 'Thêm ngành';

        $departments = $this->departmentModel->getAllDepartment();

        return $this->view("admin.add-major", [
            'pageTitle' => $pageTitle,
            'departments' => $departments
        ]);
    }

    public function add_Post()
    {
        $data = [
            'name' => $_POST['name'],
            'id_department' => $_POST['id_department'],
            'description' => $_POST['description']
        ];

        $this->majorModel->addMajor($data);

        header("Location: /ptit-project-php/index.php?controller=major&action=show"); // Redirect
    }

    public function details()
    {
        $pageTitle = "Xem chi tiết ngành";

        $id = $_GET['id'];   
        $major = $this->majorModel->getMajorById($id); 

        $departments = $this->departmentModel->getAllDepartment();

        return $this->view("admin.details-major",[
            'pageTitle' => $pageTitle,
            'major' => $major,
            'departments' => $departments
        ]);
    }

    public function update()
    {
        $id = $_POST['id'];

        $data = [
            'id' => $_POST['id'],
            'name' => $_POST['name'],
            'id_department' => $_POST['id_department'],
            'description' => $_POST['description']
        ];

        $this->majorModel->updateMajor($id, $data);

        header("Location: /ptit-project-php/index.php?controller=major&action=show");
    }

    public function delete()
    {
        $id = $_GET['id'];   
        $this->majorModel->deleteMajor($id); 

        header("Location: /ptit-project-php/index.php?controller=major&action=show");
    }

    
}
