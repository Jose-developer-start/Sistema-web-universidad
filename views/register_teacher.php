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
                <form class="form-horizontal" action="./procesos/docente_procesos.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="control-label col-md-3">Nombres*</label>
                        <div class="col-md-9">
                            <input name="nombres" class="form-control" type="text" placeholder="Ingresar nombres">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Apellidos*</label>
                        <div class="col-md-9">
                            <input name="apellidos" class="form-control" type="text" placeholder="Ingresar Apellidos">
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
                            <input name="clave" class="form-control" type="password" placeholder="Ingresar clave">
                        </div>
                    </div>
                
                    <div class="form-group row">
                        <label class="control-label col-md-3">Foto*</label>
                        <div class="col-md-9">
                            <input name="foto" class="form-control" type="file">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3" for="exampleSelect1">Rol</label>
                        <div class="col-md-9">
                            <select class="form-control" id="exampleSelect1" name="rol">
                                <option value=""></option>
                                <option value="2">Docente</option>
                            </select>
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
                                <button class="btn btn-primary" type="submit" name="guardar_data"><i
                                        class="fa fa-fw fa-lg fa-check-circle"></i>Registrar</button>&nbsp;&nbsp;&nbsp;
                                <a class="btn btn-secondary" href="views/"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
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