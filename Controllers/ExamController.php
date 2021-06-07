<?php

session_start();

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

        if(isset($_SESSION["userLogin"]) == false){
            header("Location: /ptit-project-php/index.php?controller=client&action=login");
        }
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

    public function export()
    {
        $this->examModel->export();
    }

    public function add()
    {
        $pageTitle = 'Thêm điểm';

        $students = $this->examModel->getStudentForAddExam();
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

        header("Location: /ptit-project-php/index.php?controller=exam&action=show");
    }

    public function addExamForStudent()
    {
        $id_student = $_GET['id_student'];

        $student = $this->studentModel->getStudentById($id_student);
        $subjects = $this->examModel->getSubjectForStudent($id_student);

        $pageTitle = 'Thêm điểm thi';

        return $this->view("admin.add-exam-for-student", [
            'pageTitle' => $pageTitle,
            'student' => $student,
            'subjects' => $subjects
        ]);
    }

    public function showAllExamOfStudent()
    {
        $pageTitle = "Xem chi tiết thống kê";

        $id_student = $_GET['id_student'];
        
        $student = $this->studentModel->getStudentById($id_student);
        $exams = $this->examModel->getExamByIdStudent($id_student); 

        return $this->view("admin.show-all-exam-of-student",[
            'pageTitle' => $pageTitle,
            'exams' => $exams,
            'student' => $student
        ]);
    }

    public function details()
    {
        $pageTitle = "Xem chi tiết điểm";

        $id = $_GET['id'];
        
        $subjects = $this->subjectModel->getAllSubject();

        $exam = $this->examModel->getExamById($id);
        $student = $this->studentModel->getStudentById($exam['id_student']);
        $subject = $this->subjectModel->getSubjectById($exam['id_subject']);

        return $this->view("admin.details-exam",[
            'pageTitle' => $pageTitle,
            'exam' => $exam,
            'subject' => $subject,
            'student' => $student
        ]);
    }

    public function update()
    {
        $id = $_POST['id'];
        $id_student = $_POST['id_student'];

        $data = [
            'id_student' => $_POST['id_student'],
            'id_subject' => $_POST['id_subject'],
            'result' => $_POST['result']
        ];

        $this->examModel->updateExam($id, $data);

        header("Location: /ptit-project-php/index.php?controller=exam&action=showAllExamOfStudent&id_student=${id_student}");
    }

    public function delete()
    {
        $id = $_GET['id'];   
        $this->examModel->deleteExam($id);

        header("Location: /ptit-project-php/index.php?controller=exam&action=show");
    }

    
}
