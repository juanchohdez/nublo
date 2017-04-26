<?php
session_start();
include('../M/mBD.php');

$accion=$_POST['accion'];
$nombre=$_POST['nombre'];
$color=$_POST['color'];
$imagen='NULL';
$texto=$_POST['texto'];

if($accion=="Registrar"){

	
	$sql='INSERT INTO `familias` VALUES ("", "'.$nombre.'", "'.$color.'", "'.$imagen.'", "'.$texto.'");';
if(!$result = $bd->query($sql)){
              die('Ha ocurrido un error. -> [' . $bd->error . ']');
              }
              else{ 

	echo "<script>alert('Registrado con exito.'); window.location.href='../';</script>";

	$_SESSION['pagina']='vFamilia.php';
	$_SESSION['reloadedlist']='listArticulos.php';
}
}


elseif($accion=="Modificar"){
$id=$_POST['idfamilia'];


	$sql='UPDATE `familias` SET `nombre_familia`="'.$nombre.'", `color_familia`="'.$color.'", `imagen_familia`="'.$imagen.'", `texto_familia`="'.$texto.'" WHERE `ID`="'.$id.'"';

if(!$result = $bd->query($sql)){
              die('Ha ocurrido un error. -> [' . $bd->error . ']');
              }
              else{ 

	echo "<script>alert('Modificado con exito.'); window.location.href='../';</script>";

	$_SESSION['pagina']='vFamilia.php';
	$_SESSION['reloadedlist']='listArticulos.php';
}

}

elseif($accion=="Eliminar"){

$id=$_POST['idfamilia'];

	$sql='DELETE FROM `familias` WHERE `ID`="'.$id.'"';

if(!$result = $bd->query($sql)){
              die('Ha ocurrido un error. -> [' . $bd->error . ']');
              }
              else{ 

	echo "<script>alert('Datos eliminados.'); window.location.href='../';</script>";
$_SESSION['pagina']='vFamilia.php';
	$_SESSION['reloadedlist']='listArticulos.php';
}
}

?>