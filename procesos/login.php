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
    $rol = isset($_POST['rol']) ? $_POST['rol'] :  '';
    if($rol == 1){
        $query = "SELECT * FROM estudiante WHERE carnet='$carnet'";
    }elseif($rol == 2){
        $query = "SELECT * FROM docente WHERE email='$carnet' AND id_rol=2";
    }else{
        $query = "SELECT * FROM docente WHERE email='$carnet' AND id_rol=3";
    }
    //Consulta sql para buscar el registro en la BD
    $result = get_data($query,'where');
    $verify_carnet = isset($result['carnet']) ? $result['carnet'] : ''; //Carnet de la base de datos
    if( $verify_carnet == $carnet || $result['email'] == $carnet){
        if($rol == 1){
            if(password_verify($clave,$result['clave'])){
                //Creamos la sesion de estudiante
                $_SESSION['estudiante'] = $result;
                echo "
                    <script>location = '../index.php'</script>
                ";
            
            }else{
                header('Location:../views/?error='.base64_encode('Clave erronea'));
            }
        }elseif($rol == 2){
            if($result['estado'] == 1){
                if(password_verify($clave,$result['clave'])){
                    //Creamos la sesion de estudiante
                    $_SESSION['docente'] = $result;
                    echo "
                        <script>location = '../index.php'</script>
                    ";
                
                }else{
                    header('Location:../views/?error='.base64_encode('Clave erronea'));
                }
            }else{
                header('Location:../views/?error='.base64_encode('Cuenta desactivada'));
            }
        }else{
            if($result['estado'] == 1){
                if(password_verify($clave,$result['clave'])){
                    //Creamos la sesion de estudiante
                    $_SESSION['admin'] = $result;
                    echo "
                        <script>location = '../index.php'</script>
                    
                    ";
                
                }else{
                    header('Location:../views/?error='.base64_encode('Clave erronea'));
                }
            }else{
                header('Location:../views/?error='.base64_encode('Cuenta desactivada'));
            }
        }
    }else{
        header('Location:../views/?error='.base64_encode('Carnet o email invalido'));
    }
?>