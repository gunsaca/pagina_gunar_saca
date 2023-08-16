<?php
if ($_GET) {
	$nombre = $_GET['nom'];
	$apellido = $_GET['ape'];

	echo "Bienvenido ".$nombre." ".$apellido;

} else {

	$nom = $_POST['nombre'];
	$ape = $_POST['apellido'];

	echo "Bienvenido ".$nom."".$ape." a mi sitio";
}
	

	
?>