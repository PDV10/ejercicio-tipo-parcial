<?php
    class modelPuntaje{
        private $db;
        
        function __construct(){
            $this->db = new PDO('.uwu.');
        }

        function insertCalificacion($puntaje,$user,$episodio){
            $query = $this->db->prepare('INSERT INTO puntuacion (puntaje,ID_USER_DK,ID_CAP_FK) VALUES (?,?,?) ');
            $query->execute([$puntaje,$user,$episodio]);
            return $this->db->lastInsertId();
        }

        function getAvgCalificaciones($id_user,$id_cap,$flag){
            $query = $this->db->prepare(
           'SELECT AVG(*) AS promedio
            FROM PUNTUACION p 
            JOIN EPISODIOS  e     ON p.ID_CAP_FK = e.IDENTIFACADOR
            JOIN TEMPORADAS t     ON e.ID_TEMP_FK = t.IDENTIFACADOR
            JOIN SERIES     s     ON t.ID_SERIE_FK = s.ID 
            WHERE p.ID_USER_FK = ? 
            AND p.ID_CAP_FK = ?
            AND p.FLAG = ?');
            $query->execute([$id_user,$id_cap,$flag]);
            return $query->fetch(PDO::FETCH_OBJ);
        }

    }