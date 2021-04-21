<?php
  include_once "./procesos/mostrar-datos.php";
  //Contador para mostrar en vez del id
  $cont = 0;
?>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
                <p>A free and open source Bootstrap 4 admin template</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            </ul>
        </div>
        <?php if(isset($_GET['error'])): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Estado:</strong> <?php echo base64_decode($_GET['error']) ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <?php endif ?>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                  <h3 class="tile-title">Matriculas</h3>
                  <table class="table table-hover table-responsive-sm">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Asignatura</th>
                        <th>Fecha de matricula</th>
                        <th>Docente</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($result_matricula AS $result): ?>
                    <?php if($result['id_estudiante'] === $_SESSION['estudiante']['carnet']):?>
                      <tr>
                        <td><?php echo $cont += 1 ?></td>
                        <td><?php echo $result['nombre'] ?></td>
                        <td><?php echo $result['fecha'] ?></td>
                        <td><?php echo $result['nombres'] ?></td>
                        <td>
                            <a class="btn btn-danger" href="./procesos/curso-procesos.php?id_curso=<?php echo $result['id'] ?>">Eliminar</a>
                        </td>
                      </tr>
                      <?php endif ?>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
        </div>
    </main>
    