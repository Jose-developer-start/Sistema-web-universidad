
    <main class="app-content">
      <div class="row user">
        <div class="col-md-12">
          <div class="profile">
            <div class="info"><img class="user-img" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg">
              <h4>
                <?php if(isset($_SESSION['estudiante'])){
                    //Mostrar el nombre de perfil
                    echo $_SESSION['estudiante']['nombres']." ".$_SESSION['estudiante']['apellidos'];
                }
                ?>
              </h4>
              <p>Perfil Estudiante  </p>
            </div>
            <div class="cover-image"></div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tile p-0">
            <ul class="nav flex-column nav-tabs user-tabs">
              <li class="nav-item"><a class="nav-link active" href="#user-timeline" data-toggle="tab">Carnet</a></li>
              <li class="nav-item"><a class="nav-link" href="#user-settings" data-toggle="tab">
              <?php if(isset($_SESSION['estudiante'])){
                    //Mostrar el carnet
                    echo $_SESSION['estudiante']['carnet'];
                }
                ?>
                </a></li>              
            </ul>
          </div>
        </div>
        <div class="col-md-9">
          <div class="tile mt-4">
            <h3 class="tile-title">Información Personal </h3>
            <div class="tile-body">
                <h5><label class="control-label col-md-3">Nombres</label></h5>
                <label class="control-label col-md-9">
                    <?php if(isset($_SESSION['estudiante'])){
                    //Mostrar el carnet
                    echo $_SESSION['estudiante']['nombres'];
                }
                ?>
                </label>
               <h5><label class="control-label col-md-3">Apellidos</label></h5>
                <label class="control-label col-md-9">
                    <?php if(isset($_SESSION['estudiante'])){
                    //Mostrar el carnet
                    echo $_SESSION['estudiante']['apellidos'];
                }
                ?>
                </label>
                <h5><label class="control-label col-md-3">Carnet</label></h5>
                <label class="control-label col-md-9">
                    <?php if(isset($_SESSION['estudiante'])){
                    //Mostrar el carnet
                    echo $_SESSION['estudiante']['carnet'];
                }
                ?>
                </label>
                <h5><label class="control-label col-md-3">Gmail</label></h5>
                <label class="control-label col-md-9">
                    <?php if(isset($_SESSION['estudiante'])){
                    //Mostrar el carnet
                    echo $_SESSION['estudiante']['email'];
                }
                ?>
                </label>
                <h5><label class="control-label col-md-3">fecha de nacimiento</label></h5>
                <label class="control-label col-md-9">
                    <?php if(isset($_SESSION['estudiante'])){
                    //Mostrar el carnet
                    echo $_SESSION['estudiante']['fecha_nacimiento'];
                }
                ?>
                </label>
                <h5><label class="control-label col-md-3">Direccion</label></h5>
                <label class="control-label col-md-9">
                    <?php if(isset($_SESSION['estudiante'])){
                    //Mostrar el carnet
                    echo $_SESSION['estudiante']['direccion'];
                }
                ?>
                </label>
                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-4">
                            <form class="form-horizontal" method="POST" action="./views/editar.php" >
                            <a href="editar.php"><button class="btn btn-primary" name="enviar" type="submit"><i
                                        class="fa fa-fw fa-lg fa-check-circle"></i>Editar</button></a>&nbsp;&nbsp;&nbsp;
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
