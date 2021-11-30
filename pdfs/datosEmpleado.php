<?php


require_once "../clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$tildes = $conexion->query("SET NAMES 'utf8'");
$sql="SELECT id, nombre, apellidos, cedula, tel, empresa, arl, 
ips, tipo_seguro, email, cargo, ciudad, direccion
FROM usuarios WHERE activo = 1 AND id = {$_GET['id']}";
$result=mysqli_fetch_row(mysqli_query($conexion,$sql));

$html = '
<table border = "0" cellspacing="0" cellpadding="0" width="100%" style="border-collapse: collapse; margin: 0px auto;">
    <tr>
        <td><img src="../img/logo2.jpeg" width="27,5%"></td>
        <td style="text-align:center;"><h1>Datos Del Empleado</h1></td>
        <td><img src="../img/almaviva.png" width="27,5%"></td>

    </tr>
</table>

<hr />

<table border = "1" cellspacing="0" cellpadding="0" width="100%" style="border-collapse: collapse; margin: 0px auto;">
<tr>
<th colspan="2" style="text-align:center; height: 40px; background-color:#0164a5; color: #fff;">Nombres</th>
    <td colspan="2" style="text-align:center; height: 40px;">'.$result[1].'</td>
    <td rowspan="8"><center><img width= "250px" height="250px" src="../img/perfil.png"></center></td>
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
$mpdf->Output();
exit;

//==============================================================
//==============================================================
//==============================================================


?>