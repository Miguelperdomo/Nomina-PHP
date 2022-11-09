<?php

try{
	$bd = new PDO('mysql:host=localhost;dbname=nomina', 'root', '');
	
  
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bd->query("set names utf8;");

}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}
?>