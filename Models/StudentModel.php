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
}

