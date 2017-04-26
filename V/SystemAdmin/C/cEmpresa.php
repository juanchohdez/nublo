<?php
session_start();
include('../M/mBD.php');

				$nombrefiscal=$_POST['nombrefiscal'];
                $nombrecomercial=$_POST['nombrecomercial'];
                $cif=$_POST['cif'];
                $direccion=$_POST['direccion'];
                $poblacion=$_POST['poblacion'];
                $provincia=$_POST['provincia'];
                $codigopostal=$_POST['codigopostal'];
                $telefono=$_POST['telefono'];
                $email=$_POST['email'];
                $paginaweb=$_POST['paginaweb'];
                $instagram=$_POST['instagram'];
                $facebook=$_POST['facebook'];


   $sql="SELECT * FROM empresa";
                  if(!$result = $bd->query($sql)){
                
              }
              else{ 

            
                while($results = $result->fetch_assoc()){
               
            $id=$results['ID'];
        }}

	$sql2='UPDATE `empresa` SET `nombre_fiscal`="'.$nombrefiscal.'", `nombre_comercial`="'.$nombrecomercial.'", `cif`="'.$cif.'", `direccion_empresa`="'.$direccion.'", `poblacion_empresa`="'.$poblacion.'", `provincia_empresa`="'.$provincia.'", `codigo_postal_empresa`="'.$codigopostal.'", `telefono_empresa`="'.$telefono.'", `email_empresa`="'.$email.'", `web_empresa`="'.$paginaweb.'", `instagram_empresa`="'.$instagram.'", `facebook_empresa`="'.$facebook.'" WHERE `ID`="'.$id.'"';
if(!$result = $bd->query($sql2)){
              die('Ha ocurrido un error. -> [' . $bd->error . ']');
              }
              else{ 


	echo "<script>alert('Modificado con exito.'); window.location.href='../';</script>";

	$_SESSION['pagina']='vEmpresa.php';
	$_SESSION['reloadedlist']='listAdministracion.php';
}

?>