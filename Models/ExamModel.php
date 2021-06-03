<?php

class ExamModel extends BaseModel {

    const TABLE = "exam";

    public function getAllExam()
    {
        $sql = "SELECT student.id AS id_student, student.name AS name_student, COUNT(*) AS count_subject FROM exam, student 
        WHERE exam.id_student = student.id 
        GROUP BY student.id";
        
        return $this->_getAllDataByQuery($sql);
    }

    public function getExamForStudent($id)
    {
        $sql = "SELECT * FROM subject 
        WHERE id NOT IN (SELECT DISTINCT exam.id_subject FROM exam 
        WHERE exam.id_student = $id);";
        
        return $this->_getAllDataByQuery($sql);
    }

    public function getExamByIdStudent($id)
    {
        $sql = "SELECT exam.id, id_subject, name AS name_subject, result 
                FROM exam, subject
                WHERE exam.id_student = ${id} AND exam.id_subject = subject.id";

        return $this->_getAllDataByQuery($sql); 
    }

    public function getExamById($id)
    {
        return $this->getById(self::TABLE ,$id); 
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
}

