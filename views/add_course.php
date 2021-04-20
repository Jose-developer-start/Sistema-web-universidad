<?php
  include_once "./procesos/mostrar-datos.php";
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
        <?php foreach($result_cursos AS $result): ?>
        <?php if($result['estado'] == 1): ?>
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title"><?php echo $result['nombre'] ?></h3>
                    <b>Descripción</b>
                    <div class="tile-body"><?php echo $result['descripcion'] ?></div>
                        <div>
                            <b>Inicia: <?php echo $result['fecha_inicio'] ?></b>
                        </div>
                        <div>
                            <b>Finaliza: <?php echo $result['fecha_finalizacion'] ?></b>
                        </div>
                    <form action="./procesos/curso-procesos.php" method="POST">
                        <input name="id_curso" type="hidden" value="<?php echo $result['id'] ?>">
                        <input name="id_estudiante" type="hidden" value="<?php echo $_SESSION['estudiante']['carnet'] ?>">
                        <div class="tile-footer"><button type="submit" name="add_matricula" class="btn btn-primary">Inscribirse</button></div>
                    </form>
                </div>
            </div>
            <?php endif ?>
            <?php endforeach; ?>
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