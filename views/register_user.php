<?php
    include "../procesos/conexion.php";
    include "../procesos/general_crud.php";
    $result = select_data("SELECT * FROM carreras");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../">
    <!--Dinamics rutas-->
    <meta name="description" content="Sistema web para la administracion de suscripciones a universidad">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Panel administrativo">
    <meta property="og:title" content="Desarrollado en BS 4">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <title>Admin de Universidad</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="public/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="app sidebar-mini">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99"
            style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">
        <div class="logo">
            <h1>Vali</h1>
        </div>
        <div class="tile">
            <h3 class="tile-title">Registrate en nuestra plataforma</h3>
            <div class="tile-body">
                <form class="form-horizontal" method="POST" action="./procesos/procesos-user.php">
                    <div class="form-group row">
                        <label class="control-label col-md-3">Carnet</label>
                        <input name="carnet" id="carnet" class="form-control" type="hidden">
                        <div class="col-md-9">
                            <p id="viewCarnet"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Nombres*</label>
                        <div class="col-md-9">
                            <input name="nombres" id="nombres" class="form-control" type="text" placeholder="Ingresar nombres" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Apellidos*</label>
                        <div class="col-md-9">
                            <input name="apellidos" id="apellidos" class="form-control" type="text" placeholder="Ingresar Apellidos" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Email*</label>
                        <div class="col-md-9">
                            <input name="email" class="form-control" type="email" placeholder="Ingresar email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Clave*</label>
                        <div class="col-md-9">
                            <input name="clave" class="form-control" type="text" placeholder="Ingresar clave" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Género</label>
                        <div class="col-md-9">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" value="M" name="genero" required>Masculino
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" value="F" name="genero" required>Femenino
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Dirección*</label>
                        <div class="col-md-9">
                            <textarea name="direccion" class="form-control" rows="4"
                                placeholder="Ingresar direccion" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Fecha de nacimiento*</label>
                        <div class="col-md-9">
                            <input name="date_nacimiento" class="form-control" type="date" placeholder="Ingresar " required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3" for="exampleSelect1">Selecionar carrera</label>
                        <div class="col-md-9">
                            <select class="form-control" id="exampleSelect1" name="carrera" required>
                            <option value="" selected disabled></option>
                            <?php foreach($result AS $data): ?>
                                <option value="<?php echo $data['id'] ?>"><?php echo $data['nombre'] ?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-3">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" required> Acepta los terminos y condiciones
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-4">
                                <button class="btn btn-primary" name="enviar" type="submit"><i
                                        class="fa fa-fw fa-lg fa-check-circle"></i>Registrar</button>&nbsp;&nbsp;&nbsp;
                                <a class="btn btn-secondary" href="views/login_user.php"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="public/js/jquery-3.3.1.min.js"></script>
    <script src="public/js/popper.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/main.js"></script>
    <script src="public/js/app.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="public/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript">
        // Login Page Flipbox control
        $('.login-content [data-toggle="flip"]').click(function () {
            $('.login-box').toggleClass('flipped');
            return false;
        });
    </script>
</body>

</html>