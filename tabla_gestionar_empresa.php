
<?php 
session_start();

require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$tildes = $conexion->query("SET NAMES 'utf8'");
$sql="SELECT `id`, `nombre`, `nit`, `dereccion`, `tel`, `estado` FROM `empresa` WHERE estado = 1";
$result=mysqli_query($conexion,$sql);

?>

<div>
	<div class="table-responsive">

		<table class="table table-striped small" id="cargarListadoCursos">
			<thead class="text-center">
				<tr>
					<th class="success">Nombres</th>
					<th class="success">NIT</th>
					<th class="success">Dirección</th>
					<th class="success">Telefono</th>
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