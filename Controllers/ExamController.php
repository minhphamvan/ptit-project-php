<?php

class  ExamController extends BaseController
{
    private $examModel;
    private $majorModel;
    private $studenttModel;
    private $subjectModel;
    

    public function __construct()
    {
        $this->loadModel('ExamModel');
        $this->examModel = new ExamModel;

        $this->loadModel('MajorModel');
        $this->majorModel = new MajorModel;

        $this->loadModel('StudentModel');
        $this->studentModel = new StudentModel;

        $this->loadModel('SubjectModel');
        $this->subjectModel = new SubjectModel;
    }

    public function index()
    {
        header("Location: /ptit-project-php/index.php?controller=exam&action=show");
    }

    public function show()
    {
        $pageTitle = 'Xem thống kê';

        $exams = $this->examModel->getAllExam();

        return $this->view("admin.show-all-exam", 
                            ['pageTitle' => $pageTitle,
                            'exams' => $exams
                            ]);
    }

    public function add()
    {
        $pageTitle = 'Thêm sinh viên';

        $students = $this->studentModel->getAllStudent();
        $subjects = $this->subjectModel->getAllSubject();

        return $this->view("admin.add-exam", [
            'pageTitle' => $pageTitle,
            'students' => $students,
            'subjects' => $subjects
        ]);
    }

    public function add_Post()
    {
        $data = [
            'id_student' => $_POST['id_student'],
            'id_subject' => $_POST['id_subject'],
            'result' => $_POST['result'],
        ];

        $this->examModel->addExam($data);

        header("Location: /ptit-project-php/index.php?controller=exam&action=show"); // Redirect
    }

    public function showAllExamOfStudent()
    {
        $pageTitle = "Xem chi tiết thống kê";

        $id = $_GET['id'];
        
        $student = $this->studentModel->getStudentById($id);
        $exams = $this->examModel->getExamByIdStudent($id); 

        return $this->view("admin.show-all-exam-of-student",[
            'pageTitle' => $pageTitle,
            'exams' => $exams,
            'student' => $student
        ]);
    }

    public function details()
    {
        $pageTitle = "Xem chi tiết thống kê";

        $id = $_GET['id'];
        
        $students = $this->studentModel->getAllStudent();
        $subjects = $this->subjectModel->getAllSubject();

        $exam = $this->examModel->getExamById($id);

        return $this->view("admin.details-exam",[
            'pageTitle' => $pageTitle,
            'exam' => $exam,
            'students' => $students,
            'subjects' => $subjects
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
        $this->examModel->deleteExam($id); 

        header("Location: /ptit-project-php/index.php?controller=exam&action=show");
    }

    
}
