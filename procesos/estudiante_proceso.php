<?php
    include_once "./conexion.php";
    include_once "./general_crud.php";
    /*
    $carnet_id = $_GET['id'];
    $query = "DELETE FROM estudiante WHERE carnet='$carnet_id'";
    $data = I_U_D_data($query);
    if($data){
        header('Location:../index.php');
    }
    */
    if(isset($_POST['update_estudiante'])){
        $id_estudiante = $_POST['id'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $clave = password_hash($_POST['clave'],PASSWORD_DEFAULT);
        

        $direccion = $_POST['direccion'];
        $date_nacimiento = $_POST['date_nacimiento'];
        //Proceso de insertar a la BD
        
        $tabla = 'estudiante';
        $valores = "nombres='$nombres',apellidos='$apellidos',email='$email',clave='$clave',direccion='$direccion',fecha_nacimiento='$date_nacimiento'";
        //Consulta
        $query= "UPDATE $tabla SET $valores WHERE carnet='$id_estudiante'";
        //Utilizamos la funcion de insertar (Multiproposito)
        $response = I_U_D_data($query);
        if($response){
            echo "
                <script>
                        alert('Actualizado...');
                        location.href = '../views/';
                </script>
            ";
        }else{
            echo "
                <script>
                        alert('Error al Actualizar');
                        location.href = '../views/';
                </script>
            ";
        }
    }
?>  