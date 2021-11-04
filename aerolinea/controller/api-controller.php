<?php
    require_once('view/apiView.php');
    require_once('model/model.php');
    
    class apiController{
        private $view;
        private $model;
        private $data;
        
        function __construct(){
            $this->view = new ApiView();
            $this->model = new model();
            $this->data = file_get_contents("php://input");
        }

        private function getData(){
            return json_decode($this->data);
        }   

        function buscarVuelo(){
            $origen = $_REQUEST['origen'];
            $destino = $_REQUEST['destino'];

            $vuelo = $this->model->searchFly($origen,$destino);
            
            if(!empty($vuelo)){
                $this->view->response($vuelo,200);
            }
        }

        function getAll(){
            $vuelos = $this->model->getAll();
            $this->view->response($vuelos,200);
        }

        function insertVuelo($params = null){
            $data = $this->getData();

            $newVuelo = $this->model->insertVuelo($data->Vuelo,$data->Fecha,$data->Origen,$data->Destino,$data->Estado);
        }
    }