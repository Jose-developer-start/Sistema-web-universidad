<?php
    include_once "./conexion.php";
    include_once "./general_crud.php";

    //Guardamos los datos del formulario de docente
    if(isset($_POST['guardar_data'])){
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        //Encriptamos la clave hash
        $clave = password_hash($_POST['clave'],PASSWORD_DEFAULT);
        $foto = $_FILES['foto']['name'];
        //$rol = $_POST['rol'];

        //Insertar los datos a la BD
        $tabla = "docente(nombres,apellidos,email,clave,foto,estado,id_rol)";
        $query = "INSERT INTO $tabla VALUES('$nombres','$apellidos','$email','$clave','$foto',0,2)";
        $result = I_U_D_data($query);
        
        if($result){
            //Mover el archivo foto
            $tmp_foto = $_FILES['foto']['tmp_name'];
            move_uploaded_file($tmp_foto,"../public/img/fotos_docentes/".$foto);
            echo "
                <script>
                        alert('Registrado! Un administrador aprobara tú cuenta');
                        location.href = '../views/';
                </script>
            ";
        }else{
            echo "
                <script>
                        alert('Error al registrar');
                        location.href = '../views/';
                </script>
            ";
        }

    }
    //Eliminar registros de la tabla docente
    if(isset($_GET['delete'])){
        $id_docente = $_GET["id"];
        $foto = $_GET['foto'];
        $query = "DELETE FROM docente WHERE id=$id_docente";
        $result = I_U_D_data($query);

        if($result){
            //Eliminar foto
            unlink("../public/img/fotos_docentes/".$foto);
            echo "
                <script>
                        alert('Eliminado');
                        location.href = '../?option=docente';
                </script>
            ";
        }else{
            echo "
                <script>
                        alert('Error al eliminar');
                        location.href = '../?option=docente';
                </script>
            ";
        }
    }
    //Actulizar registro
    if(isset($_POST['update_docente'])){
        $id_docente = $_POST['id'];
        $estado = $_POST['estado'];
        $rol = $_POST['rol'];
        $query = "UPDATE docente SET estado=$estado,id_rol=$rol WHERE id=$id_docente";
        $result = I_U_D_data($query);
        if($result){
            echo "
                <script>
                        alert('Actualizado!');
                        location.href = '../?option=docente';
                </script>
            ";
        }else{
            echo "
                <script>
                        alert('Error al Actualizar');
                        location.href = '../?option=docente';
                </script>
            ";
        }
    }


?>