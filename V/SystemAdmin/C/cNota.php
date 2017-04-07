<?php
session_start();
include('../M/mBD.php');

$accion=$_POST['accion'];
$descripcion=$_POST['descripcion'];

if($accion=="Registrar"){

	
	$sql='INSERT INTO `notas_preparacion` VALUES ("", "'.$descripcion.'");';
if(!$result = $bd->query($sql)){
              die('Ha ocurrido un error. -> [' . $bd->error . ']');
              }
              else{ 

	echo "<script>alert('Registrado con exito.'); window.location.href='../';</script>";

	$_SESSION['pagina']='vNotas.php';
	$_SESSION['reloadedlist']='listAdministracion.php';
}
}


elseif($accion=="Modificar"){
$id=$_POST['idnota'];


	$sql='UPDATE `notas_preparacion` SET `descripcion_nota`="'.$descripcion.'" WHERE `ID`="'.$id.'"';

if(!$result = $bd->query($sql)){
              die('Ha ocurrido un error. -> [' . $bd->error . ']');
              }
              else{ 

	echo "<script>alert('Modificado con exito.'); window.location.href='../';</script>";

	$_SESSION['pagina']='vNotas.php';
	$_SESSION['reloadedlist']='listAdministracion.php';
}

}

elseif($accion=="Eliminar"){

$id=$_POST['idnota'];
	$sql='DELETE FROM `notas_preparacion` WHERE `ID`="'.$id.'"';

if(!$result = $bd->query($sql)){
              die('Ha ocurrido un error. -> [' . $bd->error . ']');
              }
              else{ 

	echo "<script>alert('Datos eliminados.'); window.location.href='../';</script>";
$_SESSION['pagina']='vNotas.php';
	$_SESSION['reloadedlist']='listAdministracion.php';
}
}

?>