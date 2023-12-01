<?php
require_once "./app/helper/auth.helper.php";
require_once "./app/models/LibroModel.php";
require_once "./app/views/LibroView.php";

class LibroController{
    private $model;
    private $view;
    private $Amodel;


    public function __construct() {
        $this->model = new LibroModel();
        $this->view = new LibroView();
        $this->Amodel = new AutorModel();

        if (session_status() != PHP_SESSION_ACTIVE){
            session_start();
        }
    }

    //Show
    function showHome(){
        $libros = $this->model->getLibros();
        $this->view->showHome($libros);
    }
    function showLibrobyId($id){
        $libro = $this->model->getLibroId($id);
        $this->view->showLibroId($libro);
    }
    function showForm($lib = null){
            $autores = $this->Amodel->getAutores();
            $this->view->MostrarForm($autores, $lib);
    }
    function showFormUpdate($id){
            $lib = $this->model->getLibroId($id);
            $this->showForm($lib);
    }

    function showAll(){
        $libros = $this->model->getAll();
        $this->view->showAll($libros);
    }

    //ABM
    function createLibro(){
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();

        
        if((isset($_POST['nombre'])&&isset($_POST['nombre_del_autor'])&&isset($_POST['anio_publicacion'])&&isset($_POST['descripcion']))
            &&!empty($_POST['nombre'])&&!empty($_POST['nombre_del_autor'])&&!empty($_POST['anio_publicacion'])&&!empty($_POST['descripcion'])){
            
            $nombre = $_POST["nombre"]; 
            $nombre_del_autor = $_POST["nombre_del_autor"];
            $anio_publicacion = $_POST["anio_publicacion"];
            $descripcion = $_POST["descripcion"];

            $this->model->insertLibro($nombre, $nombre_del_autor, $anio_publicacion, $descripcion); 
            $this->view->success(true);
        }else{ 
            $this->view->success(false,"Faltan datos obligatorios");
        }
            header("Location: ". BASE_URL . "libro"); 
    }

    function editView($id){
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();
    
        $libros = $this->model->getFormLibros($id);
        $this->view->editLibro($libros);
    }

    function updateLibro($id){
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();

        if((isset($_POST['nombre'])&&isset($_POST['nombre_del_autor'])&&isset($_POST['anio_publicacion'])&&isset($_POST['descripcion']))
            &&!empty($_POST['nombre'])&&!empty($_POST['nombre_del_autor'])&&!empty($_POST['anio_publicacion'])&&!empty($_POST['descripcion'])){
            
            $nombre = $_POST["nombre"]; 
            $nombre_del_autor = $_POST["nombre_del_autor"];
            $anio_publicacion = $_POST["anio_publicacion"];
            $descripcion = $_POST["descripcion"];

            $libros = $this->model->updateLibro($nombre, $nombre_del_autor, $anio_publicacion, $descripcion, $id);
            $this->view->success(true);
        }else{ 
            $this->view->success(false,"Faltan datos obligatorios"); 
            die();
        }
    }

    function deleteLibro($id){
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();

        $this->model->deleteLibro($id);
        header("Location: ". BASE_URL . "libro");  
    }
}