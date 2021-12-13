<?php 

	class crud{
		public function agregar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$tildes = $conexion->query("SET NAMES 'utf8'");
		
			$sql="INSERT INTO empleados ( nombre, apellidos, cedula, tel, id_empresa, arl, img_usu, ips, tipo_seguro, email, cargo, ciudad, direccion) 
			VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[6]','$datos[12]',
			'$datos[5]','$datos[7]','$datos[8]','$datos[9]','$datos[10]','$datos[11]')";
	
			return mysqli_query($conexion,$sql);
		}

		public function obtenDatos($id){
			$obj =  new conectar();
			$conexion = $obj->conexion();
			$tildes = $conexion->query("SET NAMES 'utf8'");
			$sql = "SELECT e.id, e.nombre, e.apellidos, e.cedula, e.tel, emp.id, e.arl, e.ips, 
			e.tipo_seguro, e.email, e.cargo, e.ciudad, e.direccion 
			FROM empleados e INNER JOIN empresa emp ON emp.id = e.id_empresa 
			WHERE e.activo = 1 AND emp.estado = 1 AND e.id = $id";
			$result = mysqli_query($conexion,$sql);
			$ver = mysqli_fetch_row($result);
			
			$datos = array(
				'id' => $ver[0],
				'nombre' => $ver[1],
				'apellidos' => $ver[2],
				'cedula' => $ver[3],
				'telefono' => $ver[4],
				'empresa' => $ver[5],
				'arl' => $ver[6],
				'ips' => $ver[7],
				'tipo_seguro' => $ver[8],
				'email' => $ver[9],
				'cargo' => $ver[10],
				'ciudad' => $ver[11],
				'direccion' => $ver[12]
			);
			return $datos;
		}

		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$tildes = $conexion->query("SET NAMES 'utf8'");
		
			$sql="UPDATE empleados SET nombre ='$datos[1]',apellidos='$datos[2]', cedula='$datos[4]',tel='$datos[3]',
			arl='$datos[6]',ips='$datos[7]',tipo_seguro='$datos[8]',email='$datos[9]',
			ciudad='$datos[10]',direccion='$datos[11]', cargo='$datos[12]' WHERE id='$datos[0]' and activo = 1";
			return mysqli_query($conexion,$sql);
		}

		public function actualizarImg($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$tildes = $conexion->query("SET NAMES 'utf8'");
		
			$sql="UPDATE empleados SET nombre ='$datos[1]',apellidos='$datos[2]', cedula='$datos[4]',tel='$datos[3]',
			arl='$datos[6]',ips='$datos[7]',tipo_seguro='$datos[8]',email='$datos[9]',
			ciudad='$datos[10]',direccion='$datos[11]', cargo='$datos[12]', img_usu = '$datos[13]' WHERE id='$datos[0]' and activo = 1";
			return mysqli_query($conexion,$sql);
		}
	}

 ?>