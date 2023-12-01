<?php
require_once "./app/helper/auth.helper.php";
require_once "./app/views/AutorView.php";
require_once "./app/models/AutorModel.php";
require_once "./app/models/LibroModel.php";

class AutorController{
    private $view;
    protected $model;
    private $Lmodel;
    private $Lview;

    function __construct() {
        $this->model = new AutorModel();
        $this->view = new AutorView();

        if (session_status() != PHP_SESSION_ACTIVE){
            session_start();
        }
    }

    //Show

    function getAll(){
        $autor = $this->model->getAutores();
        $this->view->showAll($autor);
    }

    function showAutores(){
        $autores = $this->model->getAutores();
        $this->view->showAutorList($autores);
    }

    function showAutor(){
        $autores = $this->model->getAutores();
        $this->view->showAutor($autores);
    }

    function showUpdateAutor($id){
            $autorUpdate = $this->model->getAutorId($id);
            $this->view->showautorid($autorUpdate);
    }
    function showLibroByAutor($idautor){
        $libros = $this->Lmodel->getLibrosAutor($idautor);
        if (!empty($libros)) {
            //ACA
            $this->Lview->showLibroAutor($libros);
        }else{
            $this->view->success(false, "faltan datos obligatorios");
        }
    }
    //ABM
    function createAutor(){
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();

        if((isset($_POST['nombre'])&&isset($_POST['universidad'])&&!empty($_POST['nombre'])&&!empty($_POST['universidad']))){

            $nombre = $_POST["nombre"];
            $universidad = $_POST ['universidad'];

            $this->model->insertAutor($nombre, $universidad);
            $this->view->success(true);
            }else{
                $this->view->success(false,"Faltan datos obligatorios"); 
                die(); 
            }
            header('Location: ' . BASE_URL );
    }

    function editView($id){
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();

        $autor = $this->model->getAutor($id);
        $this->view->editAutor($autor);
    }

    function updateAutor($id){
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();

        if((isset($_POST['nombre'])&&isset($_POST['universidad'])
            &&(!empty($_POST['nombre'])&&!empty($_POST['universidad'])))){

            $nombre = $_POST["nombre"]; 
            $universidad = $_POST["universidad"];
            
            $autor= $this->model->updateAutor($nombre, $universidad, $id); 
            $this->view->success(true);
            }else{
                $this->view->success(false,"Faltan datos obligatorios"); 
                die(); 
            }
    }
    function deleteAutor($id){
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();

        $this->model->deleteAutor($id); 
        header('Location: '. BASE_URL );
    }  
}
