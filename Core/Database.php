<?php

class Database {
    
    const HOST = 'localhost';
    const USERNAME = 'root';
    const PASSWORD = '';
    const DATABASE_NAME = 'ptit-project-php';

    public function connectDatabase() 
    {
        $connect = mysqli_connect(self::HOST, self::USERNAME, self::PASSWORD, self::DATABASE_NAME);
        mysqli_set_charset($connect, "utf8");
    
        if(mysqli_connect_errno() == 0) {
            return $connect;
        } else {
            return false;
        }
    }
}