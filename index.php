<?php
session_start();

require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

if (isset($_SESSION['user_id'])) {
  $id = $_SESSION['user_id'];
  $tildes = $conexion->query("SET NAMES 'utf8'");
  $sql="SELECT id, nombres, apellidos, correoElectronico, password, fechaRegistro, ultimoInicio 
	FROM usuarios WHERE id = '$id'";
	$result_login = mysqli_fetch_row(mysqli_query($conexion,$sql));
	$user = null;

  if (count($result_login) > 0) {
    $user = $result_login;

    $countId="SELECT count(id) as id
    FROM empleados WHERE activo = 1";
    $resId=mysqli_fetch_row(mysqli_query($conexion,$countId));

  }
}

$meses = array(1 => 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 
    'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
?>
<!DOCTYPE html>
<html class="" lang="es">
  <head>
    <!-- Site Title-->
    <title>Inicio | Logistic & Solution KLM</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <script src="js/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
    <link rel="icon" href="https://livedemo00.template-help.com/wt_53104_v1/images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,900">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
  </head>
  <body>

    <?php if(count($user) > 0): ?>

      <!-- Page-->
      <div class="page text-center">
        <!-- Page Header-->
        <header class="page-header context-dark" style="background: no-repeat url('https://livedemo00.template-help.com/wt_53104_v1/images/background-01-1920x900.jpg') center; background-size: cover;">
          <!-- RD Navbar-->
          <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-float" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-sm-stick-up-offset="1px" data-md-stick-up-offset="1px" data-lg-stick-up-offset="60px">
              <div class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-top-panel"><span></span></div>
              <!-- <div class="rd-navbar-top-panel">
                <div class="rd-navbar-top-panel-left">
                  <div class="rd-navbar-top-panel-200"><span class="text-middle icon icon-sm mdi mdi-map-marker"></span><a class="text-middle" href="#">2130 Fulton Street, San Diego, CA 94117-1080 USA</a></div>
                  <div><span class="text-middle icon icon-sm mdi mdi-phone"></span><a class="text-middle" href="callto:#">1-800-1234-567</a></div>
                  <div><span class="text-middle icon icon-sm mdi mdi-email-open"></span><a class="text-middle" href="mailto:#">info@demolink.org</a></div>
                </div>
                <div class="rd-navbar-top-panel-right">
                  <div>
                    <ul class="list-inline">
                      <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                      <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                      <li><a class="icon mdi mdi-pinterest-p" href="#"></a></li>
                      <li><a class="icon mdi mdi-vimeo" href="#"></a></li>
                      <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                      <li><a class="icon mdi mdi-rss" href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </div> -->
              <div class="rd-navbar-inner">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="reveal-inline-block brand-name" href="index.php"><img class="img-responsive center-block" src="https://livedemo00.template-help.com/wt_53104_v1/images/logo-dark-233x55.png" width="233" height="55" alt=""></a></div>
                </div>
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <?php if(count($user) > 0 ): ?>
                      <li class="active"><a><?= $user[1]. " ". $user[2];?></a></li>
                    <?php endif; ?>
                    <li><a href="agregar_empleado.php">AGREGAR EMPLEADO</a></li>
                    <li><a href="gestionar_empleado.php">GESTIONAR EMPLEADO</a></li>
                    <?php if(count($user) > 0 ): ?>
                      <li><a href="logout.php">CERRAR SESIÓN</a></li>
                    <?php endif; ?>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </header>

        <main class="page-content">
          <section class="section-80 section-md-90 bg-gray-lighter">
            <div class="shell shell-wide text-md-left">
              <div class="range range-xs-center">
                <div class="cell-md-7 cell-lg-8 cell-xl-8 cell-xl-preffix-1 cell-md-push-1">
                  <div class="range">
                    <div class="cell-md-12 cell-sm-6 cell-lg-6">
                      <!-- Post grid style-->
                      <div class="post-blog-grid post"><img class="img-responsive center-block" src="https://cdn.bizneo.com/blog/wp-content/uploads/2020/07/programa-de-reconocimiento-a-empleados-1024x575.jpg" width="570" height="400" alt="">
                        <div class="caption">
                          <div class="post-blog-date"><?php echo date('d'); ?></div>
                          <div class="small"><?php echo $meses[date('n')]; ?></div>
                        </div>
                        <div class="post-blog-grid-body">
                          <h4 class="post-blog-grid-title text-bold text-center"><a class="text-base" href="agregar_empleado.php">Agregar Empleados</a></h4>
                        </div>
                      </div>
                    </div>
                    <div class="cell-md-12 cell-sm-6 cell-lg-6 offset-top-30 offset-sm-top-0 offset-md-top-30 offset-lg-top-0">
                      <!-- Post grid style-->
                      <div class="post-blog-grid post"><img class="img-responsive center-block" src="https://www.esan.edu.pe/apuntes-empresariales/2015/08/17/Gestion_Beneficio_Cultura_Organizacional_principal/Gestion_Beneficio_Cultura_Organizacional_Principal.jpg" width="570" height="400" alt="">
                        <div class="caption">
                          <div class="post-blog-date"><?php echo date('d'); ?></div>
                          <div class="small"><?php echo $meses[date('n')]; ?></div>
                        </div>
                        <div class="post-blog-grid-body">
                          <h4 class="post-blog-grid-title text-bold text-center"><a class="text-base" href="gestionar_empleado.php">Gestionar Empleados</a></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </main>
        <hr>
        <!-- Page Footer-->
        <footer class="page-footer-widget">
          <div class="shell shell-wide page-footer-min text-md-left">
            <p>&#169; <span id="copyright-year"></span> Todos los derechos reservados <b> <a href="https://www.facebook.com/LiboritoSoftware" target="_blank">LiboritoSoftware </a></b>. Condiciones de uso y 
              política de privacidad
            </p>
          </div>
        </footer>
      </div>
      <!-- Java script-->
      <script src="js/core.min.js"></script>
      <script src="js/script.js"></script>
      
    <?php else: ?>

      <?php echo "<script>window.location='login.php';</script>" ?>

    <?php endif; ?>

  </body>
</html>