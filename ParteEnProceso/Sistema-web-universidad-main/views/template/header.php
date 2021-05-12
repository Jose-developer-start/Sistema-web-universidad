<!DOCTYPE html>
<html lang="en">
  <head><base href="./"><!--Dinamics rutas-->
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
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Admin Universidad</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="?option=perfil"><i class="fa fa-user fa-lg"></i> Perfil</a></li>
            <li><a class="dropdown-item" href="./views/"><i class="fa fa-sign-out fa-lg"></i> Salir</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="Imagen">
        <div>
          <p class="app-sidebar__user-name">Nombre</p>
          <p class="app-sidebar__user-designation">Estudiante</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Inicio</span></a></li>
        <?php if(isset($_SESSION['admin']) || isset($_SESSION['docente'])):?>
        <li><a class="app-menu__item active" href="?option=user"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Estudiante</span></a></li>
        <?php endif ?>
        <?php if(isset($_SESSION['admin'])):?>
          <li><a class="app-menu__item active" href="?option=carrera"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Carreras</span></a></li>
        <?php endif ?>
        <?php if(isset($_SESSION['docente'])):?>
        <li><a class="app-menu__item active" href="?option=cursos"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Cursos</span></a></li>
        <?php endif ?>
        <?php if(isset($_SESSION['admin'])):?>
        <li><a class="app-menu__item active" href="?option=periodos"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Periodos</span></a></li>
        <li><a class="app-menu__item active" href="?option=docente"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Docentes</span></a></li>
        <?php endif ?>
        <?php if(isset($_SESSION['estudiante'])): ?>
        <li><a class="app-menu__item active" href="?option=matricula"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Matriculas</span></a></li>
      
        <li><a class="app-menu__item active" href="?option=inscribirse"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Cursos</span></a></li>
        <?php endif; ?>
      </ul>
    </aside>