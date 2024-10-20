<?php
require_once('config.php');
require_once('controlador/indexController.php'); //MANDA A LLAMAR AL CONTROLADOR
if(isset($_GET['i'])):
    $metodo = $_GET['i'];
    if(method_exists('IndexController',$metodo)): //DON PUNTITOS ES SIMILAR AL ->
        IndexController::{$metodo}();
    endif;
else:
    IndexController::index();
endif;
?>