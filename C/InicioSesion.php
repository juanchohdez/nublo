<?php
session_start();
include("../M/mBD.php");

$username=$_POST['username'];
$password=$_POST['password'];
$sql = ' SELECT * FROM `users` WHERE `user` = "'.$username.'" and `password` = "'.$password.'"';

if(!$result = $bd->query($sql)){
    die('There was an error running the query [' . $bd->error . ']');
}




if($result->num_rows==0){
	echo "<script>alert('Usuario no encontrado, verifique sus credenciales');window.history.back();
</script>";




}
else{
while($row = $result->fetch_assoc()){

	$_SESSION['usertype']=$row['usertype'];
	$usertype=$row['usertype'];

if($usertype=='1')

header ("Location: ../V/SystemAdmin/");

elseif($usertype=="2")

header ("Location: ../V/Administrator/");

elseif($usertype=="3")
header ("Location: ../V/Supervisor/");

elseif($usertype=="4")
header ("Location: ../V/User/");



}

}


?>
