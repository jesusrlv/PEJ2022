<?php
session_start();

if (isset($_SESSION['usr'])) {
  if($_SESSION['perfil']==2){

  }
  else{
    header('Location: prcd/sort.php');
    die();
  }
  
} else {
  // En caso contrario redirigimos el visitante a otra página

  header('Location: prcd/sort.php');
  die();
}

include('../dashboard/prcd/conn.php');

// variables de sesión

    $usuario = $_SESSION['usr'];
    $id = $_SESSION['id'];
    $perfil = $_SESSION['perfil'];
    $nombre = $_SESSION['nombre'];

?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title> PEJ 2021</title>

    <link rel="icon" type="image/png" href="../img/icon.ico"/>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
    <script src="https://kit.fontawesome.com/4d63b5ef28.js" crossorigin="anonymous"></script>

    <!-- íconos Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Bootstrap core CSS -->
    <link href="../dashboard/css/bootstrap.css" rel="stylesheet">

    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
        body{background-color:gray;}
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-light sticky-top flex-md-nowrap p-0 bg-dark text-light">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3 text-center" href="#">
    <h5 class="text-center display-7 text-light" style="margin-left:3px;"><b>PEJ 2021</b></h5>
    </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      
        
       
        <a class="btn btn-outline-light btn-sm" href="prcd/sort.php" role="button"><i class="fas fa-sign-out-alt"></i> Salir</a>    
        
      </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-info sidebar collapse">
      <div class="sidebar-sticky pt-3">
        
        <ul class="navbar-nav px-3 text-center">
            <li class="align-middle">
                   <img src="../img/png_logo.png" width="81%" class="" alt="" loading="lazy">  
      
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-center text-center align-items-center px-3 mt-4 mb-1 text-muted">

          <span class="text-light">
          Bienvenido<br><i class="fas fa-user"></i> 
            <?php
            
              echo utf8_encode($nombre);
            
            ?>
          </span>
        </h6>
        <hr style="color: dimgrey;">

        <ul class="nav flex-column">
 
           <li class="nav-item">
            <a class="nav-link active text-light" href="dashboard.php">
              <i class="fas fa-laptop-house"></i> 
              Inicio <span class="sr-only">(current)</span>
            </a>
          </li>
          <hr style="color: dimgrey;">

          <li class="nav-item">
            <a class="nav-link text-light" href="busqueda.php">
               
            <i class="bi bi-search"></i> Búsqueda de usuario
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="revision_calificaciones.php">
               
            <i class="bi bi-card-checklist"></i> Calificaciones
            </a>
          </li>
         
        </ul>
    
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 bg-secondary bg-gradient" style="background-color:; height:100%;">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 ">
        
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
           
          </div>
         
        </div>
      </div>

      <h5 class="text-light" style="margin-top:-27px"> <?php
                  date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
                  $fecha_actual=strftime("%Y-%m-%d");
                  $hora_actual=strftime("%H:%M:%S");

                  // echo 'Zacatecas, Zac., '.$hora_actual.', '. $fecha_actual;
              ?></h5>

      <!-- <hr style="color: dimgrey;"> -->
      <h2></h2>
    <div class="container-fluid ">


      <div class="jumbotron jumbotron-fluid " style="background-color:#f8f9fa; width:100%;border-radius:5px;  margin-top:25px; padding-top:45px;">
        <div class="container-fluid">
          <h1 class="h1">BIENVENIDO AL SISTEMA ADMINISTRADOR</h1>
          <p class="lead"><i class="bi bi-award"></i> PREMIO ESTATAL DE LA JUVENTUD 2022 | INJUVENTUD</p>
          <hr class="my-4">

        <!-- consulta de validación -->


        <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-1">
          
          <div class="col mb-12">
            <div class="card text-dark bg-light mb-12" style="box-shadow: 4px -1px 0px -1px #005eff;">
              <div class="card-body">
                <h5 class="card-title text-primary"><i class="bi bi-clipboard-check"></i> REVISIÓN</h5>
                <p class="card-text">Revisión de información del PEJ</p>
                <hr>
                <!-- 1 completo -->
                <p>
                <a href="revision_vista_completa.php" class="card-link btn btn-outline-primary"><i class="bi bi-person-bounding-box"></i> Completados y No completados</a>

                <a href="reporte_jurado.php" class="card-link btn btn-outline-primary"><i class="bi bi-person-bounding-box"></i> Reporte por jurado</a>
                
                </p>
                <p>
                
                <a href="revision_docs.php" class="card-link btn btn-outline-primary"><i class="bi bi-person-bounding-box"></i> Datos generales</a>
                </p>
                </div>
            </div>
          </div>


          <div class="col mb-12" style="margin-top:9px">
            <div class="card text-dark bg-light mb-12" style="box-shadow: 4px -1px 0px -1px #005eff;">
              <div class="card-body">
                <h5 class="card-title text-primary"><i class="bi bi-list-ol"></i> CALIFICACIONES</h5>
                <p class="card-text">Realiza la búsqueda de un postulante al PEJ.</p>
                <hr>
                <a href="revision_calificaciones.php" class="card-link btn btn-outline-primary"><i class="bi bi-card-checklist"></i> Visualizar</a>
                <a href="lista_ganadores_expedientes.php" class="card-link btn btn-outline-primary"><i class="bi bi-folder"></i> Expedientes</a>
                <a href="lista_ganadores.php" class="card-link btn btn-outline-primary"><i class="bi bi-star"></i> Ganadores</a>
              </div>
            </div>
          </div>


          <div class="col mb-12" style="margin-top:9px">
            <div class="card text-dark bg-light mb-12" style="box-shadow: 4px -1px 0px -1px #005eff;">
              <div class="card-body">
                <h5 class="card-title text-primary"><i class="bi bi-search"></i> USUARIOS</h5>
                <p class="card-text">Reportes del sistema del PEJ.</p>
                <hr>
                <a href="revision_administradores.php" class="card-link btn btn-outline-primary"><i class="bi bi-person-fill"></i> Administradores</a>
                <a href="revision_jurado.php" class="card-link btn btn-outline-primary"><i class="bi bi-people-fill"></i> Jurado</a>
              
              </div>
            </div>
          </div>
          
          <div class="col mb-12" style="margin-top:9px">
            <div class="card text-dark bg-light mb-12" style="box-shadow: 4px -1px 0px -1px #005eff;">
              <div class="card-body">
                <h5 class="card-title text-primary"><i class="bi bi-search"></i> BÚSQUEDA DE USUARIOS</h5>
                <p class="card-text">Realiza la búsqueda de un postulante al PEJ.</p>
                <hr>
                <a href="busqueda.php" class="card-link btn btn-outline-primary"><i class="bi bi-search"></i> Buscar</a>
                
              </div>
            </div>
          </div>

      </div> <!-- container -->
      
      <hr>
      

      

      </div>


    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="css/bootstrap.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="css/dashboard.js"></script></body>
</html>

