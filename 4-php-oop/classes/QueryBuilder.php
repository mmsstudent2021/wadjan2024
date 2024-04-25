<?php

class QueryBuilder
{
    private $rawSql = "";
    private $table;

    function __construct($table)
    {
        $this->table = $table;
    }

    public function select(mixed $columns = "*")
    {
        $current = is_array($columns) ? implode(",", $columns) : $columns;
        $this->rawSql .= "SELECT " . $current . " FROM " . $this->table;
        return $this;
    }

    public function where($key, $operator, $value)
    {
        $current = strpos($this->rawSql, "WHERE") ? "AND" : "WHERE";
        $this->rawSql .= " $current $key $operator $value";
        return $this;
    }

    public function orderBy($key, $direction = "ASC")
    {
        $current = strpos($this->rawSql, "ORDER BY") ? ", " : "ORDER BY";
        $this->rawSql .= " $current $key $direction";
        return $this;
    }

    public function limit($limit, $offset = 0)
    {
        if (!strpos($this->rawSql, "LIMIT")) {
            $this->rawSql .= " LIMIT $offset,$limit";
        }
        return $this;
    }

    public function sql()
    {
        return $this->rawSql;
    }
}

// select * from students
// select id,name,gender from students
// select * from students where gender = male


// class QueryBuilder
// {

//     public $data;

//     public function a()
//     {
//         $this->data .= "A method work";
//         return $this;
//     }

//     public function b()
//     {
//         $this->data .= "B method work";

//         return $this;
//     }

//     public function c()
//     {
//         $this->data .= "C method work";
//         return $this;
//     }

//     public function getData()
//     {
//         return $this->data;
//     }
// }
