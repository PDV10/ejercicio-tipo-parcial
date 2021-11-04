<?php
    class modelEpisodio{
        private $db;
        
        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=flinex;charset=utf8', 'root', '');
        }

        function getAllEpisodiosVistosByTemporada(){
            $query = $this->db->prepare(
            'SELECT COUNT(*) AS total 
            FROM EPISODIO e 
            INNER JOIN TEMPORADA t  ON e.ID_TEMP_FK = t.IDENTIFACADOR
            WHERE FLAG = ? ');
            $query->execute([1]);
            return $query->fetch(PDO::FETCH_OBJ);
        }
    }