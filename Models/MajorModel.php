<?php

class MajorModel extends BaseModel {

    const TABLE = "major";

    public function getAllMajor()
    {
        $sql = "SELECT major.id, major.name, department.name AS name_department, major.description FROM major, department WHERE major.id_department = department.id";
        
        return $this->_getAllDataByQuery($sql);
    }

    public function getMajorById($id)
    {
        $sql ="SELECT major.*, department.name AS name_department FROM major, department WHERE major.id_department = department.id AND major.id = ${id}";
        
        return $this->_getRowDataByQuery($sql);
    }
    
    public function addMajor($data)
    {
        return $this->add(self::TABLE, $data);
    }
    
    public function updateMajor($id, $data)
    {
        return $this->update(self::TABLE, $id, $data);
    }

    public function deleteMajor($id)
    {
        return $this->delete(self::TABLE, $id);
    }

    public function countMajor()
    {
        return $this->count(self::TABLE);
    }
}

