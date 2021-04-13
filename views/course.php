
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
                    <h3 class="tile-title">Agregar cursos</h3>
                    <div class="tile-body">
                        <form>
                            <div class="form-group">
                                <label class="control-label">Nombre</label>
                                <input class="form-control" type="text" placeholder="Ingresar nombre">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Descripción</label>
                                <textarea class="form-control" rows="4" placeholder="Agregar descripción"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Cupos</label>
                                <input class="form-control" min="0" type="number">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Estado</label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="estado">Activo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="estado">Inactivo
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelect1">Seleccionar periodo</label>
                                <select class="form-control" id="exampleSelect1">
                                  <option>1</option>
                                  <option>2</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="exampleSelect1">Seleccionar carrera</label>
                                <select class="form-control" id="exampleSelect1">
                                  <option>1</option>
                                  <option>2</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="exampleSelect1">Seleccionar docente</label>
                                <select class="form-control" id="exampleSelect1">
                                  <option>1</option>
                                  <option>2</option>
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
                  <h3 class="tile-title">Cursos</h3>
                  <table class="table table-hover table-responsive">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Correro</th>
                        <th>Carrera</th>
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