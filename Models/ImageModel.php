<?php

class ImageModel extends BaseModel {

    const TABLE = "image";

    public function getAllImage()
    {
        return $this->getAll(self::TABLE);
    }

    public function getImageById($id)
    {
        return $this->getById(self::TABLE, $id);
    }
    
    public function addImage($data)
    {
        return $this->add(self::TABLE, $data);
    }

    public function updateImage($id, $data)
    {
        return $this->update(self::TABLE, $id, $data);
    }

    public function deleteImage($id)
    {
        return $this->delete(self::TABLE, $id);
    }

    public function updateImageForHome($id)
    {
        $sql = "UPDATE image SET choose = 0 WHERE $id > 0";
        $this->_query($sql);

        $sql = "UPDATE image SET choose = 1 WHERE id = $id";
        $this->_query($sql);
    }
   
    public function getImageForHome()
    {
        $sql = "SELECT * FROM image
                WHERE choose = 1";

        return $this->_getRowDataByQuery($sql);
    }
}
?>

