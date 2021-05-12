<?php
    include_once "./procesos/mostrar-datos.php";

    include_once "./procesos/general_crud.php";

    if(!isset($_GET['pag'])){
      header('Location:index.php?option=docente&pag=1');
    }
    $total_pag = 10;
    $paginas = ceil(count($tabla_docente) / $total_pag);
    $iniciar_pag = ($_GET['pag'] - 1) * $total_pag;
    $query_limit = "SELECT docente.id,docente.nombres,docente.apellidos,docente.email,rol.nombre,docente.estado,docente.foto,rol.id as rol FROM `docente` INNER JOIN rol ON docente.id_rol=rol.id";
    $result_docente = get_data($query_limit);
?>