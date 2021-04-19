<?php
    //Incluimos el de crud
    include_once "./procesos/general_crud.php";
    //Datos mostrados en vista de tabla estudiantes
    $query = "SELECT * FROM estudiante INNER JOIN carreras ON estudiante.id_carrera=carreras.id";
    $result = select_data($query);

?>