<?php include_once "./procesos/general_crud.php";
    $id = $_GET['id_curso'];
    $query = "SELECT * FROM `cursos` WHERE id=$id";
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
                <h3 class="tile-title">Editar Curso</h3>
                <div class="tile-body">
                    <form action="./procesos/curso-procesos.php" method="post">
                        <input type="hidden" name="id_curso" value="<?php echo $data['id'] ?>">
                        <div class="form-group">
                            <label class="control-label">Nombre</label>
                            <input name="nombre_curso" class="form-control" type="text" value="<?php echo $data['nombre'] ?>" placeholder="Ingresar nombre">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Descripción</label>
                            <textarea name="descripcion" class="form-control" rows="4" placeholder="Agregar descripción"><?php echo $data['descripcion'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Cupos</label>
                            <input name="numero_cupos" class="form-control" value="<?php echo $data['cupos'] ?>" min="0" max="70" type="number">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Estado</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" <?php if($data['estado'] == 1){echo "checked";}?> type="radio" value="1" name="estado">Activo
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" <?php if($data['estado'] == 0){echo "checked";}?> type="radio" value="0" name="estado">Inactivo
                                </label>
                            </div>
                        </div>
                        <!--
                        <div class="form-group">
                            <label for="exampleSelect1">Seleccionar periodo</label>
                            <select class="form-control" id="exampleSelect1" name="fecha">
                                <option value="" selected disabled>Seleccionar</option>
                                <?php foreach ($result_perido as $result) : ?>
                                    <option value="<?php echo $result['id'] ?>"><?php echo $result['fecha_inicio'] . ' a ' . $result['fecha_finalizacion'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Seleccionar carrera</label>
                            <select class="form-control" id="exampleSelect1" name="carrera">
                                <option value="" selected disabled>Seleccionar</option>
                                <?php foreach ($result_carrera as $result) : ?>
                                    <option value="<?php echo $result['id'] ?>"><?php echo $result['nombre'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Seleccionar docente</label>
                            <select class="form-control" id="exampleSelect1" name="docente">
                                <option value="" selected disabled>Seleccionar</option>
                                <?php foreach ($result_docente as $result) : ?>
                                    <?php if ($result['id'] === $_SESSION['docente']['id']) : ?>
                                        <option value="<?php echo $result['id'] ?>"><?php echo $result['nombres'] . ' ' . $result['apellidos'] ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        -->
                        <div class="tile-footer">
                            <input class="btn btn-primary" type="submit" name="update_curso" value="Agregar">&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="?option=cursos"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>