<?php


class Db
{

    private $conn;

    function __construct()
    {
        $serverName = "localhost";
        $username = "hhz";
        $password = "asdffdsa";
        $dbname = "wad_school";
        $this->conn = new mysqli($serverName, $username, $password, $dbname);
    }

    public function first($sql){
        $query = $this->conn->query($sql);
        $row = $query->fetch_object();
        return $row;
    }

    public function all($sql){
        $query = $this->conn->query($sql);
        $rows = [];
        while($row = $query->fetch_object()){
            $rows[] = $row;
        }
        return $rows;
    }

    function __destruct()
    {

        $this->conn->close();
    }
}
