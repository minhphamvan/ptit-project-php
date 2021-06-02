<?php

class DepartmentModel extends BaseModel {

    const TABLE = "department";

    public function getAllDepartment()
    {
        return $this->getAll(self::TABLE);
    }

    public function getDepartMentById($id)
    {
        return $this->getById(self::TABLE, $id);
    }
    
    public function addDepartment($data)
    {
        return $this->add(self::TABLE, $data);
    }

    public function updateDepartment($id, $data)
    {
        return $this->update(self::TABLE, $id, $data);
    }

    public function deleteDepartment($id)
    {
        return $this->delete(self::TABLE, $id);
    }
}

