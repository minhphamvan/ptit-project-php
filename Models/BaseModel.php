<?php

class BaseModel extends Database {

    protected $connect;

    public function __construct()
    {
        $this->connect = $this->connectDatabase();
    }

    public function _query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }

    public function _getAllDataByQuery($sql)
    {
        $query = $this->_query($sql);

        $data = [];
        
        while($row = mysqli_fetch_assoc($query))
        {
            array_push($data, $row);
        }

        return $data;
    }

    public function _getRowDataByQuery($sql)
    {
        $query = $this->_query($sql);

        return mysqli_fetch_assoc($query);
    }

    public function getAll($table)
    {
        $sql = "SELECT * FROM ${table}";

        return $this->_getAllDataByQuery($sql);
    }

    public function getById($table, $id)
    {
        $sql = "SELECT * FROM ${table} WHERE id = ${id} LIMIT 1";
        $query = $this->_query($sql);

        return mysqli_fetch_assoc($query);
    }

    public function add($table, $data)
    {
        $columns  = implode(',', array_keys($data));
        $newValues = array_map(function($values) {
            return "'" . $values . "'";
        }, array_values($data));

        $newValues = implode(',', $newValues);

        $sql = "INSERT INTO ${table}(${columns}) VALUES (${newValues})";
        $this->_query($sql);
    }

    public function update($table, $id, $data)
    {
        $dataSets = [];
        
        foreach($data as $key => $val){
            array_push($dataSets, "${key} = '" . $val . "'" );
        }

        $dataSetString = implode(',', $dataSets);
        
        $sql = "UPDATE ${table} SET ${dataSetString} WHERE id = ${id}";
        $this->_query($sql);
    }

    public function delete($table, $id)
    {
        $sql = "DELETE FROM ${table} WHERE id = ${id}";
        $this->_query($sql);
    }
    
    public function count($table)
    {
        $sql = "SELECT COUNT(*) FROM ${table}";
        $query = $this->_query($sql);

        return mysqli_fetch_array($query)[0];
    }
}