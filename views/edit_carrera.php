<?php
    include_once "./procesos/general_crud.php";
    //Parametro enviadod es GET->Obteniendo
    $id_carrera = $_GET['id_carrera'];
    $query = "SELECT * FROM `carreras` WHERE id=$id_carrera";
    $data = get_data($query,'where');

    $queryFacultad = "SELECT * FROM `facultad`";
    $data_facultad = select_data($queryFacultad);
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-laptop"></i>Carreras</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-laptopg"></i></li>
            <li class="breadcrumb-item"><a href="#">Carreras</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="tile">
                <h3 class="tile-title">Editar Carrera</h3>
                <div class="tile-body">
                    <form method="POST" action="./procesos/carrera_procesos.php">
                        <input type="hidden" name="id_carrera" value="<?php echo $data['id'] ?>">
                        <div class="form-group">
                            <label class="control-label">Nombre</label>
                            <input name="nombre" class="form-control" type="text" value="<?php echo $data['nombre'] ?>" placeholder="Ingresar carrera">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Duración</label>
                            <input name="duracion" class="form-control" min="1" type="number" value="<?php echo $data['duracion'] ?>" placeholder="Ingresar duración">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Pemsun</label>
                            <input name="pensum" value="<?php echo $data['pensum'] ?>" class="form-control" type="text">
                        </div>

                        <div class="form-group">
                            <label for="exampleSelect1">Seleccionar facultad</label>
                            <select name="id_facultad" class="form-control" id="exampleSelect1">
                                <option value="<?php echo $data['id_facultad'] ?>" selected>Actual</option>
                                <?php foreach($data_facultad AS $result): ?>
                                <option value="<?php echo $result['id'] ?>"><?php echo $result['nombre'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="tile-footer">
                            <button class="btn btn-primary" name="update_carrera" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Actualizar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="?option=carrera"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>