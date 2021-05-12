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
        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Agregar carrera</h3>
                    <div class="tile-body">
                        <form method="POST" action="./procesos/curso-procesos.php">
                            <div class="form-group">
                                <label class="control-label">Fecha de inicio</label>
                                <input name="fecha_i" class="form-control" type="date">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Fecha de finalización</label>
                                <input name="fecha_f" class="form-control" type="date">
                            </div>
                            <div class="tile-footer">
                                <button class="btn btn-primary" type="submit" name="add_periodo"><i
                                        class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a
                                    class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Ciclos</h3>
                    <table class="table table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Inicio</th>
                                <th>Finalización</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($result_perido AS $result):?>
                            <tr>
                                <td>1</td>
                                <td><?php echo $result['fecha_inicio'] ?></td>
                                <td><?php echo $result['fecha_finalizacion'] ?></td>
                                <td>
                                    <a class="btn btn-info" href="#">Actualizar</a>
                                    <a class="btn btn-danger" href="#">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
