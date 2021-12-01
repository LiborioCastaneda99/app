
<?php 

error_reporting(0);

session_start();

require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();
$tildes = $conexion->query("SET NAMES 'utf8'");

$correoElectronico=$_POST['email'];

if (isset($_SESSION['user_id'])) {
  header('Location: index.php');
}

if (!empty($_POST['email']) && !empty($_POST['password'])) {

	$sql="SELECT id, nombres, apellidos, correoElectronico, password, fechaRegistro, ultimoInicio 
	FROM usuarios WHERE correoElectronico = '$correoElectronico'";
	$result_login = mysqli_fetch_row(mysqli_query($conexion,$sql));
	$user = null;
  
	if (count($result_login) > 0) {
	  $user = $result_login;
	}

  if (count($result_login) > 0 && ($_POST['password'] == $user[4])) {
    $_SESSION['user_id'] = $user[0];

    echo "<script>window.location='index.php';</script>";

  } else {
    echo "<script>alert('Lo sentimos, su correo o contraseña son erroneos, por favor verifique nuevamente su información y accede al aplicativo.');</script>";
  }

}
?>

<!DOCTYPE html>
<html class="" lang="es">
  <head>
    <!-- Site Title-->
    <title>Iniciar sesión | Logistic & Solution KLM</title>
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
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <?php //include "menu_general_login.php";?>
      <!-- Page Content-->
      <main class="page-content">
        <section class="section-80 section-md-120">
          <img class="img-responsive center-block" src="https://livedemo00.template-help.com/wt_53104_v1/images/logo-dark-233x55.png" alt=""><br>
          <div class="shell">
            <ul class="nav-custom">
              <li><a class="active" href="login.php">Iniciar sesión</a></li>
            </ul>
            <div class="range range-xs-center">
              <div class="cell-sm-8 cell-md-6 cell-lg-4">
                <!-- RD Mailform-->
                <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="login.php">
                  <div class="form-group">
                    <label class="form-label form-label-outside" for="login">Correo electrónico</label>
                    <input class="form-control form-control-gray" id="email" type="email" name="email" data-constraints="@Required">
                  </div>
                  <div class="form-group">
                    <label class="form-label form-label-outside" for="password">Contraseña</label>
                    <input class="form-control form-control-gray" id="password" type="password" name="password" data-constraints="@Required">
                  </div>
                  <button class="btn btn-info btn-block btn-sm offset-top-22" type="submit">Iniciar</button>
                </form>
              </div>
            </div>
          </div>
        </section>
      </main>
      <hr>
      <!-- Page Footer-->
      <footer class="page-footer-widget">
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
  </body>
</html>