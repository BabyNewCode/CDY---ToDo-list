<?php

include_once 'bdd.php';

class Model {
    private $db;
    private $repository;

    public function __construct($repository) {
        $this->repository = $repository;
    }

    public function getAllTodo() {
        return $this->repository->getAll();
    }

    public function supprimerTache($idTache) {
    }
}