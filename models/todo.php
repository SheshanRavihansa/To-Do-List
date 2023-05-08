<?php

require 'core/db.php';

class todomodel
{
    private $db;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function getAllTask()
    {
        $sql = "SELECT * FROM todo";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;                                 //return table names as array index id

    }

    public function getTask($id)
    {
        $sql = "SELECT * FROM todo WHERE id = $id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $task = $stmt->fetch(PDO::FETCH_ASSOC);
        return $task;
    }

    public function saveTask($task)
    {
        $date = time();
        $sql = "INSERT INTO todo (task, date) VALUES ('$task', '$date')";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

    public function updateTask($id, $task)
    {
        $sql = "UPDATE todo SET task = '$task' WHERE id = $id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

    public function deleteTask($id)
    {
        $sql = "DELETE FROM todo WHERE id = $id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt;
    }
}
