<?php

$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "logistica";

// Create connection
$conexion = mysqli_connect($servername, $username, $password, $dbname);

$idUsuario = $_GET['id'];

$tildes = $conexion->query("SET NAMES 'utf8'");
$sql="SELECT e.id, e.nombre, e.apellidos, e.cedula, e.tel, emp.nombre, e.arl, e.ips, e.tipo_seguro, e.email, e.cargo, 
e.ciudad, e.direccion, e.img_usu, e.estadoArl, e.estadoEps, e.estadoEmpresa
FROM empleados e INNER JOIN empresa emp ON emp.id = e.id_empresa 
WHERE e.activo = 1 AND emp.estado = 1 AND e.id = $idUsuario";
$result=mysqli_fetch_row(mysqli_query($conexion,$sql));
$empresa = $result[5];

if (($result[14] == 0) || ($result[15] == 0) || ($result[16] == 0)) {

    if ($result[14] == 0) {
        
        $vencido = 'la ARL';
        die("<script>alert('Hola, el usuario {$result[1]} no ha reportado el pago para {$vencido}, por lo tanto no podrá ingresar.')</script>");

    }elseif ($result[15] == 0) {
        
        $vencido = 'la EPS';
        die("<script>alert('Hola, el usuario {$result[1]} no ha reportado el pago para {$vencido}, por lo tanto no podrá ingresar.')</script>");

    }elseif ($result[16] == 0) {
        
        $vencido = ' tú estás despedido de la EMPRESA';
        die("<script>alert('Hola, el usuario {$result[1]} no se encuentra vinculado a la empresa {$result[5]}, por lo tanto no podrá ingresar.')</script>");

    }

}


$sqlMarcarDetalle="SELECT id, estado, comentario FROM detalle_acceso WHERE idUsuario = $idUsuario ORDER BY id DESC LIMIT 1";
$res=mysqli_fetch_row(mysqli_query($conexion,$sqlMarcarDetalle));
$hoy = date('y-m-d h:m:s');

if (count($res[0]) > 0 && $res[1] == 1) {

    $sqlInsertarSalida="INSERT INTO detalle_acceso ( idUsuario, nom_empresa, comentario, fechaIngresoEgreso, estado) 
    VALUES ($idUsuario, '$empresa','Salida', '$hoy', '0')";
    $resInsertar = mysqli_query($conexion,$sqlInsertarSalida);
    // die("<script>alert('Debe agregar salida')</script>");

}elseif (count($res[0]) > 0 && $res[1] == 0) {
    
    $sqlInsertar="INSERT INTO detalle_acceso ( idUsuario, nom_empresa, comentario, fechaIngresoEgreso, estado) 
    VALUES ($idUsuario, '$empresa','Ingreso', '$hoy', '1')";
    $resInsertar = mysqli_query($conexion,$sqlInsertar);
    // die('Deberia agregar entrada');
}elseif (count($res[0]) == 0) {
    $sqlInsertar="INSERT INTO detalle_acceso ( idUsuario, nom_empresa, comentario, fechaIngresoEgreso, estado) 
    VALUES ($idUsuario, '$empresa','Ingreso', '$hoy', '1')";
    $resInsertar = mysqli_query($conexion,$sqlInsertar);
    // die('Deberia agregar entrada => '.$hoy);
}


$html = '
<table border = "0" cellspacing="0" cellpadding="0" width="100%" style="border-collapse: collapse; margin: 0px auto;">
    <tr>
        <td align="center"><img src="../img/logo2.jpeg" style="border-radius: 50% 20% / 10% 40%; width:50%; "></td>
    </tr>
    <tr>
        <td style="text-align:center;"><h1>Datos Del Usuario</h1></td>
    </tr>
</table>


<hr />

<table border = "1" cellspacing="0" cellpadding="0" width="100%" style="border-collapse: collapse; margin: 0px auto;">
<tr>
<th colspan="2" style="text-align:center; height: 40px; background-color:#0164a5; color: #fff;">Nombres</th>
    <td colspan="2" style="text-align:center; height: 40px;">'.$result[1].'</td>
    <td rowspan="8"><center><img width= "250px" height="250px" src="../images/'.$result[13].'"></center></td>
</tr>
<tr>
    <th colspan="2" style="text-align:center; height: 40px; background-color:#0164a5; color: #fff;">Apellidos</th>
    <td colspan="2" style="text-align:center; height: 40px;">'.$result[2].'</td>
</tr>
<tr>
    <th colspan="2" style="text-align:center; height: 40px; background-color:#0164a5; color: #fff;">Cedula</th>
    <td colspan="2" style="text-align:center; height: 40px;">'.$result[3].'</td>
</tr>
<tr>
    <th colspan="2" style="text-align:center; height: 40px; background-color:#0164a5; color: #fff;">Teléfono</th>
    <td colspan="2" style="text-align:center; height: 40px;">'.$result[4].'</td>
</tr>
<tr>
    <th colspan="2" style="text-align:center; height: 40px; background-color:#0164a5; color: #fff;">Empresa</th>
    <td colspan="2" style="text-align:center; height: 40px;">'.$result[5].'</td>
</tr>
<tr>
    <th colspan="2" style="text-align:center; height: 40px; background-color:#0164a5; color: #fff;">ARL</th>
    <td colspan="2" style="text-align:center; height: 40px;">'.$result[6].'</td>
</tr>
<tr>
    <th colspan="2" style="text-align:center; height: 40px; background-color:#0164a5; color: #fff;">EPS</th>
    <td colspan="2" style="text-align:center; height: 40px;">'.$result[7].'</td>
</tr>
<tr>
    <th colspan="2" style="text-align:center; height: 40px; background-color:#0164a5; color: #fff;">Tipo De Sangre</th>
    <td colspan="2" style="text-align:center; height: 40px;">'.$result[8].'</td>
</tr>

</table>

';


//==============================================================
//==============================================================
//==============================================================

include("mpdf.php");

$mpdf=new mPDF(); 

$mpdf->WriteHTML($html);
$mpdf->SetTitle('Datos del empleado '.$result[1]. ' '.$result[2]);
$file_name = 'Datos de CC-'.$result[3].'.pdf';
$mpdf->Output($file_name, 'I');
exit;

//==============================================================
//==============================================================
//==============================================================


?>