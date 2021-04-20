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
            $query = "INSERT INTO matricula(fecha,id_estudiante,id_curso) VALUES(NULL,'$id_estudiante','$id_curso')";
            $result = I_U_D_data($query);

            if($result){
                header('Location:../?option=inscribirse&error='.base64_encode('Inscrito'));
                return false;
            }
        }else{
            header('Location:../?option=inscribirse&error='.base64_encode('Ya estas inscrito'));
            return false;
        }
        
    }
    //Agregar un curso a la base de datos, desde la vista de curse.php

    if(isset($_POST['agregar-curse'])){
        echo $nombre_curso = $_POST['nombre_curso'];
        echo $descripcion = $_POST['descripcion'];
        echo $numero_cupos = $_POST['numero_cupos'];
        echo $estado = $_POST['estado'];
        echo $fecha = $_POST['fecha'];
        echo $carrera = $_POST['carrera'];
        echo $docente = $_POST['docente'];

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
    $id_curso = $_GET['id_curso'];
    if(isset($id_curso)){
        $query = "DELETE FROM matricula WHERE id='$id_curso'";
        $result = I_U_D_data($query);
        if($result){
            header('Location:../?option=matricula');
        }
    }
    
?>