<?php

class Controller {
    private $model;
    private $view;

    public function __construct($model, $view) {
        $this->model = new model();
        $this->view = $view;
    }

    public function index() {
        $todo = $this->model->getAllTodo();
        $this->view->render('index.php', ['todo' => $todo]);
    }

    public function addTaskForm() {
        $this->view->render('add_task_form.php', []);
    }

    public function addTask() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $task = $_POST['task'];
            $dueDate = $_POST['due_date'];

            $this->model->addTask($task, $dueDate);

            header('Location: index.php?page=taches');
            exit;
        }
    }

    public function supprimerTache($idTache) {
        $this->model->supprimerTache($idTache);
        header('Location: index.php?page=taches');
        exit();
    }

    public function error404() {
        echo '404 - Page not found';
    }
}
