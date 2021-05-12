<?php include_once "./procesos/general_crud.php";
$id_estudiante = $_GET['id_estudiante'];
$query = "SELECT * FROM estudiante WHERE carnet='$id_estudiante'";
$data = get_data($query, "where");
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
                <div class="tile-body">
                    <h3 class="tile-title">Actualizar Informacion Personal</h3>
                    <form class="form-horizontal" method="POST" action="./procesos/estudiante_proceso.php">
                        <input type="hidden" name="id" value="<?php echo $data['carnet'] ?>">
                        <div class="form-group row">
                            <label class="control-label col-md-3">Nombres</label>
                            <div class="col-md-9">
                                <input name="nombres" id="nombres" class="form-control" type="text" placeholder="Ingresar nombres" value="<?php echo $data['nombres'] ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Apellidos*</label>
                            <div class="col-md-9">
                                <input name="apellidos" id="apellidos" class="form-control" type="text" placeholder="Ingresar Apellidos" value="<?php echo $data['apellidos'] ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Email*</label>
                            <div class="col-md-9">
                                <input name="email" class="form-control" type="email" placeholder="Ingresar email" value="<?php echo $data['email'] ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Clave*</label>
                            <div class="col-md-9">
                                <input name="clave" class="form-control" type="text" placeholder="******" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-md-3">Dirección*</label>
                            <div class="col-md-9">
                                <textarea name="direccion" class="form-control" rows="4" placeholder="Ingresar direccion" required><?php echo $data['direccion'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Fecha de nacimiento*</label>
                            <div class="col-md-9">
                                <input name="date_nacimiento" class="form-control" type="date" placeholder="Ingresar " value="<?php echo $data['fecha_nacimiento'] ?>" required>
                            </div>
                        </div>
                        <div class="tile-footer">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-4">
                                    <button class="btn btn-primary" name="update_estudiante" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Actualizar</button>&nbsp;&nbsp;&nbsp;
                                    <a class="btn btn-secondary" href="./views/?option=perfil"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>