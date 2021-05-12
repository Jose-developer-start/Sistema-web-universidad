<?php
  include_once "./procesos/general_crud.php";
  $id_periodo = $_GET['id_periodo'];
  $query = "SELECT * FROM periodo WHERE id=$id_periodo";
  $data = get_data($query,"where")
?>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-calendar"></i> Periodos</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-calendarg"></i></li>
                <li class="breadcrumb-item"><a href="#">Periodos</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="tile">
                    <h3 class="tile-title">Actualizar Periodo</h3>
                    <div class="tile-body">
                        <form method="POST" action="./procesos/curso-procesos.php">
                        <input type="hidden" name="id_periodo" value="<?php echo $data['id'] ?>">
                            <div class="form-group">
                                <label class="control-label">Fecha de inicio</label>
                                <input name="fecha_i" value="<?php echo $data['fecha_inicio'] ?>" class="form-control" type="date" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Fecha de finalización</label>
                                <input name="fecha_f" value="<?php echo $data['fecha_finalizacion'] ?>" class="form-control" type="date" required>
                            </div>
                            <div class="tile-footer">
                                <button class="btn btn-primary" type="submit" name="update_periodo"><i
                                        class="fa fa-fw fa-lg fa-check-circle"></i>Actualizar</button>&nbsp;&nbsp;&nbsp;<a
                                    class="btn btn-secondary" href="?option=periodos"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
