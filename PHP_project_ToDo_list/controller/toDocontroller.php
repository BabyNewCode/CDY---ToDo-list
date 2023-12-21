<?php
include_once('model\toDomodel.php');

class ToDoController
{
    private $model;
    public function __construct()
    {
        $this->model = new ToDoModel;
    }
    
    public function getTasks()
    {
        $todo=$this->model->getTasks();
        include_once('view\add_task.php');
    }  
}
