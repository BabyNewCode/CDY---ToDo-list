<?php

class TodoRepository {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAll() {
        $query = "SELECT * FROM todo";
        $statement = $this->db->query($query);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addTask($task, $dueDate) {
        $query = "INSERT INTO todo (task, due_date) VALUES (:task, :due_date)";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':task', $task, PDO::PARAM_STR);
        $statement->bindParam(':due_date', $dueDate, PDO::PARAM_STR);
        $statement->execute();
    }
}
