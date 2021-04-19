<?php
    include_once "./conexion.php";
    include_once "./general_crud.php";
    $carnet_id = $_GET['id'];
    $query = "DELETE FROM estudiante WHERE carnet='$carnet_id'";
    $data = I_U_D_data($query);
    if($data){
        header('Location:../index.php');
    }
?>  