<?php

class StudentModel extends BaseModel {

    const TABLE = "student";

    public function getAllStudent()
    {
        $sql = "SELECT student.id, student.code, student.name, 
                student.birthday, student.address,
                student.email, major.name AS name_major 
                FROM student, major 
                WHERE student.id_major = major.id";
        
        return $this->_getAllDataByQuery($sql);
    }

    public function getAllStudentHaveBirthday($birthday)
    {
        $sql = "SELECT student.id, student.code, student.name, 
                student.birthday, student.address,
                student.email, major.name AS name_major 
                FROM student, major 
                WHERE student.id_major = major.id
                AND birthday LIKE '____-${birthday}'";
        
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

    public function getAddress()
    {
        $sql = "SELECT DISTINCT address FROM student";

        return $this->_getAllDataByQuery($sql);
    }

    public function countAddress()
    {
        $sql = "SELECT DISTINCT address FROM student";

        $address = $this->_getAllDataByQuery($sql);

        $data = array();

        foreach($address as $a) {
            $sql = "SELECT COUNT(*) AS count_address
                    FROM student
                    WHERE address = '${a['address']}'";
            $query = $this->_query($sql);

            $count_address = mysqli_fetch_array($query)[0];
            
            array_push($data, $count_address);
        }

        return $data;
    }

    public function export()
    {
        $sql = "SELECT student.id, student.code, student.name, 
                student.birthday, student.address,
                student.email, major.name AS name_major 
                FROM student, major WHERE student.id_major = major.id";
        
        $result = $this->_query($sql);

        $output = '';

        if(mysqli_num_rows($result) > 0)
        {
            $output .= '<table class="table" bordered="1">  
                            <tr>  
                                <th style="border: 1px solid black; text-align: center; font-size: 18px;">Mã sinh viên</th>  
                                <th style="border: 1px solid black; text-align: center; font-size: 18px;">Họ tên</th>
                                <th style="border: 1px solid black; text-align: center; font-size: 18px;">Ngày sinh</th>
                                <th style="border: 1px solid black; text-align: center; font-size: 18px;">Địa chỉ</th>
                                <th style="border: 1px solid black; text-align: center; font-size: 18px;">Email</th>
                                <th style="border: 1px solid black; text-align: center; font-size: 18px;">Thuộc ngành</th> 
                            </tr>';

            while($row = mysqli_fetch_array($result))
            {
                $output .= '<tr>  
                                <td style="border: 1px solid black; text-align: center; font-size: 16px;">'.$row["code"].'</td>
                                <td style="border: 1px solid black; text-align: center; font-size: 16px;">'.$row["name"].'</td> 
                                <td style="border: 1px solid black; text-align: center; font-size: 16px;">'.$row["birthday"].'</td> 
                                <td style="border: 1px solid black; text-align: center; font-size: 16px;">'.$row["address"].'</td> 
                                <td style="border: 1px solid black; text-align: center; font-size: 16px;">'.$row["email"].'</td>
                                <td style="border: 1px solid black; text-align: center; font-size: 16px;">'.$row["name_major"].'</td>  
                            </tr>';
            }

            $output .= '</table>';

            header('Content-type: application/xls');
            header('Content-Disposition: attachment; filename="Danh sách sinh viên.xls"');

            echo chr(255).chr(254).iconv("UTF-8", "UTF-16LE//IGNORE", $output);
        }
    }

    public function searchStudent($student_name)
    {
        $sql = "SELECT student.id, student.code, student.name, 
                student.birthday, student.address,
                student.email, major.name AS name_major 
                FROM student, major 
                WHERE student.id_major = major.id
                AND student.name LIKE '%${student_name}%'";

        $students = $this->_query($sql);

        while($s = mysqli_fetch_array($students)){ 
        ?>
            <tr>
                <td data-label="Mã sinh viên"><?= $s['code'] ?></td>
                <td data-label="Họ tên"><?= $s['name'] ?></td>

                <?php $date = date_create($s['birthday']); ?>
                <td data-label="Ngày sinh"><?= date_format($date,"d/m/Y") ?></td>
                
                <td data-label="Địa chỉ"><?= $s['address'] ?></td>
                <td data-label="Email"><?= $s['email'] ?></td>
                <td data-label="Thuộc ngành"><?= $s['name_major'] ?></td>

                <td data-label="Chi tiết" class="right__iconTable">
                    <a href="/ptit-project-php/index.php?controller=student&action=details&id=<?= $s['id'] ?>"><img src="Views/admin/assets/icon-book.svg" alt=""></a>
                </td>
                <td data-label="Sửa" class="right__iconTable">
                    <a href="/ptit-project-php/index.php?controller=student&action=details&id=<?= $s['id'] ?>"><img src="Views/admin/assets/icon-edit.svg" alt=""></a>
                </td>
                <td data-label="Xoá" class="right__iconTable">
                    <a href="/ptit-project-php/index.php?controller=student&action=delete&id=<?= $s['id'] ?>"><img src="Views/admin/assets/icon-trash-black.svg" alt=""></a>
                </td>
            </tr>
            
        <?php
        }
    }
}
?>
