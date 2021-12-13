
<?php
session_start();

require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

if (isset($_SESSION['user_id'])) {
  $id = $_SESSION['user_id'];
  $tildes = $conexion->query("SET NAMES 'utf8'");
  $sql="SELECT id, nombres, apellidos, correoElectronico, password, fechaRegistro, ultimoInicio, tipoUsuario, empresa	FROM usuarios WHERE id = '$id'";
	$result_login = mysqli_fetch_row(mysqli_query($conexion,$sql));
	$user = null;

  if (count($result_login) > 0) {
    $user = $result_login;

    $countId="SELECT count(id) as id
    FROM empleados WHERE activo = 1";
    $resId=mysqli_fetch_row(mysqli_query($conexion,$countId));

  }
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Site Title-->
    <title>GESTIONAR EMPRESA | Logistic & Solution KLM</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <script src="js/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
    <link rel="icon" href="img/logolys.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,900">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  </head>
  <body>

    <?php if(count($user) > 0): ?>

      <!-- Page-->
      <div class="page text-center">
        <!-- Page Header-->
        <header class="page-header header-sec context-dark" >
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
                      <div class="rd-navbar-brand"><a class="reveal-inline-block brand-name" href="index.php"><img class="img-responsive center-block" src="img/20211209_200434_0000.png" width="233" height="55" alt=""></a></div>
                    </div>
                    <div class="rd-navbar-nav-wrap">
                      <!-- RD Navbar Nav-->
                      <ul class="rd-navbar-nav">
                        <?php if(count($user) > 0 ): ?>
                          <li><a><?php if($user[7] == 1){ echo 'ADMINISTRADOR';}elseif($user[7] == 2){ echo 'GESTOR EMPRESARIAL';}?></a></li>
                        <?php endif; ?>
                        <li><a href="agregar_usuario.php">AGREGAR USUARIO</a></li>
                        <li><a href="gestionar_usuario.php">GESTIONAR USUARIO</a></li>
                        <?php if($user[7] == 1):?>
                            <li class="active"><a href="gestionar_empresa.php">GESTIONAR EMPRESA</a></li>
                        <?php endif; ?>
                        <?php if(count($user) > 0 ): ?>
                          <li><a href="logout.php">CERRAR SESIÓN</a></li>
                        <?php endif; ?>
                      </ul>
                    </div>
                  </div>
              </nav>
          </div>
        </header>
        <!-- Page Content-->
        <main class="page-content">
          <section style="background: no-repeat url('https://www.ealde.es/wp-content/uploads/2019/05/gestion-de-personas-recursos-humanos.jpg') center; background-size: cover;">
            <div class="breadcrumb-wrapper">
              <div class="shell context-dark section-30 section-md-top-280">
                <h1 class="offset-top-20 text-ubold">GESTIONAR EMPRESA</h1>
                <ol class="breadcrumb">
                </ol>
              </div>
            </div>
          </section>
          <section class="section-80 section-md-30">
            <div class="shell">
              <div class="range range-xs-center offset-top-50">
                <div class="cell-md-12">
                  <div class="">
                    <div class="table-responsive">
                      <div id="tablaDatatable"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </main>

        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable  bg-gray-lighter">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="text-center text-ubold" id="">QR del Usuario</h5>
                <hr class="divider divider-50 divider-primary divider-sm-center offset-top-12">
                              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button> -->
              </div>
              <div class="modal-body">
                <img class="img-responsive center-block" src="" id="img_flayers" name="img_flayers" width="45%" alt="">
                <br>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info btn-xs" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal Editar-->
        <div class="modal fade bd-example-modal-lg" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg   bg-gray-lighter">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Editar Usuario <span id="nombreU"></span></h5>
                      </div>
                      <div class="modal-body">
                          <form id="frmnuevoU"  method="post" action="#" enctype="multipart/form-data">
                              <div class="form-row">
                                  <div class="form-group col-md-3">
                                      <label for="inputNombres4">Nombres</label>
                                      <input type="text" class="form-control input-sm" id="nombresU" name="nombresU" required="">
                                      <input type="text" hidden="" id="idUsuarioU" name="idUsuarioU">
                                  </div>
                                  <div class="form-group col-md-3">
                                      <label for="inputcorreo4">Apellidos</label>
                                      <input type="text" class="form-control input-sm" id="apellidosU" name="apellidosU" required="">
                                  </div>

                                  <div class="form-group col-md-3">
                                      <label for="inputJornada4">Cedula</label>
                                      <input type="text" class="form-control input-sm" id="cedulaU" name="cedulaU" required="">
                                  </div>
                                  <div class="form-group col-md-3">
                                      <label for="inputGrupo4">Telefono</label>
                                      <input type="text" class="form-control input-sm" id="telefonoU" name="telefonoU" required="">
                                  </div>
                                  <div class="form-group col-md-4">
                                      <label for="inputFecha4">Correo</label>
                                      <input type="email" class="form-control input-sm" name="correoU"  id="correoU" required="">
                                  </div>
                                  <div class="form-group col-md-4">
                                      <label for="inputFecha4">Ciudad</label>
                                      <input type="text" class="form-control input-sm" name="ciudadU"  id="ciudadU" required="">
                                  </div>
                                  <div class="form-group col-md-4">
                                      <label for="inputFecha4">Dirección</label>
                                      <input type="text" class="form-control input-sm" id="direccionU" name="direccionU" required="">
                                  </div>
                                  <div class="form-group col-md-3">
                                      <label for="inputFecha4">Cargo</label>
                                      <input type="text" class="form-control input-sm" name="cargoU"  id="cargoU" required="">
                                  </div>
                                  <div class="form-group col-md-3">
                                      <label for="inputIntensidad4">ARL</label>
                                      <input type="text" class="form-control input-sm" id="arlU" name="arlU" required="">
                                  </div>
                                  <div class="form-group col-md-3">
                                      <label for="inputHorario4">EPS</label>
                                      <input type="text" class="form-control input-sm" id="epsU" name="epsU" required="">
                                  </div>
                                  <div class="form-group col-md-3">
                                      <label for="inputHorario4">Tipo de Sangre</label>
                                      <input type="text" class="form-control input-sm" id="tipoSangreU" name="tipoSangreU" required="">
                                  </div>
                                    <div class="form-group col-md-12">
                                      <label class="form-group-label">Subir foto</label>
                                      <input class="form-control" type="file" name="image" id="image">
                                    </div><br>
                              </div>
                          </form>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger btn-icon btn-icon-center btn-sm" data-dismiss="modal">Cerrar</button>
                          <button type="button" class="btn btn-info btn-icon btn-icon-center btn-sm" id="btnActualizar">Actualizar</button>
                      </div>
                  </div>
              </div>
          </div>

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
      <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      
    <?php else: ?>

      <?php echo "<script>window.location='login.php';</script>" ?>

    <?php endif; ?>
    
  </body>
</html>



<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaDatatable').load('tabla_gestionar_empresa.php');
	});
</script>