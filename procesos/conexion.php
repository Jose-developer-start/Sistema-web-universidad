<?php
    //Conexion a base de dato
    function get_conexion(){
        $host = "localhost";
        $user = "root";
        $password = "";
        $bd = "universidad";
        //Trabajando con el motor mysql
        $driver = "mysql:host=$host;dbname=$bd;charset=utf8";        
        $pdo = new PDO($driver,$user,$password);
        return $pdo;
    }
?>
