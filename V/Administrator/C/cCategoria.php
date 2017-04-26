<?php
session_start();
include('../M/mBD.php');

$accion=$_POST['accion'];
$nombre=$_POST['nombre'];
$color=$_POST['color'];
$imagen='NULL';
$texto=$_POST['texto'];

if($accion=="Registrar"){

	
	$sql='INSERT INTO `categorias` VALUES ("", "'.$nombre.'", "'.$color.'", "'.$imagen.'", "'.$texto.'");';
if(!$result = $bd->query($sql)){
              die('Ha ocurrido un error. -> [' . $bd->error . ']');
              }
              else{ 


	echo "<script>alert('Registrado con exito.'); window.location.href='../';</script>";

	$_SESSION['pagina']='vCategoria.php';
	$_SESSION['reloadedlist']='listArticulos.php';
}
}


elseif($accion=="Modificar"){
$id=$_POST['idcategoria'];


	$sql='UPDATE `categorias` SET `nombre_categoria`="'.$nombre.'", `color_categoria`="'.$color.'", `imagen_categoria`="'.$imagen.'", `texto_categoria`="'.$texto.'" WHERE `ID`="'.$id.'"';
if(!$result = $bd->query($sql)){
              die('Ha ocurrido un error. -> [' . $bd->error . ']');
              }
              else{ 


	echo "<script>alert('Modificado con exito.'); window.location.href='../';</script>";

	$_SESSION['pagina']='vCategoria.php';
	$_SESSION['reloadedlist']='listArticulos.php';
}

}

elseif($accion=="Eliminar"){

$id=$_POST['idcategoria'];

	$sql='DELETE FROM `categorias` WHERE `ID`="'.$id.'"';

if(!$result = $bd->query($sql)){
              die('Ha ocurrido un error. -> [' . $bd->error . ']');
              }
              else{ 


	echo "<script>alert('Datos eliminados.'); window.location.href='../';</script>";
$_SESSION['pagina']='vCategoria.php';
	$_SESSION['reloadedlist']='listArticulos.php';
}
}

?>