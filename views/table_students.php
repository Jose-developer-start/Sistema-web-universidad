<?php
include_once "./procesos/paginacion_matriculados.php";
?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-user"></i> Estudiantes</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-user fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Estudiante</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
      <h3 class="tile-title">Estudiantes</h3>
        <table class="table table-hover table-responsive-sm">
          <thead>
            <tr>
              <th>Carnet</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Email</th>
              <th>Carrera</th>
              <th>Curso</th>
            </tr>
          </thead>
          <tbody>
            <?php $cont = 0;
            foreach ($result as $data) : ?>
              <?php if (isset($_SESSION['docente'])) : ?>
                <?php if ($_SESSION['docente']['id'] == $data['id_docente']) : ?>
                  <tr>
                    <td><?php echo $data['carnet'] ?></td>
                    <td><?php echo $data['nombres'] ?></td>
                    <td><?php echo $data['apellidos'] ?></td>
                    <td><?php echo $data['email'] ?></td>
                    <td><?php echo $data['carreras'] ?></td>
                    <td><?php echo $data['cursos'] ?></td>
                  </tr>
                <?php endif; ?>
              <?php else : ?>
                <tr>
                  <td><?php echo $data['carnet'] ?></td>
                  <td><?php echo $data['nombres'] ?></td>
                  <td><?php echo $data['apellidos'] ?></td>
                  <td><?php echo $data['email'] ?></td>
                  <td><?php echo $data['carreras'] ?></td>
                  <td><?php echo $data['cursos'] ?></td>
                </tr>
              <?php endif; ?>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div>
    <ul class="pagination">
      <li class="page-item <?php echo $_GET['pag'] <= 1 ? 'disabled' : '' ?>"><a class="page-link" href="?option=user&pag=<?php echo $_GET['pag'] - 1 ?>">«</a></li>
      <?php for ($i = 0; $i < $paginas; $i++) : ?>
        <li class="page-item <?php echo $_GET['pag'] == $i + 1 ? 'active' : '' ?>"><a class="page-link" href="?option=user&pag=<?php echo $i + 1 ?>"><?php echo $i + 1 ?></a></li>
      <?php endfor; ?>
      <li class="page-item <?php echo $_GET['pag'] >= $paginas ? 'disabled' : '' ?>"><a class="page-link" href="?option=user&pag=<?php echo $_GET['pag'] + 1 ?>">»</a></li>

    </ul>
  </div>
</main>