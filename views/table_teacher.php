<?php include_once "./procesos/paginacion_docente.php"; ?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-docente"></i> Docentes</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-docente fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Docentes</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="d-flex justify-content-between">
          <h3 class="tile-title">Registros de docentes</h3>
          <a class="btn btn-primary mb-2" href="views/register_teacher.php">Registrar</a>
        </div>
        <table class="table table-hover table-responsive-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Correo</th>
              <th>Rol</th>
              <th>Estado</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php $cont = 0;
            foreach ($result_docente as $result) : ?>
              <tr>
                <td><?php echo $cont += 1 ?></td>
                <td><?php echo $result['nombres'] ?></td>
                <td><?php echo $result['apellidos'] ?></td>
                <td><?php echo $result['email'] ?></td>
                <td><?php echo $result['nombre'] ?></td>
                <td><?php echo $result['estado'] == 1 ? 'Activo' : 'Desactivado' ?></td>
                <td>
                  <a class="btn btn-info" href="?option=edit_docente&id=<?php echo $result['id'] ?>">Actualizar</a>
                  <a class="btn btn-danger" href="./procesos/docente_procesos.php?delete=1&id=<?php echo $result['id'] ?>&foto=<?php echo $result['foto'] ?>">Eliminar</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div>
    <ul class="pagination">
      <li class="page-item <?php echo $_GET['pag'] <= 1 ? 'disabled' : '' ?>"><a class="page-link" href="?option=docente&pag=<?php echo $_GET['pag'] - 1 ?>">«</a></li>
      <?php for ($i = 0; $i < $paginas; $i++) : ?>
        <li class="page-item <?php echo $_GET['pag'] == $i + 1 ? 'active' : '' ?>"><a class="page-link" href="?option=docente&pag=<?php echo $i + 1 ?>"><?php echo $i + 1 ?></a></li>
      <?php endfor; ?>
      <li class="page-item <?php echo $_GET['pag'] >= $paginas ? 'disabled' : '' ?>"><a class="page-link" href="?option=docente&pag=<?php echo $_GET['pag'] + 1 ?>">»</a></li>

    </ul>
  </div>
</main>