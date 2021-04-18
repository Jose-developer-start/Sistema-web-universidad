<?php
    //Seleccionar datos sin pasar parametros
    function select_data($query){
        $con = get_conexion();
        $result = $con->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);

    }
    //Funcion con capacidad de insertar, actualizar y eliminar
    function I_U_D_data($query){
        $con = get_conexion();
        $result = $con->prepare($query);
        if($result){
            $result->execute();
            return 1;
        }else{
            return 0;
        }
    }

    //Sirve para traer los datos con la clausula where
    function get_data($query){
        $con = get_conexion();
        $result = $con->prepare($query);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC); 
    }
?>