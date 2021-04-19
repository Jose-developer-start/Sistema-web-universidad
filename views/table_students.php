<?php
  include_once "./procesos/mostrar-datos.php";
?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Gestionar estudiantes</h1>
          <p>Admin</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="tile">
              <h3 class="tile-title">Estudiantes</h3>
              <table class="table table-hover table-responsive-sm">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Correro</th>
                    <th>Carrera</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                <?php $cont=0; foreach($result AS $data): ?>
                  <tr>
                    <td><?php echo $cont +=1 ?></td>
                    <td><?php echo $data['nombres'] ?></td>
                    <td><?php echo $data['apellidos'] ?></td>
                    <td><?php echo $data['email'] ?></td>
                    <td><?php echo $data['nombre'] ?></td>
                    <td>
                        <a class="btn btn-info" href="#">Actualizar</a>
                        <a class="btn btn-danger" href="./procesos/estudiante_proceso.php?id=<?php echo $data['carnet'] ?>">Eliminar</a>
                    </td>
                  </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
      <div>
        <ul class="pagination">
          <li class="page-item disabled"><a class="page-link" href="#">«</a></li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">4</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item"><a class="page-link" href="#">»</a></li>
        </ul>
      </div>
    </main>