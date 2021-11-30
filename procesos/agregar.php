<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['txtNombres'],
		$_POST['txtApellidos'],
		$_POST['txtDocumento'],
		$_POST['txtTelefono'],
		$_POST['txtEmpresa'],
		$_POST['txtEPS'],
		$_POST['txtARL'],
		$_POST['txtTipoSangre'],
		$_POST['txtEmail'],
		$_POST['txtCargo'],
		$_POST['txtCiudad'],
		$_POST['txtDireccion']
		
				);

	echo $obj->agregar($datos);
	

 ?>