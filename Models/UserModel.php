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

    public function getUserLogin($username, $password)
    {
        $sql = "SELECT * FROM user 
                WHERE username = '${username}' AND password = '${password}'";

        $result = $this->_getRowDataByQuery($sql);

        return $result;
    }

    public function checkUser($username, $email)
    {
        $sql = "SELECT * FROM user 
                WHERE username = '${username}' AND email = '${email}'";

        $result = $this->_getRowDataByQuery($sql);

        return $result;
    }

    public function resetPassword($username, $password, $email)
    {
        $sql = "UPDATE user SET password = '${password}' 
                WHERE id = 
                (SELECT id FROM user WHERE username = '${username}')
                AND email = '${email}'";

        return $this->_query($sql);
    }
}

