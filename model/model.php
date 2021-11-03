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
            'SELECT v.id as ID, v.num_vuelo as Vuelo, v.fechaSalida as Fecha, c.nombre as Origen, d.nombre as Destino, v.estado as Estado 
            FROM vuelo v 
            INNER JOIN ciudad c 
            ON v.ciudad_origen_fk= c.id_ciudad 
            INNER JOIN ciudad d 
            ON  v.ciudad_destino_fk= d.id_ciudad');
            $query->execute([]);
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
    }