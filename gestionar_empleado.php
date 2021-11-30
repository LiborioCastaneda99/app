
<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Site Title-->
    <title>Gestionar Empleados | Logistic & Solution KLM</title>
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  </head>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <?php include "menu_general.php";?>
      <!-- Page Content-->
      <main class="page-content">
        <section style="background: no-repeat url('https://www.ealde.es/wp-content/uploads/2019/05/gestion-de-personas-recursos-humanos.jpg') center; background-size: cover;">
          <div class="breadcrumb-wrapper">
            <div class="shell context-dark section-30 section-md-top-280">
              <h1 class="offset-top-20 text-ubold">Gestionar Empleados</h1>
              <ol class="breadcrumb">
              </ol>
            </div>
          </div>
        </section>
        <section class="section-80 section-md-50">
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
              <h5 class="text-center text-ubold" id="">QR del Empleado</h5>
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
              <button type="button" class="btn btn-primary btn-xs" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

       <!-- Modal Editar-->
       <div class="modal fade bd-example-modal-lg" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg   bg-gray-lighter">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Empleado <span id="nombreU"></span></h5>
                    </div>
                    <div class="modal-body">
                        <form id="frmnuevoU">
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
                                    <label for="inputHorario4">Empresa</label>
                                    <input type="text" class="form-control input-sm" id="empresaU" name="empresaU" required="">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputFecha4">Cargo</label>
                                    <input type="text" class="form-control input-sm" name="cargoU"  id="cargoU" required="">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputIntensidad4">ARL</label>
                                    <input type="text" class="form-control input-sm" id="arlU" name="arlU" required="">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputHorario4">EPS</label>
                                    <input type="text" class="form-control input-sm" id="epsU" name="epsU" required="">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputHorario4">Tipo de Sangre</label>
                                    <input type="text" class="form-control input-sm" id="tipoSangreU" name="tipoSangreU" required="">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-icon btn-icon-center btn-sm" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary btn-icon btn-icon-center btn-sm" id="btnActualizar">Actualizar</button>
                    </div>
                </div>
            </div>
        </div>

      <hr>
      <!-- Page Footer-->
      <footer class="page-footer-widget">
        <div class="shell shell-wide page-footer-min text-md-left">
          <p>&#169; <span id="copyright-year"></span> Todos los derechos reservados. Condiciones de uso y 
            <a href="#">política de privacidad</a>
          </p>
        </div>
      </footer>
    </div>
    <!-- Java script-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>



<script type="text/javascript">
    $(document).on('click', '.datos', function () {
      var descr = $(this).attr('data-descr');
     var url = "https://accountstoretv.000webhostapp.com/pdfs/datosEmpleado.php?id="+descr;
    var text = $(this).attr('data-text');
    $('#staticBackdrop #img_flayers').attr("src", text+url);
    $('#staticBackdrop input[name=nombreProducto]').val(text);

    });

	$(document).ready(function(){
		$('#tablaDatatable').load('tabla_gestionar_empleados.php');
	});

  function agregaFrmActualizar(idUsuario){
		$.ajax({
			type:"POST",
			data:"id=" + idUsuario,
			url:"procesos/obtenDatos.php",

			success:function(r){
				datos=jQuery.parseJSON(r);
				$('#idUsuarioU').val(datos['id']);
				$('#nombresU').val(datos['nombre']);
				$('#apellidosU').val(datos['apellidos']);
				$('#telefonoU').val(datos['telefono']);
				$('#cedulaU').val(datos['cedula']);
				$('#empresaU').val(datos['empresa']);
				$('#arlU').val(datos['arl']);
				$('#epsU').val(datos['ips']);
				$('#tipoSangreU').val(datos['tipo_seguro']);
				$('#correoU').val(datos['email']);
				$('#cargoU').val(datos['cargo']);
				$('#ciudadU').val(datos['ciudad']);
				$('#direccionU').val(datos['direccion']);
			}
		});
	}

  $('#btnActualizar').click(function(){
			datos=$('#frmnuevoU').serialize();
            
			var nombresU = document.getElementsByName("nombresU")[0].value;
      var correoU = document.getElementsByName("correoU")[0].value;
      var apellidosU = document.getElementsByName("apellidosU")[0].value;
      var telefonoU = document.getElementsByName("telefonoU")[0].value;
      var cedulaU = document.getElementsByName("cedulaU")[0].value;
      var empresaU = document.getElementsByName("empresaU")[0].value;
      var arlU = document.getElementsByName("arlU")[0].value;
      var epsU = document.getElementsByName("epsU")[0].value;
      var tipoSangreU = document.getElementsByName("tipoSangreU")[0].value;
			var ciudadU = document.getElementsByName("ciudadU")[0].value;
			var direccionU = document.getElementsByName("direccionU")[0].value;

      if ((nombresU == "")|| (correoU == "")|| (apellidosU == "")|| (telefonoU == "")|| (cedulaU == "")|| (empresaU == "")
      || (arlU == "")|| (epsU == "")|| (tipoSangreU == "") || (ciudadU == "")|| (direccionU == "")) {  //COMPRUEBA CAMPOS VACIOS
          Swal.fire({
          icon: 'error',
          text: 'Por favor revisar, hay campos vacidos.',
          showConfirmButton: false,
          timer: 1500
          })
			}else{
				$.ajax({
					type:"POST",
					data:datos,
					url:"procesos/actualizar.php",
					success:function(r){
						if(r==1){
							$('#modalEditar').modal('toggle');
							$('#tablaDatatable').load('tabla_gestionar_empleados.php');
							Swal.fire(
							'Correcto!',
							'Se ha actualizado correctamente!',
							'success'
							);					
						}else{
							Swal.fire(
							'Error!',
							'No se ha actualizado correctamente!',
							'error'
							);					
						}
					}
				});
			}
		});

</script>