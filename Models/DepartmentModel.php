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

    public function countDepartment()
    {
        return $this->count(self::TABLE);
    }

    public function searchDepartment($name)
    {
        $sql = "SELECT * FROM department
                WHERE name LIKE '%${name}%'";

        $departments = $this->_query($sql);

        while($d = mysqli_fetch_array($departments)){ 
        ?>
            <tr>
                <td data-label="Mã khoa"><?= $d['id'] ?></td>
                <td data-label="Tên khoa"><?= $d['name'] ?></td>
                <td data-label="Mô tả"><?= $d['description'] ?></td>
                <td data-label="Chi tiết" class="right__iconTable">
                    <a href="/ptit-project-php/index.php?controller=department&action=details&id=<?= $d['id'] ?>"><img src="Views/admin/assets/icon-book.svg" alt=""></a>
                </td>
                <td data-label="Sửa" class="right__iconTable">
                    <a href="/ptit-project-php/index.php?controller=department&action=details&id=<?= $d['id'] ?>"><img src="Views/admin/assets/icon-edit.svg" alt=""></a>
                </td>
                <td data-label="Xoá" class="right__iconTable">
                    <a href="/ptit-project-php/index.php?controller=department&action=delete&id=<?= $d['id'] ?>"><img src="Views/admin/assets/icon-trash-black.svg" alt=""></a>
                </td>
            </tr>
            
        <?php
        }
    }
}
?>

