<?php include_once "./procesos/mostrar-datos.php"; ?>
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
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="tile">
                <h3 class="tile-title">Actualizar docente</h3>
                <div class="tile-body">
                    <form method="POST" action="./procesos/docente_procesos.php">
                        <input name="id" type="hidden" value="<?php echo $_GET['id']?>">
                        <div class="form-group">
                            <label class="control-label">Estado</label>
                            <select class="form-control" id="exampleSelect1" name="estado" required>
                                <option value="" selected disabled>Seleccionar estado</option>
                                <option value="1">Activo</option>
                                <option value="0">Desactivar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Rol Sistema</label>
                            <select class="form-control" id="exampleSelect1" name="rol" required>
                                <option value="" selected disabled>Seleccionar rol</option>
                                <option value="2">Profesor</option>
                                <option value="3">Administrador</option>
                            </select>
                        </div>
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit" name="update_docente"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>