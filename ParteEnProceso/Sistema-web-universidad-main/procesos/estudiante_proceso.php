<?php
    include_once "./conexion.php";
    include_once "./general_crud.php";
    $carnet_id = $_GET['id'];
    $query = "DELETE FROM estudiante WHERE carnet='$carnet_id'";
    $data = I_U_D_data($query);
    if($data){
        header('Location:../index.php');
    
    }
//actualizar datos estudiante
    if(isset($_POST['enviar'])){
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $clave = password_hash($_POST['clave'],PASSWORD_DEFAULT);

        $direccion = $_POST['direccion'];
        $date_nacimiento = $_POST['date_nacimiento'];
        //Proceso de insertar a la BD
        
        $tabla = 'estudiante(nombres,apellidos,email,clave,direccion,fecha_nacimiento,id_rol)';
        $valores = "'$nombres','$apellidos','$email','$clave','$direccion','$date_nacimiento',1";
        //Consulta
        $query= "UPDATE $tabla SET ($valores)";
        //Utilizamos la funcion de insertar (Multiproposito)
        $response = I_U_D_data($query);
        if($response){
            echo "
                <script>
                        alert('Actualizado');
                        location.href = '../../?option=perfil';
                </script>
            ";
        }else{
            echo "
                <script>
                        alert('Error al Actualizar');
                        location.href = '../../?option=perfil';
                </script>
            ";
        }
    }


?>  