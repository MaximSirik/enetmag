<?php


class db
{

    public function __construct()
    {
        $link = $this->mysqli = new mysqli("mysql.1freehosting.com", "u661937399_1", "jgz822xo1104", "u661937399_1");
        mysqli_set_charset($link, "utf8");
    }

    public function query($sql)
    {

        $args = func_get_args();

        $sql = array_shift($args);
        $link = $this->mysqli;

        $args = array_map(function ($param) use ($link) {
            return "'" . $link->escape_string($param) . "'";
        }, $args);

        $sql = str_replace(array('%', '?'), array('%%', '%s'), $sql);

        array_unshift($args, $sql);

        $sql = call_user_func_array('sprintf', $args);


        $this->last = $this->mysqli->query($sql);
        if ($this->last === false) throw new Exception('Database error: ' . $this->mysqli->error);

        return $this;
    }

    public function assoc()
    {
        return $this->last->fetch_assoc();
    }

    public function all()
    {
        $result = array();
        while ($row = $this->last->fetch_assoc()) $result[] = $row;
        return $result;
    }

    public function lastid()
    {
        return $this->last->mysqli_insert_id();
    }

}