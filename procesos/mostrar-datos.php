<?php
    //Incluimos el de crud
    include_once "./procesos/general_crud.php";
    //Consulta para mostrar en la vista de tabla de estudiante->rol docente
    $query = "SELECT * FROM matricula";
    $result = select_data($query);

    //Consulta para mostrar en la tabla periodo en add_perido.php
    $query = "SELECT * FROM periodo ORDER BY id DESC";
    $result_perido = select_data($query);

    //Consulta para mostrar los cursos en vista add_curse.php
    $query = "SELECT cursos.id,cursos.nombre,cursos.descripcion,cursos.estado,periodo.fecha_inicio,periodo.fecha_finalizacion FROM cursos INNER JOIN periodo ON cursos.id_periodo=periodo.id WHERE estado=1 ORDER BY cursos.id DESC";
    $result_cursos = select_data($query);

    //Consulta para mostrar los datos en la vista matricula_user.php
    $query = "SELECT matricula.id,matricula.id_estudiante,cursos.nombre,matricula.fecha,docente.nombres FROM matricula INNER JOIN cursos ON matricula.id_curso=cursos.id INNER JOIN docente ON cursos.id_docente=docente.id ORDER BY cursos.id DESC";
    $result_matricula = select_data($query);

    //Consultas para mostrar en los select las carreras => en curse.php
    $query = "SELECT * FROM carreras ORDER BY id DESC";
    $result_carrera = select_data($query);

    ////Consultas para mostrar en los select los docentes => En curse.php
    $query = "SELECT * FROM docente ORDER BY id DESC";
    $result_docente = select_data($query);

    //Consulta para mostrar los datos en la tabla docentes->administrador
    $query = "SELECT docente.id,docente.nombres,docente.apellidos,docente.email,rol.nombre,docente.estado,docente.foto,rol.id as rol FROM `docente` INNER JOIN rol ON docente.id_rol=rol.id";
    $tabla_docente = select_data($query);

    //Consulta para mostrar la facultad en la vista de agregar carrera
    $query = "SELECT * FROM facultad";
    $data_facultad = select_data($query);

    $query = "SELECT carreras.id,carreras.nombre,carreras.duracion,carreras.pensum,facultad.nombre as facultad FROM carreras INNER JOIN facultad ON carreras.id_facultad=facultad.id ORDER BY id DESC";
    $result_carrera_facultad = select_data($query);


    //Consulta para mostrar el curso y la carrera en la vista de cursos
    $query = "SELECT cursos.id,cursos.nombre as cursos,cursos.descripcion,cursos.cupos,cursos.estado,cursos.id_docente,carreras.nombre as carreras FROM cursos INNER JOIN carreras ON cursos.id_carrera=carreras.id  ORDER BY cursos.id DESC";
    $result_cursos_carrera = select_data($query);
    
?>