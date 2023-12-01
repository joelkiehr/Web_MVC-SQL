<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class AuthView {

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }


    function showAbout($libro) {

        $this->smarty->assign('count', count($libro));
        $this->smarty->assign('libros', $libro);
        
        $this->smarty->display('about.tpl');
        

    }
}
