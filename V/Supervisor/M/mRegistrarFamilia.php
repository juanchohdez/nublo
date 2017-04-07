<?php

include("../M/mBD.php");
conectar();


	$sql='INSERT INTO `familias`(`ID`, `nombre_familia`, `color_familia`, `imagen_familia`, `texto_familia`) VALUES ("", "'.$nombre_familia.'", "'.$color_familia.'", "'.$imagen_familia.'", "'.$texto_familia.'");';
$query=mysql_query($sql);


if(!$query){
	echo "<script>alert('Ha ocurrido un error al registrar, por favor intente mas tarde.');</script>";
}

else{

}



?>