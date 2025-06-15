<?php
class Database
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "laravelapi";

    public function getConnection()
    {
        $conn = new mysqli($this->host, $this->user, $this->password, $this->db);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}
