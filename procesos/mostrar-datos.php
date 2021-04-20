<?php
    //Incluimos el de crud
    include_once "./procesos/general_crud.php";
    //Consulta para mostrar en la vista de tabla estudiantes
    $query = "SELECT * FROM estudiante INNER JOIN carreras ON estudiante.id_carrera=carreras.id";
    $result = select_data($query);

    //Consulta para mostrar en la tabla periodo en add_perido.php
    $query = "SELECT * FROM periodo ORDER BY id DESC";
    $result_perido = select_data($query);

    //Consulta para mostrar los cursos en vista add_curse.php
    $query = "SELECT cursos.id,cursos.nombre,cursos.descripcion,cursos.estado,periodo.fecha_inicio,periodo.fecha_finalizacion FROM cursos INNER JOIN periodo ON cursos.id_periodo=periodo.id ORDER BY cursos.id DESC";
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
?>