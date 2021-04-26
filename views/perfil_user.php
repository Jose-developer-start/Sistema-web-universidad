
    <main class="app-content">
      <div class="row user">
        <div class="col-md-12">
          <div class="profile">
            <div class="info"><img class="user-img" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg">
              <h4>
                <?php if(isset($_SESSION['estudiante'])){
                    //Mostrar el nombre de perfil
                    echo $_SESSION['estudiante']['nombres']." ".$_SESSION['estudiante']['nombres'];
                }
                ?>
              </h4>
              <p>FrontEnd Developer</p>
            </div>
            <div class="cover-image"></div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tile p-0">
            <ul class="nav flex-column nav-tabs user-tabs">
              <li class="nav-item"><a class="nav-link active" href="#user-timeline" data-toggle="tab">Carnet</a></li>
              <li class="nav-item"><a class="nav-link" href="#user-settings" data-toggle="tab">458954DJ</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-9">
          <div class="tile mt-4">
            <h3 class="tile-title">Registrate en nuestra plataforma</h3>
            <div class="tile-body">
                <form class="form-horizontal">
                    <div class="form-group row">
                        <label class="control-label col-md-3">Nombres*</label>
                        <div class="col-md-9">
                            <input name="nombres" disabled class="form-control" type="email" placeholder="Ingresar nombres">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Apellidos*</label>
                        <div class="col-md-9">
                            <input name="apellidos" disabled class="form-control" type="email" placeholder="Ingresar Apellidos">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Email*</label>
                        <div class="col-md-9">
                            <input name="email" class="form-control" type="email" placeholder="Ingresar email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Clave*</label>
                        <div class="col-md-9">
                            <input name="clave" class="form-control" type="email" placeholder="Ingresar clave">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Dirección*</label>
                        <div class="col-md-9">
                            <textarea name="direccion" class="form-control" rows="4"
                                placeholder="Ingresar direccion"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Fecha de nacimiento*</label>
                        <div class="col-md-9">
                            <input name="date_nacimiento" class="form-control" type="date" placeholder="Ingresar ">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3" for="exampleSelect1">carrera</label>
                        <div class="col-md-9">
                          <input name="carrera" disabled class="form-control" type="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-3">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> Acepta los terminos y condiciones
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-4">
                                <button class="btn btn-primary" type="submit"><i
                                        class="fa fa-fw fa-lg fa-check-circle"></i>Actualizar</button>&nbsp;&nbsp;&nbsp;
                                <a class="btn btn-secondary" href="views/login_user.html"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
      </div>
    </main>
