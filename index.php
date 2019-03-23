<?php
require 'Model.php';
require 'AbstractController.php';
require 'HomeController.php';
require 'ArticlesController.php';
require 'NotFoundController.php';

$page = filter_input(INPUT_GET, 'page');

switch ($page) {
    case null:
    case 'home':
        $controllerName = HomeController::class;
        $method = 'home';
        break;
    case 'articles':
        $controllerName = ArticlesController::class;
        $method = 'articles';
        break;

    default:
        $controllerName = NotFoundController::class;
        $method = 'pageNotFound';
        break;
}

$controller = new $controllerName();
$controller->$method();
?>

<ul>
    <li><a href="?page=home">Home</a></li>
    <li><a href="?page=articles">Articles</a></li>
    <li><a href="?page=saddfdgdfg">Not Found</a></li>
</ul>
