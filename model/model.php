<?php
    class model{
        private $db;
        
        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=aerolineas;charset=utf8', 'root', '');
        }

        function getCiudad(){
            $query = $this->db->prepare('SELECT * FROM ciudad');
            $query->execute([]);
            return $query->fetchAll(PDO::FETCH_OBJ);
        }

        function searchFly($origen,$destino){
            $query = $this->db->prepare('SELECT * FROM vuelo WHERE ciudad_origen_fk = ? && ciudad_destino_fk = ?');
            $query->execute([$origen,$destino]);
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
    
        function getCityById($city){
            $query = $this->db->prepare('SELECT nombre AS ciudad FROM ciudad WHERE id_ciudad = ?');
            $query->execute([$city]);
            
            return $query->fetch(PDO::FETCH_OBJ);
        }

        function getAll(){
            $query = $this->db->prepare(
            'SELECT v.*, c.nombre
             FROM vuelo v
             JOIN ciudad c
             ON v.ciudad_origen_fk = c.id_ciudad && v.ciudad_destino_fk = c.id_ciudad');
            $query->execute([]);
            return $query->fetch(PDO::FETCH_OBJ);
        }
    }