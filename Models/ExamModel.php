<?php

class ExamModel extends BaseModel {

    const TABLE = "exam";

    public function getAllExam()
    {
        $sql = "SELECT id_student, student.code AS code_student, student.name AS name_student, COUNT(*) AS count_subject FROM exam, student 
        WHERE exam.id_student = student.id 
        GROUP BY student.id";
        
        return $this->_getAllDataByQuery($sql);
    }

    public function getExamByIdStudent($id)
    {
        $sql = "SELECT exam.id, id_subject, name AS name_subject, result 
                FROM exam, subject
                WHERE exam.id_student = ${id} AND exam.id_subject = subject.id";

        return $this->_getAllDataByQuery($sql); 
    }

    public function getStudentForAddExam()
    {
        $sql = "SELECT DiSTINCT student.* FROM student, exam
                WHERE student.id NOT IN
                (SELECT DISTINCT id_student FROM exam)";

        return $this->_getAllDataByQuery($sql); 
    }

    public function getExamById($id)
    {
        return $this->getById(self::TABLE ,$id); 
    }

    public function getSubjectForStudent($id_student)
    {
        $sql = "SELECT * FROM subject 
        WHERE id NOT IN (SELECT DISTINCT exam.id_subject FROM exam 
        WHERE exam.id_student = ${id_student});";
        
        return $this->_getAllDataByQuery($sql);
    }
    
    public function addExam($data)
    {
        return $this->add(self::TABLE, $data);
    }

    public function updateExam($id, $data)
    {
        return $this->update(self::TABLE, $id, $data);
    }

    public function deleteExam($id)
    {
        return $this->delete(self::TABLE, $id);
    }

    public function export()
    {
        $sql = "SELECT student.id AS id_student, student.code AS code_student, student.name AS name_student, COUNT(*) AS count_subject FROM exam, student 
        WHERE exam.id_student = student.id 
        GROUP BY student.id";
        
        $result = $this->_query($sql);

        $output = '';

        if(mysqli_num_rows($result) > 0)
        {
            $output .= '<table class="table" bordered="1">  
                            <tr>  
                                <th style="border: 1px solid black; text-align: center; font-size: 18px;">Mã sinh viên</th>  
                                <th style="border: 1px solid black; text-align: center; font-size: 18px;">Họ tên</th>  
                                <th style="border: 1px solid black; text-align: center; font-size: 18px;">Số môn đang học</th>  
                            </tr>';

            while($row = mysqli_fetch_array($result))
            {
                $output .= '<tr>  
                                <td style="border: 1px solid black; text-align: center; font-size: 16px;">'.$row["code_student"].'</td>  
                                <td style="border: 1px solid black; text-align: center; font-size: 16px;">'.$row["name_student"].'</td>  
                                <td style="border: 1px solid black; text-align: center; font-size: 16px;">'.$row["count_subject"].'</td>  
                            </tr>';
            }

            $output .= '</table>';

            header('Content-type: application/xls');
            header('Content-Disposition: attachment; filename="Thống kê.xls"');

            echo chr(255).chr(254).iconv("UTF-8", "UTF-16LE//IGNORE", $output);
        }
    }
}

