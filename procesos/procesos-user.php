<?php
    //Incuimos la base de datos
    include_once "./conexion.php";
    //Incluimos a general crud
    include_once "./general_crud.php";
    //Recibiendo datos de formulario de inscripcion 

    if(isset($_POST['enviar'])){
        $carnet = $_POST['carnet'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $clave = password_hash($_POST['clave'],PASSWORD_DEFAULT);
        $genero = $_POST['genero'];

        $direccion = $_POST['direccion'];
        $date_nacimiento = $_POST['date_nacimiento'];
        //Proceso de insertar a la BD
        $carrera = $_POST['carrera'];
        $tabla = 'estudiante(carnet,nombres,apellidos,email,clave,genero,direccion,fecha_nacimiento,id_carrera,id_rol)';
        $valores = "'$carnet','$nombres','$apellidos','$email','$clave','$genero','$direccion','$date_nacimiento','$carrera',1";
        //Consulta
        $query= "INSERT INTO $tabla VALUES($valores)";
        //Utilizamos la funcion de insertar (Multiproposito)
        $response = I_U_D_data($query);
        if($response){
            echo "
                <script>
                        alert('Registrado');
                        location.href = '../views/login_user.php';
                </script>
            ";
        }else{
            echo "
                <script>
                        alert('Error al registrar');
                        location.href = '../views/register_user.php';
                </script>
            ";
        }
    }
?>