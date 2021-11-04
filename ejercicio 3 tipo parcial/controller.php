<?php
    require_once('view/view.php');
    require_once('model/modelEpisodio.php');
    require_once('model/modelPuntaje.php');
    
    class controller{
        private $modelPuntaje;
        private $modelEpisodio;

        function __construct(){
            $this->modelPuntaje = new modelPuntaje();
            $this->modelEpisodio = new modelEpisodio();
        }

        function insertCalificacion(){
            if(isset($_REQUEST['puntaje']) && isset($_REQUEST['user']) && isset($_REQUEST['episodio'])){
                $puntaje = $_REQUEST['puntaje'];
                $user = $_REQUEST['user'];
                $episodio = $_REQUEST['episodio'];
                
                if($puntaje>=1 && $puntaje<=5){
                    $respuesta = $this->model->insertCalificacion($puntaje,$user,$episodio);
                    if($respuesta){
                        $this->view->showLoQueVosQuieras($respuesta);
                    }else{
                        $this->view->showError('no se puede');
                    }
                }else{
                    $this->view->showError('pepe');
                }
            }else{
                $this->view->showError('pepe');
            }
        }

        function getAllEpisodiosVistosByTemporada(){
          $cantEpisodios = $this->modelEpisodio->getAllEpisodiosVistosByTemporada();
          $cantEpisodios->total;
        }

    }