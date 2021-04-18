<?php
    //Iniciamos las sesiones
    session_start();
    //Incuimos la base de datos
    include_once "./conexion.php";
    //Incluimos a general crud
    include_once "./general_crud.php";
    //Recibiendo datos de formulario de inscripcion
    $carnet = $_POST['carnet'];
    $clave = $_POST['clave'];
    //Consulta sql para buscar el registro en la BD
    $query = "SELECT * FROM estudiante WHERE carnet='$carnet'";

    $result = get_data($query);
    if($result['carnet'] === $carnet){
        if(password_verify($clave,$result['clave'])){
            //Creamos la sesion de estudiante
            $_SESSION['estudiante'] = $result;
            echo "
                <script>location = '../index.php'</script>
            
            ";
        
        }else{
            header('Location:../views/login_user.php?error='.base64_encode('Clave erronea'));
        }
        
    }else{
        header('Location:../views/login_user.php?error='.base64_encode('Carnet invalido'));
    }
?>