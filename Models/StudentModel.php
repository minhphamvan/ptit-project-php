<?php

class StudentModel extends BaseModel {

    const TABLE = "student";

    public function getAllStudent()
    {
        $sql = "SELECT student.id, student.code, student.name, student.birthday, student.address,
        student.email, major.name AS name_major FROM student, major WHERE student.id_major = major.id";
        
        return $this->_getAllDataByQuery($sql);
    }

    public function getStudentById($id)
    {
        return $this->getById(self::TABLE, $id);
    }
    
    public function addStudent($data)
    {
        return $this->add(self::TABLE, $data);
    }

    public function updateStudent($id, $data)
    {
        return $this->update(self::TABLE, $id, $data);
    }

    public function deleteStudent($id)
    {
        return $this->delete(self::TABLE, $id);
    }

    public function countStudent()
    {
        return $this->count(self::TABLE);
    }
}

