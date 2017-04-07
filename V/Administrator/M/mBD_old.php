<?php
function conectar()

	{

	$bd=mysql_connect("localhost","root","secret") or die ("Error al conectar al Servidor");
		mysql_select_db("orion",$bd) or die ("No se conecto a la Base de Datos");

	}