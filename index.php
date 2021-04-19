<!--Cabecera--->
<?php
    session_start();
    include_once "views/template/header.php";
    //Incluimos la conexion
    include_once "./procesos/conexion.php";
?>

<!--App principal-->
    <?php
        //Si no existe la sesion enviar a login
        if(!isset($_SESSION['estudiante']) && !isset($_SESSION['docente']) && !isset($_SESSION['admin'])){
            header('Location:./views/');
        }

        $option = $_GET['option'];

    if($option == 'user'){
        include_once "views/table_students.php";
    }elseif($option == 'carrera'){
        include_once "views/career.php";
    }elseif($option == 'cursos'){
        include_once "views/course.php";
    }elseif($option == 'periodos'){
        include_once "views/add_periodo.php";
    }elseif($option == 'docente'){
        include_once "views/table_teacher.php";
    }elseif($option == 'matricula'){
        include_once "views/matricula_user.php";
    }elseif($option == 'inscribirse'){
        include_once "views/add_course.php";
    }elseif($option == 'perfil'){
        include_once "views/perfil_user.php";
    }else{
        include_once "views/dashboard.php";
    }
    ?>

<!--Footer-->
<?php
    include_once "views/template/footer.php";
?>