<?php
    //Incuimos la base de datos
    include_once "./conexion.php";
    //Incluimos a general crud
    include_once "./general_crud.php";
    //Recibiendo orden de actualizacion

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
        $query= "UPDATE $tabla SET($valores)";
        //Utilizamos la funcion de insertar (Multiproposito)
        $response = I_U_D_data($query);
        if($response){
            echo "
                <script>
                        alert('Actualizado');
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