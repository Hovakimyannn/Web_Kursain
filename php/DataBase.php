<?php

class DataBase
{
    protected mysqli_stmt $stmt;
    protected $db;

    public function connect()
    {
        $mysqli = new mysqli('us-cdbr-east-05.cleardb.net', 'b67fe0a625343b', 'f158ca13', 'heroku_d1e343f1c933536');
        if ($mysqli->connect_error) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
        }
        $this->db = $mysqli;
    }

    public function queryLike(string $query, string $reg, array $search)
    {
        $this->stmt = $this->db->prepare($query);
        foreach ($search as $se) {
            $reg .= $se . '%';
        }
        $this->stmt->bind_param('s', $reg);
        $this->stmt->execute();
        $result = $this->stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function close()
    {
        $this->stmt->close();
    }
}