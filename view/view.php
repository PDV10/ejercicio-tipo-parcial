<?php
    require_once('libs/smarty-3.1.39/libs/Smarty.class.php');
    class view{
        private $smarty;
        
        function __construct(){
            $this->smarty = new Smarty();
        }

        function showHome($ciudades){
            $this->smarty->assign("ciudades", $ciudades);
            $this->smarty->display('templates/showHome.tpl');
        }

        function showVuelo($vuelo,$ciudadOrigen,$ciudadDestino){
            $this->smarty->assign("vuelos", $vuelo);
            $this->smarty->assign("origen", $ciudadOrigen);
            $this->smarty->assign("destino", $ciudadDestino);
            $this->smarty->display("templates/showTablaVuelos.tpl");
        }
        
        function showError($msg){
            $this->smarty->assign("msg", $msg);
            $this->smarty->display("templates/showError.tpl");
        }
    }