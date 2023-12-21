<?php

$page = $_GET['page'];

if ($page == 'accueil') {
    include('view/template.php');
}elseif ($page == 'taches') {
    include('view/taches.php');
}elseif ($page == 'inscription') {
    include_once('controller/usersController.php');
    $user = new UsersController;
    $user->setUser();
}elseif ($page == 'add_task') {
    include_once('controller/toDocontroller.php');
    $task = new ToDoController;
    $task->getTasks();
}else {
    echo 'ERROR 404';}
