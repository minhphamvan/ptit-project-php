<?php

class UserModel extends BaseModel {

    const TABLE = "user";

    public function getAllUser()
    {
        return $this->getAll(self::TABLE);
    }

    public function getAllAdmin()
    {
        $sql ="SELECT * FROM USER WHERE role = 'ADMIN'";

        return $this->_getAllDataByQuery($sql);
    }

    public function getUserById($id)
    {
        return $this->getById(self::TABLE, $id);
    }
    
    public function addUser($data)
    {
        return $this->add(self::TABLE, $data);
    }

    public function updateUser($id, $data)
    {
        return $this->update(self::TABLE, $id, $data);
    }

    public function deleteUser($id)
    {
        return $this->delete(self::TABLE, $id);
    }

    public function countUser()
    {
        return $this->count(self::TABLE);
    }
}

