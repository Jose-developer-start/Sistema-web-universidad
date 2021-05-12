<?php
include_once "./procesos/mostrar-datos.php";

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
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">Agregar carrera</h3>
                <div class="tile-body">
                    <form method="POST" action="./procesos/carrera_procesos.php">
                        <div class="form-group">
                            <label class="control-label">Nombre</label>
                            <input name="nombre" class="form-control" type="text" placeholder="Ingresar carrera">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Duración</label>
                            <input name="duracion" min="1" class="form-control" type="number" placeholder="Ingresar duración">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Pemsun</label>
                            <input name="pensum" class="form-control" type="text">
                        </div>

                        <div class="form-group">
                            <label for="exampleSelect1">Seleccionar facultad</label>
                            <select name="id_facultad" class="form-control" id="exampleSelect1">
                                <option value="" selected disabled>Seleccionar</option>
                                <?php foreach($data_facultad AS $result): ?>
                                <option value="<?php echo $result['id'] ?>"><?php echo $result['nombre'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox">I accept the terms and
                                    conditions
                                </label>
                            </div>
                        </div>
                        <div class="tile-footer">
                            <button class="btn btn-primary" name="add_carrera" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="?option=carrera"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">Carreras</h3>
                <table class="table table-hover table-responsive">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombres</th>
                            <th>Duración</th>
                            <th>Pensum</th>
                            <th>Facultad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($result_carrera_facultad AS $result):?>
                        <tr>
                            <td><?php echo $result['id'] ?></td>
                            <td><?php echo $result['nombre'] ?></td>
                            <td><?php echo $result['duracion'] ?></td>
                            <td><?php echo $result['pensum'] ?></td>
                            <td><?php echo $result['facultad'] ?></td>
                            <td>
                                <a class="btn btn-info" href="?option=edit_carrera&id_carrera=<?php echo $result['id']?>">Actualizar</a>
                                <a class="btn btn-danger" href="./procesos/carrera_procesos.php?id_carrera=<?php echo $result['id']?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>