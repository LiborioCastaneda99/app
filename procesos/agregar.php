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
					$_POST['txtDireccion'],
					$nombreImg
							);
				echo $obj->agregar($datos);

			}else {
				echo 0;
			}
		} else {
			echo 0;
		}
	} else {
		echo 0;
	}
	

	

 ?>