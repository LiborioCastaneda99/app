
<?php 
session_start();

require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

// if (isset($_SESSION['user_id'])) {
// 	$id = $_SESSION['user_id'];
// 	$tildes = $conexion->query("SET NAMES 'utf8'");
// 	$sql="SELECT id, nombres, apellidos, tipodocumento, documento, tipoPoblacion, email, password, 
// 	fechaRegistro, rol, fecha_sesion, telefono, fechaNacimiento, municipio, sexo, img, centro 
// 	FROM users WHERE id = $id";
// 	$result_login = mysqli_fetch_row(mysqli_query($conexion,$sql));
// 	$user = null;
  
// 	if (count($result_login) > 0) {
// 	  $user = $result_login;
// 	}
// }


$tildes = $conexion->query("SET NAMES 'utf8'");
$sql="SELECT id, nombre, apellidos, cedula, tel, empresa, arl, 
ips, tipo_seguro, email, cargo, ciudad, direccion
FROM usuarios WHERE activo = 1";
$result=mysqli_query($conexion,$sql);

?>

<div>
	<div class="table-responsive">

		<table class="table table-striped small" id="cargarListadoCursos">
			<thead class="text-center">
				<tr>
					<th class="success">Nombres</th>
					<th class="success">Apellidos</th>
					<th class="success">Cedula</th>
					<th class="success">Telefono</th>
					<th class="success">Empresa</th>
					<th class="success">ARL</th>
					<th class="success">EPS</th>
					<th class="success">Tipo de sangre</th>
					<th class="success" width="20%">Acciones</th>
					
				</tr>
			</thead>
			
			<tbody >
				<?php 
				while ($mostrar=mysqli_fetch_row($result)) {
					?>
						<tr class="text-center">
							<td><?php echo strtoupper($mostrar[1]); ?></td>
							<td><?php echo strtoupper($mostrar[2]); ?></td>
							<td><?php echo strtoupper($mostrar[3]); ?></td>
							<td><?php echo strtoupper($mostrar[4]); ?></td>
							<td><?php echo strtoupper($mostrar[5]); ?></td>
							<td><?php echo strtoupper($mostrar[6]); ?></td>
							<td><?php echo strtoupper($mostrar[7]); ?></td>
							<td><?php echo strtoupper($mostrar[8]); ?></td>
							<td style="text-align: center;" >
								<button class="btn btn-picton btn-icon btn-icon-center btn-sm datos" data-text="<?php echo 'https://accountstoretv.000webhostapp.com/qr/generate.php?text=' ?>" data-descr="<?php echo htmlentities($mostrar[0]); ?>" data-toggle="modal" data-target="#staticBackdrop">
									<span class="icon mdi mdi-eye"></span>
								</button>
								<button class="btn btn-steel btn-icon btn-icon-center btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $mostrar[0] ?>')">
									<span class="icon mdi mdi-pencil"></span>
								</button>
							<!-- <span>
								<a class="btn btn-default btn-icon btn-icon-center btn-sm" href="http://accountstoretv.000webhostapp.com/qr/show.php?text=123">
									<span></span><span class="icon mdi mdi-eye"></span>
								</a>
							</span> -->

								<!-- <span class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $mostrar[0] ?>')">
									<span class="fa fa-pencil-square-o"></span>
								</span>

								<span class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#modalVer" onclick="">
									<span class="fa fa-eye"></span>
								</span>
							
								<span class="btn btn-outline-danger btn-sm" onclick="eliminarDatos('<?php echo $mostrar[0] ?>')">
									<span class="fa fa-trash"></span>
								</span> -->
							</td>
						</tr>
					<?php 
				}
				?>
			</tbody>
		</table>
	</div>
</div>

<script type="text/javascript">
	// $(document).ready(function() {
	// 	$('#cargarListadoCursos').DataTable();
	// } );

	var table = $('#cargarListadoCursos').DataTable({
    language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Registros",
        "infoEmpty": "Mostrando 0 de 0 de 0 Registros",
        "infoFiltered": "(Filtrado de _MAX_ total Registros)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Registros",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },
});
</script>