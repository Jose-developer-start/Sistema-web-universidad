<?php include_once "./procesos/general_crud.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM docente WHERE id=$id";
    $data = get_data($query,"where");
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
                                <option value="<?php echo $data['estado'] ?>" selected><?php if($data['estado'] == 1){ echo "Activo";} ?></option>
                                <option value="1">Activo</option>
                                <option value="0">Desactivar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Rol Sistema</label>
                            <select class="form-control" id="exampleSelect1" name="rol" required>
                            <option value="<?php echo $data['id_rol'] ?>" selected><?php if($data['id_rol'] == 2){ echo "Profesor";}elseif($data['id_rol'] == 3){ echo "Administrador";} ?></option>
                                <option value="2">Profesor</option>
                                <option value="3">Administrador</option>
                            </select>
                        </div>
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit" name="update_docente"><i class="fa fa-fw fa-lg fa-check-circle"></i>Actualizar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="?option=docente"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>