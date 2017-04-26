<?php
session_start();
include('../M/mBD.php');

$accion=$_POST['accion'];
$nombre=$_POST['nombre'];
$pass=$_POST['pass'];
$usertype=$_POST['perfil'];

if($accion=="Registrar"){

	
	$sql='INSERT INTO `users` VALUES ("", "'.$nombre.'", "'.$pass.'", "'.$usertype.'");';
if(!$result = $bd->query($sql)){
              die('Ha ocurrido un error. -> [' . $bd->error . ']');
              }
              else{ 

	echo "<script>alert('Registrado con exito.'); window.location.href='../';</script>";

	$_SESSION['pagina']='vUsuarios.php';
	$_SESSION['reloadedlist']='listUsuarios.php';
}
}


elseif($accion=="Modificar"){
$id=$_POST['idUsuario'];


	$sql='UPDATE `users` SET `user`="'.$nombre.'", `password`="'.$pass.'", `usertype`="'.$usertype.'" WHERE `id`="'.$id.'"';

if(!$result = $bd->query($sql)){
              die('Ha ocurrido un error. -> [' . $bd->error . ']');
              }
              else{ 

	echo "<script>alert('Modificado con exito.'); window.location.href='../';</script>";

	$_SESSION['pagina']='vUsuarios.php';
	$_SESSION['reloadedlist']='listUsuarios.php';
}

}

elseif($accion=="Eliminar"){

$id=$_POST['idUsuario'];
	$sql='DELETE FROM `users` WHERE `id`="'.$id.'"';

if(!$result = $bd->query($sql)){
              die('Ha ocurrido un error. -> [' . $bd->error . ']');
              }
              else{ 

	echo "<script>alert('Datos eliminados.'); window.location.href='../';</script>";
$_SESSION['pagina']='vUsuarios.php';
	$_SESSION['reloadedlist']='listUsuarios.php';
}
}

?>