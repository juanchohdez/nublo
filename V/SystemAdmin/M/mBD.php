<?php
$bd = new mysqli('localhost', 'root', 'secret', 'orion');

if($bd->connect_errno > 0){
    die('Unable to connect to database [' . $bd->connect_error . ']');
}



