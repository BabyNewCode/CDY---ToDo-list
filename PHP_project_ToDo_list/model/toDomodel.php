<?php
include_once('bdd.php');

class ToDoModel
{
    public $bdd;

    public function __construct()
    {
        $this->bdd = Bdd::connexion();
    }

    public function getTasks()
    {
        return $this->bdd->query("SELECT * FROM todo")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTasksById($id)
    {
        return $this->bdd->query("SELECT * FROM todo WHERE id=$id")->fetch(PDO::FETCH_ASSOC);
    }
}


