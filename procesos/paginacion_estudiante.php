<?php
    include_once "./procesos/mostrar-datos.php";

    include_once "./procesos/general_crud.php";

    if(!isset($_GET['pag'])){
      header('Location:index.php?option=inscribirse&pag=1');
    }
    $total_pag = 4;
    $paginas = ceil(count($result_cursos) / $total_pag);
    $iniciar_pag = ($_GET['pag'] - 1) * $total_pag;
    $query_limit = "SELECT cursos.id,cursos.nombre,cursos.descripcion,cursos.estado,periodo.fecha_inicio,periodo.fecha_finalizacion FROM cursos INNER JOIN periodo ON cursos.id_periodo=periodo.id WHERE estado=1 ORDER BY cursos.id DESC LIMIT $iniciar_pag,$total_pag";
    $data = get_data($query_limit);
?>