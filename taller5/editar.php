<?php

require_once("db.php");

$id = $_REQUEST['id'];
$nombre = $_POST['nombre_add'];
$genero = $_POST['genero_add'];
$descripcion = $_POST['descripcion_add'];


$sql = "UPDATE peliculas SET nombre='$nombre', genero='$genero', descripcion='$descripcion' WHERE id = '$id'";

$valid = Conexion::ejecutar($sql);

if ($valid) {
	//echo "GOOD";
	header(".php");
}else{
	//echo "BAD";
	header(".php");
}

?>