<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class LibroView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
    }

    function showHome($libros){
        $this->smarty->assign("count", count($libros));
        $this->smarty->assign("libros", $libros);
        $this->smarty->display("LibrosList.tpl");
    }

    function MostrarForm(){
        header("Location: " .BASE_URL.'autores');
    }
    function showLibroId(){
        header("Location: " .BASE_URL.'autores');
    }

    function editLibro($libros){
        $this->smarty->assign("libros", $libros);
        $this->smarty->display('edit-libro.tpl');
    }

    function showAll($libros){
        $this->smarty->assign("libros", $libros);
        $this->smarty->display("librosPorautor.tpl");
    }

    function success($success, $msg = null){
        $this->smarty->assign("success", $success);
        if (!empty($msg)) {
            $this->smarty->assign("msg", $msg);
        }
        $this->smarty->display('success.tpl');
    }
}