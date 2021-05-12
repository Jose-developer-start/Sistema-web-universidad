<?php
    //Conexion a base de dato
    function get_conexion(){
        $host = "localhost";
        $user = "bryan25";
        $password = "Alexander1635446";
        $bd = "universidad";
        //Trabajando con el motor mysql
        $driver = "mysql:host=$host;dbname=$bd;charset=utf8";        
        $pdo = new PDO($driver,$user,$password);
        return $pdo;
    }
?>
