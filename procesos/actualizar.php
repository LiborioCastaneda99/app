<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
				$_POST['idUsuarioU'],
				$_POST['nombresU'],
				$_POST['apellidosU'],
				$_POST['telefonoU'],
				$_POST['cedulaU'],
				$_POST['empresaU'],
				$_POST['arlU'],
				$_POST['epsU'],
				$_POST['tipoSangreU'],
				$_POST['correoU'],
				$_POST['ciudadU'],
				$_POST['direccionU'],
				$_POST['cargoU']

			);



	echo $obj->actualizar($datos);
	

 ?>