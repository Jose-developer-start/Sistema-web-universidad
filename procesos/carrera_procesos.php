<?php
    //Incluimos la cnx y el archivo que manejo el crud
    include_once "./conexion.php";
    include_once "./general_crud.php";
    //SECTION DE AGREGAR CARRERA
    if(isset($_POST['add_carrera'])){
        $nombre = $_POST['nombre'];
        $duracion = $_POST['duracion'];
        $pensum = $_POST['pensum'];
        $id_facultad = $_POST['id_facultad'];
    
        $query = "INSERT INTO carreras(duracion,nombre,pensum,id_facultad) VALUES('$duracion','$nombre','$pensum',$id_facultad)";
        $result = I_U_D_data($query);

        if($result){
            header('Location:../?option=carrera');
        }
    }
    if(isset($_POST['update_carrera'])){
        $id_carrera = $_POST['id_carrera'];
        $nombre = $_POST['nombre'];
        $duracion = $_POST['duracion'];
        $pensum = $_POST['pensum'];
        $id_facultad = $_POST['id_facultad'];
    
        $query = "UPDATE carreras SET duracion='$duracion',nombre='$nombre',pensum='$pensum',id_facultad=$id_facultad WHERE id=$id_carrera";
        $result = I_U_D_data($query);

        if($result){
            header('Location:../?option=carrera');
        }
    }
    //Eliminar carrera
    if(isset($_GET['id_carrera'])){
        $id_carrera = $_GET['id_carrera'];
        $query = "DELETE FROM carreras WHERE id='$id_carrera'";
        $result = I_U_D_data($query);
        if($result){
            header('Location:../?option=carrera&agregado='.base64_encode('Agregado'));
        }
    }
    
?>