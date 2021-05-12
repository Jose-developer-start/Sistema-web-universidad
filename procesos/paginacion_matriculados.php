<?php
    include_once "./procesos/mostrar-datos.php";

    include_once "./procesos/general_crud.php";

    if(!isset($_GET['pag'])){
      header('Location:index.php?option=user&pag=1');
    }
    $total_pag = 10;
    $paginas = ceil(count($result) / $total_pag);
    $iniciar_pag = ($_GET['pag'] - 1) * $total_pag;
    $query_limit = "SELECT estudiante.carnet,estudiante.nombres,estudiante.apellidos,estudiante.email,carreras.nombre as carreras,cursos.nombre as cursos,docente.id as id_docente FROM matricula INNER JOIN cursos ON matricula.id_curso=cursos.id INNER JOIN docente ON cursos.id_docente=docente.id INNER JOIN estudiante ON matricula.id_estudiante=estudiante.carnet INNER JOIN carreras ON estudiante.id_carrera=carreras.id LIMIT $iniciar_pag,$total_pag";
    $result = get_data($query_limit);
?>