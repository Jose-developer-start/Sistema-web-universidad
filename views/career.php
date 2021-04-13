
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
                        <form>
                            <div class="form-group">
                                <label class="control-label">Nombre</label>
                                <input class="form-control" type="text" placeholder="Ingresar carrera">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Duración</label>
                                <input class="form-control" type="number" placeholder="Ingresar duración">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Pemsun</label>
                                <input class="form-control" type="text">
                            </div>

                            <div class="form-group">
                                <label for="exampleSelect1">Seleccionar facultad</label>
                                <select class="form-control" id="exampleSelect1">
                                    <option value=""></option>
                                    <option>Facultad de ciencia del hombre</option>
                                    <option>Facultad de medicina</option>
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
                                <button class="btn btn-primary" type="button"><i
                                        class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a
                                    class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
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
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Licencitura en ciencias de la computacion</td>
                                <td>
                                    <a class="btn btn-info" href="#">Actualizar</a>
                                    <a class="btn btn-danger" href="#">Eliminar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>