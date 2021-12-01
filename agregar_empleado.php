
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
?>

<!DOCTYPE html>
<html class="" lang="es">
  <head>
    <!-- Site Title-->
    <title>Agregar Empleados | Logistic & Solution KLM</title>
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
        <header class="page-header context-dark" style="background: no-repeat url('https://www.escueladenegociosydireccion.com/wp-content/uploads/2018/08/slide-master-rrhh.jpg') center; background-size: cover;">
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
                  <div class="rd-navbar-brand"><a class="reveal-inline-block brand-name" href="index.php"><img class="img-responsive center-block" src="https://livedemo00.template-help.com/wt_53104_v1/images/logo-dark-233x55.png" width="233" height="55" alt=""></a></div>
                </div>
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <?php if(count($user) > 0 ): ?>
                      <li><a><?= $user[1]. " ". $user[2];?></a></li>
                    <?php endif; ?>
                    <li class="active"><a href="agregar_empleado.php">AGREGAR EMPLEADO</a></li>
                    <li><a href="gestionar_empleado.php">GESTIONAR EMPLEADO</a></li>
                    <?php if(count($user) > 0 ): ?>
                      <li><a href="logout.php">CERRAR SESIÓN</a></li>
                    <?php endif; ?>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
          <div class="shell shell-wide section-70 section-md-90">
            <div class="range range-xs-middle range-xs-justify text-md-left">
              <div class="cell-xl-4 cell-lg-12 cell-md-12 text-left">
                <div class="responsive-tabs text-md-left nav-custom-dark view-animate fadeInUpSmall" data-type="horizontal">
                  <div class="resp-tabs-container nav-custom-tab nav-custom-wide">
                    <div>
                      <form class="small" id="frmnuevo" method="post" action="#" enctype="multipart/form-data">
                        <div class="range">
                          <div class="range offset-top-24">
                            <div class="cell-sm-3">
                              <div class="form-group">
                                  <label class="form-group-label">Nombres</label>
                                  <input class="form-control" type="text" id="txtNombres" name="txtNombres">
                                </div>
                            </div>
                            <div class="cell-sm-3 offset-top-15 offset-sm-top-0">
                              <div class="form-group">
                                <label class="form-group-label">Apellidos</label>
                                <input class="form-control" type="text" id="txtApellidos" name="txtApellidos">
                              </div>
                            </div>
                            <div class="cell-sm-3 offset-top-15 offset-sm-top-0">
                              <div class="form-group">
                                <label class="form-group-label">Cédula de Ciudadanía</label>
                                <input class="form-control" type="number" id="txtDocumento" name="txtDocumento" data-zeros="true" min="0">
                              </div>
                            </div>
                            <div class="cell-sm-3 offset-top-15 offset-sm-top-0">
                              <div class="form-group">
                                <label class="form-group-label">Teléfono</label>
                                <input class="form-control" type="number" id="txtTelefono" name="txtTelefono" data-zeros="true" min="0">
                              </div>
                            </div>
                          </div>
                          <div class="range offset-top-15">
                            <div class="cell-sm-3">
                              <div class="form-group">
                                <label class="form-group-label">Empresa</label>
                                <input class="form-control" type="text" name="txtEmpresa" id="txtEmpresa">
                              </div>
                            </div>
                            <div class="cell-sm-3 offset-top-15 offset-sm-top-0">
                              <div class="form-group">
                                <label class="form-group-label">EPS</label>
                                <input class="form-control" type="text" name="txtEPS" id="txtEPS">
                              </div>
                            </div>
                            <div class="cell-sm-3 offset-top-15 offset-sm-top-0">
                              <div class="form-group">
                                <label class="form-group-label">ARL</label>
                                <input class="form-control" type="text" name="txtARL" id="txtARL">
                              </div>
                            </div>
                            <div class="cell-sm-3 offset-top-15 offset-sm-top-0">
                              <div class="form-group">
                              <label class="form-group-label">Tipo de sangre</label>
                              <input class="form-control" type="text" name="txtTipoSangre" id="txtTipoSangre">
                              </div>
                            </div>
                          </div>
                          <div class="range offset-top-15">
                            <div class="cell-sm-3">
                              <div class="form-group">
                                <label class="form-group-label">Email</label>
                                <input class="form-control" type="email" name="txtEmail" id="txtEmail">
                              </div>
                            </div>
                            <div class="cell-sm-3 offset-top-15 offset-sm-top-0">
                              <div class="form-group">
                                <label class="form-group-label">Cargo</label>
                                <input class="form-control" type="text" name="txtCargo" id="txtCargo">
                              </div>
                            </div>
                            <div class="cell-sm-3 offset-top-15 offset-sm-top-0">
                              <div class="form-group">
                                <label class="form-group-label">Ciudad</label>
                                <input class="form-control" type="text" name="txtCiudad" id="txtCiudad">
                              </div>
                            </div>
                            <div class="cell-sm-3 offset-top-15 offset-sm-top-0">
                              <div class="form-group">
                              <label class="form-group-label">Dirección</label>
                              <input class="form-control" type="text" name="txtDireccion" id="txtDireccion">
                              </div>
                            </div>
                            <div class="cell-sm-12 offset-top-15 offset-sm-top-0">
                              <div class="form-group">
                              <label class="form-group-label">Subir foto</label>
                              <input class="form-control" type="file" name="image" id="image">
                              </div>
                            </div>
                          </div>
                            <div class="cell-md-12 offset-top-15 text-center">
                              <button type="button"  id="btnAgregarnuevo" class="btn btn-info btn-sm btn-naira btn-naira-up btnAgregarnuevo"><span class="icon mdi mdi-account-multiple-plus"></span><span>Agregar empleado</span></button>
                              <!-- <input type="button" class="btn btn-info btn-sm btn-naira btn-naira-up btnAgregarnuevo" value="Agregar empleado"><span class="icon mdi mdi-account-multiple-plus"></span> -->
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </header>
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
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php else: ?>

      <?php echo "<script>window.location='login.php';</script>" ?>

    <?php endif; ?>

  </body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('.btnAgregarnuevo').click(function(){
      var formData = new FormData();			
      var files = $('#image')[0].files[0];
      formData.append('file',files);

			var txtNombres = document.getElementsByName("txtNombres")[0].value;
      var txtApellidos = document.getElementsByName("txtApellidos")[0].value;
      var txtDocumento = document.getElementsByName("txtDocumento")[0].value;
      var txtTelefono = document.getElementsByName("txtTelefono")[0].value;
      var txtEmpresa = document.getElementsByName("txtEmpresa")[0].value;
      var txtEPS = document.getElementsByName("txtEPS")[0].value;
      var txtARL = document.getElementsByName("txtARL")[0].value;
      var txtTipoSangre = document.getElementsByName("txtTipoSangre")[0].value;
      var txtEmail = document.getElementsByName("txtEmail")[0].value;
      var txtCargo = document.getElementsByName("txtCargo")[0].value;
      var txtCiudad = document.getElementsByName("txtCiudad")[0].value;
			var txtDireccion = document.getElementsByName("txtDireccion")[0].value;
			// var image = document.getElementsByName("image")[0].value;
      formData.append('txtNombres',txtNombres);
      formData.append('txtApellidos',txtApellidos);
      formData.append('txtDocumento',txtDocumento);
      formData.append('txtTelefono',txtTelefono);
      formData.append('txtEmpresa',txtEmpresa);
      formData.append('txtEPS',txtEPS);
      formData.append('txtARL',txtARL);
      formData.append('txtTipoSangre',txtTipoSangre);
      formData.append('txtEmail',txtEmail);
      formData.append('txtCargo',txtCargo);
      formData.append('txtCiudad',txtCiudad);
      formData.append('txtDireccion',txtDireccion);


            if ((txtNombres == "") || (txtApellidos == "")|| (txtDocumento == "")|| (txtTelefono == "")|| (txtEmpresa == "")|| (txtEPS == "")|| (txtARL == "")
            || (txtTipoSangre == "")|| (txtEmail == "")|| (txtCargo == "")|| (txtCiudad == "")|| (txtDireccion == "")) {  //COMPRUEBA CAMPOS VACIOS
                Swal.fire({
                icon: 'error',
                text: 'Por favor revisar, hay campos vacidos.',
                showConfirmButton: false,
                timer: 1500
                })
			}else{
				$.ajax({
					type:"POST",
					data:formData,
					url:"procesos/agregar.php",
           contentType: false,
            processData: false,
					success:function(r){
						if(r==1){
							$('#agregarnuevosdatosmodal').modal('toggle');
							$('#frmnuevo')[0].reset();
							// $('#tablaDatatable').load('tabla.php?name_group='+valor);
							Swal.fire(
							'Correcto!',
							'Se ha guardado correctamente!',
							'success'
							);
						}else{
							Swal.fire(
							'Error!',
							'No se ha guardado correctamente!',
							'error'
							);
						}
					}
				});
			}
				
		});
	});
</script>