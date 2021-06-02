<?php

class DepartmentController extends BaseController
{
    private $departmentModel;

    public function __construct()
    {
        $this->loadModel('DepartmentModel');

        $this->departmentModel = new DepartmentModel;
    }

    public function index()
    {
        header("Location: /ptit-project-php/index.php?controller=department&action=show");
    }

    public function show()
    {
        $pageTitle = 'Xem tất cả khoa';

        $departments = $this->departmentModel->getAllDepartment();

        return $this->view("admin.show-all-department", 
                            ['pageTitle' => $pageTitle,
                            'departments' => $departments
                            ]);
    }

    public function add()
    {
        $pageTitle = 'Thêm khoa';

        return $this->view("admin.add-department", [
            '$pageTitle' => $pageTitle
        ]);
    }

    public function add_Post()
    {
        $data = [
            'name' => $_POST['name'],
            'description' => $_POST['description']
        ];

        $this->departmentModel->addDepartment($data);

        header("Location: /ptit-project-php/index.php?controller=department&action=show"); // Redirect
    }

    public function details()
    {
        $pageTitle = "Xem chi tiết khoa";

        $id = $_GET['id'];   
        $department = $this->departmentModel->getDepartmentById($id); 

        return $this->view("admin.details-department",[
            'pageTitle' => $pageTitle,
            'department' => $department
        ]);
    }

    public function update()
    {
        $id = $_POST['id'];

        $data = [
            'id' => $_POST['id'],
            'name' => $_POST['name'],
            'description' => $_POST['description']
        ];

        $this->departmentModel->updateDepartment($id, $data);

        header("Location: /ptit-project-php/index.php?controller=department&action=show");
    }

    public function delete()
    {
        $id = $_GET['id'];   
        $this->departmentModel->deleteDepartment($id); 

        header("Location: /ptit-project-php/index.php?controller=department&action=show");
    }

    
}
