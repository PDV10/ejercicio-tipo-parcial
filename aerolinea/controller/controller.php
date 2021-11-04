<?php
    require_once('view/view.php');
    require_once('model/model.php');
    
    class controller{
        private $view; 
        private $model;

        function __construct(){
            $this->view = new view();
            $this->model = new model();
        }

        function home(){
            $ciudades = $this->model->getCiudad();
            $this->view->showHome($ciudades);
        }

        function getVuelos(){
            /* $vuelo = $this->model->GetVuelos(); */
        }

    }