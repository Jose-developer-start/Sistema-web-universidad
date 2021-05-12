<?php
  include "./procesos/general_crud.php";
  /**
   * 
   * ADMNISTRADOR y DOCENTE
   * 
   * **/
  //CAPTURAMOS LA SESION DEL DOCENTE
  
  $id_docente = isset($_SESSION['docente']['id']) ? $_SESSION['docente']['id'] : '';
  
  //CAPTURAMOS LA SESION DEL ESTUDIANTE
  
  $id_estudiante = isset($_SESSION['estudiante']['carnet']) ?$_SESSION['estudiante']['carnet'] : '';
  
  //Consulta para obtener la cantidad de registros de diferentes tablas

  if(isset($_SESSION['docente'])){

    $query = "SELECT COUNT(id) as cantidad_cursos FROM cursos WHERE id_docente=$id_docente";

    $queryEstudiante = "SELECT COUNT(estudiante.carnet) as cantidad_estudiantes FROM `matricula` INNER JOIN estudiante ON matricula.id_estudiante=estudiante.carnet INNER JOIN cursos ON matricula.id_curso=cursos.id INNER JOIN docente ON cursos.id_docente=docente.id WHERE docente.id=$id_docente";
    //Estudiantes ejecusion
    $cantidad_estudiante = select_data($queryEstudiante);
  }elseif(isset($_SESSION['admin'])){
    $query = "SELECT COUNT(id) as cantidad_cursos FROM cursos";
    
    $queryEstudiante = "SELECT COUNT(carnet) AS cantidad_estudiantes FROM `estudiante`";

    //Docentes en el sistema
    $queryDocente = "SELECT COUNT(id) as cantidad_docentes FROM docente WHERE id_rol=2";
    $cantidad_docente = select_data($queryDocente);
    //Carreras
    $queryCarrera = "SELECT COUNT(id) as cantidad_carreras FROM `carreras`";
    $cantidad_carreras = select_data($queryCarrera);
    //Estudiantes ejecusion
    $cantidad_estudiante = select_data($queryEstudiante);
  }else{
    $query = "SELECT COUNT(matricula.id) as cantidad_cursos FROM matricula WHERE id_estudiante='$id_estudiante'";
  }
  //Cursos ejecusion global (para los 3 roles del sistema)
  $data = select_data($query);
  
  //Mostrar la cantidad de estudiantes en el sistema->ejecusion
  /**
   * 
   * END ADMINISTRADOR y DOCENTE
   * 
   * **/
?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i> Estado</h1>
      <p>Resumen</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Resumen</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-6 col-lg-3">
      <div class="widget-small primary coloured-icon"><i class="icon fa fa-book fa-3x"></i>
        <div class="info">
          <h4>Cursos</h4>
          <p><b><?php echo $data[0]['cantidad_cursos']; ?></b></p>
        </div>
      </div>
    </div>
    <?php if(isset($_SESSION['admin']) || isset($_SESSION['docente'])): ?>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small info coloured-icon"><i class="icon fa fa-users fa-3x"></i>
        <div class="info">
          <h4>Estudiantes</h4>
          <p><b><?php echo $cantidad_estudiante[0]['cantidad_estudiantes']; ?></b></p>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <?php if(isset($_SESSION['admin'])):?>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small warning coloured-icon"><i class="icon fa fa-laptop fa-3x"></i>
        <div class="info">
          <h4>Carreras</h4>
          <p><b><?php echo $cantidad_carreras[0]['cantidad_carreras'] ?></b></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small info coloured-icon"><i class="icon fa fa-users fa-3x"></i>
        <div class="info">
          <h4>Docentes</h4>
          <p><b><?php echo $cantidad_docente[0]['cantidad_docentes'] ?></b></p>
        </div>
      </div>
    </div>
    <?php endif; ?>
  </div>
</main>