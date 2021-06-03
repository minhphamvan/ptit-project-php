<?php

class SubjectModel extends BaseModel {

    const TABLE = "subject";

    public function getAllSubject()
    {
        return $this->getAll(self::TABLE);
    }

    public function getSubjectById($id)
    {
        return $this->getById(self::TABLE, $id);
    }
    
    public function addSubject($data)
    {
        return $this->add(self::TABLE, $data);
    }

    public function updateSubject($id, $data)
    {
        return $this->update(self::TABLE, $id, $data);
    }

    public function deleteSubject($id)
    {
        return $this->delete(self::TABLE, $id);
    }

    public function countSubject()
    {
        return $this->count(self::TABLE);
    }
}

