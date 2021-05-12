<?php
    //Incluimos la cnx y el archivo que manejo el crud
    include_once "./conexion.php";
    include_once "./general_crud.php";
    //SECTION DE AGREGAR PERIODOS
    if(isset($_POST['add_periodo'])){
        $date_i = $_POST['fecha_i'];
        $date_f = $_POST['fecha_f'];
        $query = "INSERT INTO periodo(fecha_inicio,fecha_finalizacion) VALUES('$date_i','$date_f')";
        $result = I_U_D_data($query);

        if($result){
            header('Location:../?option=periodos');
        }
    }
    //Agregar inscripcion de alumno a un curso
    if(isset($_POST['add_matricula'])){
        $id_curso = $_POST['id_curso'];
        $id_estudiante = $_POST['id_estudiante'];
        //Comprobamos si ya esta inscrito
        $query = "SELECT * FROM matricula WHERE id_curso ='$id_curso' AND id_estudiante='$id_estudiante'";
        $result_Verify = select_data($query);
        if(empty($result_Verify)){
            //Consulta para verificar el nº de inscripcion a 5 cursos maximo
            $query_verify = "SELECT COUNT(id_estudiante) as matricula FROM `matricula` WHERE id_estudiante='$id_estudiante'";
            $result_count_estu = get_data($query_verify,"where");
            if($result_count_estu['matricula'] < 5){
                $query = "INSERT INTO matricula(fecha,id_estudiante,id_curso) VALUES(NULL,'$id_estudiante','$id_curso')";
                $result = I_U_D_data($query);

                if($result){
                    header('Location:../?option=inscribirse&pag=1&error='.base64_encode('Inscrito'));
                    return false;
                }
            }else{
                header('Location:../?option=inscribirse&pag=1&error='.base64_encode('Inscripciones Superadas'));
                return false;
            }
        }else{
            header('Location:../?option=inscribirse&pag=1&error='.base64_encode('Ya estas inscrito'));
            return false;
        }
    }

    //Agregar un curso a la base de datos, desde la vista de curse.php
    if(isset($_POST['agregar-curse'])){
        $nombre_curso = $_POST['nombre_curso'];
        $descripcion = $_POST['descripcion'];
        $numero_cupos = $_POST['numero_cupos'];
        $estado = $_POST['estado'];
        $fecha = $_POST['fecha'];
        $carrera = $_POST['carrera'];
        $docente = $_POST['docente'];

        $tabla = 'cursos(nombre,descripcion,cupos,estado,id_periodo,id_carrera,id_docente)';
        $valores = "'$nombre_curso','$descripcion','$numero_cupos','$estado','$fecha','$carrera','$docente'";
        //Consulta
        $query= "INSERT INTO $tabla VALUES($valores)";
        //Utilizamos la funcion de insertar (Multiproposito)
        $response = I_U_D_data($query);
        if($response){
            echo "
                <script>
                        alert('Registrado');
                        location.href = '../?option=cursos';
                </script>
            ";
            return false;
        }else{
            echo "
                <script>
                        alert('Error al registrar');
                        location.href = '../?option=cursos';
                </script>
            ";
        }
    }
    //Eliminar matricula
    
    if(isset($_GET['id_curso'])){
        $id_curso = $_GET['id_curso'];
        $query = "DELETE FROM matricula WHERE id='$id_curso'";
        $result = I_U_D_data($query);
        if($result){
            header('Location:../?option=matricula&error='.base64_encode('Eliminado'));
        }
    }
    //Eliminar periodo
    if(isset($_GET['id_periodo'])){
        $id_periodo = $_GET['id_periodo'];
        $query = "DELETE FROM periodo WHERE id='$id_periodo'";
        $result = I_U_D_data($query);
        if($result){
            header('Location:../?option=periodos&mensaje='.base64_encode('Eliminado'));
        }
    }
    //Actualizar periodo
    if(isset($_POST['update_periodo'])){
        $id_periodo = $_POST['id_periodo'];
        $date_i = $_POST['fecha_i'];
        $date_f = $_POST['fecha_f'];
        $query = "UPDATE periodo SET fecha_inicio='$date_i',fecha_finalizacion='$date_f' WHERE id=$id_periodo";
        $result = I_U_D_data($query);

        if($result){
            header('Location:../?option=periodos');
        }
    }
    //Eliminar un curso
    if(isset($_GET['del_cursos'])){
        $id_curso = $_GET['id_curso'];
        $query = "DELETE FROM cursos WHERE id='$id_curso'";
        $result = I_U_D_data($query);
        if($result){
            header('Location:../?option=cursos&mensaje='.base64_encode('Eliminado'));
        }
    }
    //Actualizar curso
    if(isset($_POST['update_curso'])){
        $id_curso = $_POST['id_curso'];
        $nombre_curso = $_POST['nombre_curso'];
        $descripcion = $_POST['descripcion'];
        $numero_cupos = $_POST['numero_cupos'];
        $estado = $_POST['estado'];
        /*
        $fecha = $_POST['fecha'];
        $carrera = $_POST['carrera'];
        $docente = $_POST['docente'];
        */
        $where = "WHERE id=$id_curso";
        //Consulta
        $query= "UPDATE cursos SET nombre='$nombre_curso',descripcion='$descripcion',cupos='$numero_cupos',estado='$estado' $where";
        //Utilizamos la funcion de insertar (Multiproposito)
        $response = I_U_D_data($query);
        if($response){
            echo "
                <script>
                        alert('Actualizado');
                        location.href = '../?option=cursos';
                </script>
            ";
            return false;
        }else{
            echo "
                <script>
                        alert('Error al Actualizar');
                        location.href = '../?option=cursos';
                </script>
            ";
        }
    }
?>