<?php
session_start();
include('../M/mBD.php');

$accion=$_POST['accion'];
$nombre=$_POST['nombre'];
$valor=$_POST['valor'];
$recargo=$_POST['recargo'];
$habilitado=$_POST['habilitado'];

if($accion=="Registrar"){

	
	$sql='INSERT INTO `impuestos` VALUES ("", "'.$nombre.'", "'.$valor.'", "'.$recargo.'", "'.$habilitado.'");';
if(!$result = $bd->query($sql)){
              die('Ha ocurrido un error. -> [' . $bd->error . ']');
              }
              else{ 

	echo "<script>alert('Registrado con exito.'); window.location.href='../';</script>";

	$_SESSION['pagina']='vimpuesto.php';
	$_SESSION['reloadedlist']='listAdministracion.php';
}
}


elseif($accion=="Modificar"){
$id=$_POST['idimpuesto'];


	$sql='UPDATE `impuestos` SET `nombre_impuesto`="'.$nombre.'", `valor_impuesto`="'.$valor.'", `recargo_impuesto`="'.$recargo.'", `habilitado`="'.$habilitado.'" WHERE `ID`="'.$id.'"';

if(!$result = $bd->query($sql)){
              die('Ha ocurrido un error. -> [' . $bd->error . ']');
              }
              else{ 

	echo "<script>alert('Modificado con exito.'); window.location.href='../';</script>";

	$_SESSION['pagina']='vimpuesto.php';
	$_SESSION['reloadedlist']='listAdministracion.php';
}

}

elseif($accion=="Eliminar"){

$id=$_POST['idimpuesto'];
	$sql='DELETE FROM `impuestos` WHERE `ID`="'.$id.'"';

if(!$result = $bd->query($sql)){
              die('Ha ocurrido un error. -> [' . $bd->error . ']');
              }
              else{ 

	echo "<script>alert('Datos eliminados.'); window.location.href='../';</script>";
$_SESSION['pagina']='vimpuesto.php';
	$_SESSION['reloadedlist']='listAdministracion.php';
}
}

?>