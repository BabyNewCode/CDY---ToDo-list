<?php

require_once __DIR__.'/../controller/controller.php';
require_once __DIR__.'/../model/model.php';
require_once __DIR__.'/../view/view.php';
require_once __DIR__.'/../data/repository.php';
require_once __DIR__.'/../router/router.php';

// Initialisation du routeur
$router = new Router();

// Initialisation de la connexion à la base de données
$db = new PDO('mysql:host=localhost;dbname=SA', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Initialisation du repository
$repository = new Repository($db);

// Initialisation du modèle, de la vue et du contrôleur
$model = new Model($repository);
$view = new View();
$controller = new Controller($model, $view);

// Ajout des routes
$router->addRoute('/', [$controller, 'index']);

// Ajoutez une route pour la suppression
if ($_GET['action'] === 'supprimer' && isset($_GET['id'])) {
    $controller->supprimerTache($_GET['id']);
}
    else {
}

// Récupération de l'URL demandée
$url = $_SERVER['REQUEST_URI'];

// Récupération du contrôleur approprié
$controller = $router->route($url);

// Appel de la méthode appropriée du contrôleur
call_user_func([$controller[0], $controller[1]]);

include("view/header.php");

include("router/router.php");

include("view/footer.php");