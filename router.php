<?php
require_once './app/controllers/Autorcontroller.php';
require_once './app/controllers/Librocontroller.php';
require_once './app/controllers/about.controller.php';
require_once './app/controllers/LoginController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; // accion por defecto
if (!empty( $_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        $autorcontroller = new AutorController();
        $autorcontroller->showAutor();
        break;
    case 'add':
        $autorcontroller = new AutorController();
        $autorcontroller->createAutor();
        break;
    case 'delete':
        $autorcontroller = new AutorController();
        $id = $params[1];
        $autorcontroller->deleteAutor($id);
        break;
    case 'editautor':
        $autorcontroller = new AutorController();
        $id = $params[1];
        $autorcontroller->updateAutor($id);
        break;
    case 'editAutorform':
        $autorcontroller = new AutorController();
        $id = $params[1];
        $autorcontroller->editView($id);
        break;
    case 'traerAutores':
        $autorcontroller = new AutorController();
        $autorcontroller->getAll();
        break;
    case 'autores':
        $autorcontroller = new AutorController();
        $autorcontroller->showAutores();
        break;
    case 'about':
        $autorcontroller = new AboutController();
        $autorcontroller->showAbout();
        break;
    case 'librosPorautor':
        $librocontroller = new LibroController();
        $librocontroller->showAll();
        break;
    case 'libro':
        $librocontroller = new LibroController();
        $librocontroller->showHome();
        break;
    case 'agregar':
        $librocontroller = new LibroController();
        $librocontroller->createLibro();
        break;
    case 'eliminar':
        $librocontroller = new LibroController();
        $librocontroller->deleteLibro($params[1]);
        break;
    case 'editLibroform':
        $librocontroller = new LibroController();
        $id = $params[1];
        $librocontroller->editView($id);
        break;
    case 'editlibros':
        $librocontroller = new LibroController();
        $id = $params[1];
        $librocontroller->updateLibro($id);
        break;
    case 'login':
        $controller = new AuthController();
        $controller->showLogin(); 
        break;
    case 'validate':
        $authController = new AuthController();
        $authController->validateUser();
        break;
    case 'logout':
        $controller = new AuthController();
        $controller->logout();
        break;
    default: 
        echo "404 Page Not Found";
        break;
}