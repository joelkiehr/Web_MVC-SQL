<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class AutorView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
    }

    function showAutorList($autores){
        $this->smarty->assign('count', count($autores));
        $this->smarty->assign('autores', $autores);
        $this->smarty->display('AutorList.tpl');
    }

    function showAutor(){
        header("Location: " .BASE_URL.'autores');
    }

    function showautorid(){
        header("Location: " .BASE_URL.'autores');
    }

    function showAll($autores){
        $this->smarty->assign("autores", $autores);
        $this->smarty->display('AutorbyLibro.tpl');
    }

    function editAutor($autor){
        $this->smarty->assign("autor", $autor);
        $this->smarty->display('edit-autor.tpl');
    }

    function success($success, $msg = null){
        $this->smarty->assign("success", $success);
        if (!empty($msg)) {
            $this->smarty->assign("msg", $msg);
        }
        $this->smarty->display('success.tpl');
    }
}