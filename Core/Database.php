<?php

class Database {

    const HOST = 'localhost';
    const USERNAME = 'root';
    const PASSWORD = '';
    const DB_NAME = 'ptit-project-php';

    public function connectDatabase(){
        $connect = mysqli_connect(self::HOST, self::USERNAME, self::PASSWORD, self::DB_NAME);

        mysqli_set_charset($connect, "utf8");
    
        if(mysqli_connect_errno() == 0) {
            return $connect;
        } else {
            return false;
        }
    }
}