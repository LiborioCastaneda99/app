<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();
	if (is_array($_FILES) && count($_FILES) > 0) {
		if (($_FILES["file"]["type"] == "image/pjpeg")
			|| ($_FILES["file"]["type"] == "image/jpeg")
			|| ($_FILES["file"]["type"] == "image/png")) {
				$nombreImg = time().$_FILES['file']['name'];
			if (move_uploaded_file($_FILES["file"]["tmp_name"], "../images/".$nombreImg)) {
				$nombreImg = time().$_FILES['file']['name'];
				
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
				$_POST['cargoU'],
				$nombreImg

			);



		echo $obj->actualizarImg($datos);
		}else {
		echo 0;
		}
		} else {
		echo 0;
		}
		} else {
		
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

		}
	

 ?>