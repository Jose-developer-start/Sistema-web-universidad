<?php 
  session_start();
  session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
  <head><base href="../"><!--Dinamics rutas-->
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
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
        <div class="pace-progress-inner"></div>
      </div>
      <div class="pace-activity"></div></div>
      <section class="material-half-bg">
        <div class="cover"></div>
      </section>
    <section class="login-content">
        <div class="logo">
          <h1>Vali</h1>
        </div>
        <div class="login-box">
          <form class="login-form" action="./index.php" method="post">
            <h3 class="login-head mb-0"><i class="fa fa-lg fa-fw fa-user"></i>INGRESAR</h3>
            <div class="form-group">
              <label class="control-label">CARNET</label>
              <input name="carnet" class="form-control" type="text" placeholder="Email" autofocus="">
            </div>
            <div class="form-group">
              <label class="control-label">CLAVE</label>
              <input name="clave" class="form-control" type="password" placeholder="Password">
            </div>
            <div class="form-group">
              <div class="utility">
                <p class="semibold-text mb-0"><a href="#" data-toggle="flip">Restablecer clave ?</a></p>
              </div>
            </div>
            <div class="form-group btn-container">
              <button class="btn btn-primary btn-block" type="submit" name="enviar"><i class="fa fa-sign-in fa-lg fa-fw"></i>INGRESAR</button>
              <a href="views/register_user.html" class="btn btn-info btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>REGISTRARTE</a>
            </div>
            
          </form>
          <form class="forget-form" action="index.html">
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Restablecer clave ?</h3>
            <div class="form-group">
              <label class="control-label">EMAIL</label>
              <input class="form-control" type="text" placeholder="Email">
            </div>
            <div class="form-group btn-container">
              <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
            </div>
            <div class="form-group mt-3">
              <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Regresar al login</a></p>
            </div>
          </form>
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
        $('.login-content [data-toggle="flip"]').click(function() {
            $('.login-box').toggleClass('flipped');
            return false;
        });
      </script>
  </body>
</html>