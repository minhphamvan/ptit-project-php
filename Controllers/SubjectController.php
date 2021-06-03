<?php

class SubjectController extends BaseController
{
    private $subjectModel;

    public function __construct()
    {
        $this->loadModel('SubjectModel');
        $this->subjectModel = new SubjectModel;
    }

    public function index()
    {
        header("Location: /ptit-project-php/index.php?controller=subject&action=show");
    }

    public function show()
    {
        $pageTitle = 'Xem tất cả môn học';

        $subjects = $this->subjectModel->getAllSubject();

        return $this->view("admin.show-all-subject", 
                            ['pageTitle' => $pageTitle,
                            'subjects' => $subjects
                            ]);
    }

    public function add()
    {
        $pageTitle = 'Thêm môn học';

        return $this->view("admin.add-subject", [
            'pageTitle' => $pageTitle
        ]);
    }

    public function add_Post()
    {
        $data = [
            'id' => $_POST['id'],
            'name' => $_POST['name'],
            'number' => $_POST['number']
        ];

        $this->subjectModel->addSubject($data);

        header("Location: /ptit-project-php/index.php?controller=subject&action=show"); // Redirect
    }

    public function details()
    {
        $pageTitle = "Xem chi tiết môn học";

        $id = $_GET['id'];   
        $subject = $this->subjectModel->getSubjectById($id); 

        return $this->view("admin.details-subject",[
            'pageTitle' => $pageTitle,
            'subject' => $subject
        ]);
    }

    public function update()
    {
        $id = $_POST['id'];

        $data = [
            'id' => $_POST['id'],
            'name' => $_POST['name'],
            'number' => $_POST['number']
        ];

        $this->subjectModel->updateSubject($id, $data);

        header("Location: /ptit-project-php/index.php?controller=subject&action=show");
    }

    public function delete()
    {
        $id = $_GET['id'];   
        $this->subjectModel->deleteSubject($id); 

        header("Location: /ptit-project-php/index.php?controller=subject&action=show");
    }

    
}
