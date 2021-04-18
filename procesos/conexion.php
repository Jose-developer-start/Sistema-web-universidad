<?php
    //Conexion a base de dato
    function get_conexion(){
        $host = "localhost";
        $user = "jose";
        $password = "jose12345";
        $bd = "universidad";
        //Trabajando con mysql
        $driver = "mysql:host=$host;dbname=$bd;charset=utf8";        
        $pdo = new PDO($driver,$user,$password);
        return $pdo;
    }
?>
