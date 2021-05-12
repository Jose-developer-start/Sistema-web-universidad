<main class="app-content">
    <div class="row user">
        <div class="col-md-12">
            <div class="profile">
                <div class="info">
                    <?php if (!isset($_SESSION['estudiante'])) : ?>
                        <img class="app-sidebar__user-avatar" width="20px" src="./public/img/fotos_docentes/<?php if (isset($_SESSION['admin'])) {
                                                                                                                echo $_SESSION['admin']['foto'];
                                                                                                            } elseif (isset($_SESSION['docente'])) {
                                                                                                                echo $_SESSION['docente']['foto'];
                                                                                                            } ?>">
                    <?php else : ?>
                        <i class="fa fa-user-circle fa-4x"></i>
                    <?php endif; ?>
                    <h4>
                        <?php if (isset($_SESSION['estudiante'])) {
                            //Mostrar el nombre de perfil
                            echo $_SESSION['estudiante']['nombres'] . " " . $_SESSION['estudiante']['apellidos'];
                        }
                        ?>
                    </h4>
                    <p>Perfil Estudiante </p>
                </div>
                <div class="cover-image"></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="tile p-0">
                <ul class="nav flex-column nav-tabs user-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#user-timeline" data-toggle="tab">Carnet</a></li>
                    <li class="nav-item"><p class="nav-link">
                            <?php if (isset($_SESSION['estudiante'])) {
                                //Mostrar el carnet
                                echo $_SESSION['estudiante']['carnet'];
                            }
                            ?>
                        </p>
                        <!--<button class="btn btn-info btn-outline" onclick="copyText('#carnet')">Copiar</button>-->
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tile mt-4">
                <h3 class="tile-title">Información Personal </h3>
                <div class="tile-body">
                    <h5><label class="control-label col-md-3">Nombres</label></h5>
                    <label class="control-label col-md-9">
                        <?php if (isset($_SESSION['estudiante'])) {
                            //Mostrar el carnet
                            echo $_SESSION['estudiante']['nombres'];
                        }
                        ?>
                    </label>
                    <h5><label class="control-label col-md-3">Apellidos</label></h5>
                    <label class="control-label col-md-9">
                        <?php if (isset($_SESSION['estudiante'])) {
                            //Mostrar el carnet
                            echo $_SESSION['estudiante']['apellidos'];
                        }
                        ?>
                    </label>
                    <h5><label class="control-label col-md-3">Carnet</label></h5>
                    <label class="control-label col-md-9">
                        <?php if (isset($_SESSION['estudiante'])) {
                            //Mostrar el carnet
                            echo $_SESSION['estudiante']['carnet'];
                        }
                        ?>
                    </label>
                    <h5><label class="control-label col-md-3">Gmail</label></h5>
                    <label class="control-label col-md-9">
                        <?php if (isset($_SESSION['estudiante'])) {
                            //Mostrar el carnet
                            echo $_SESSION['estudiante']['email'];
                        }
                        ?>
                    </label>
                    <h5><label class="control-label col-md-3">fecha de nacimiento</label></h5>
                    <label class="control-label col-md-9">
                        <?php if (isset($_SESSION['estudiante'])) {
                            //Mostrar el carnet
                            echo $_SESSION['estudiante']['fecha_nacimiento'];
                        }
                        ?>
                    </label>
                    <h5><label class="control-label col-md-3">Direccion</label></h5>
                    <label class="control-label col-md-9">
                        <?php if (isset($_SESSION['estudiante'])) {
                            //Mostrar el carnet
                            echo $_SESSION['estudiante']['direccion'];
                        }
                        ?>
                    </label>
                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-4">

                                <a href="?option=edit_estudiante&id_estudiante=<?php echo $_SESSION['estudiante']['carnet']; ?>"><button class="btn btn-primary" name="enviar" <i class="fa fa-fw fa-lg fa-check-circle"></i>Editar</button></a>&nbsp;&nbsp;&nbsp;
                                <a class="btn btn-secondary" href="views/login_user.html"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="./public/js/app.js"></script>