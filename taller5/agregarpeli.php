<?php

include("db.php");

$nombre_add = @$_POST['nombre_add'];
$genero_add = @$_POST['genero_add'];
$descripcion_add = @$_POST['descripcion_add'];
$imagen = @$_FILES['imagen']['name'];
$fileImage = @$_FILES['imagen']['tmp_name'];
$imagen_bg = @$_FILES['imagen_bg']['name'];
$fileImage_bg = @$_FILES['imagen_bg']['tmp_name'];
$fecha = date("Y-m-d");


$ruta = "/peliculas";
$ruta = $ruta."/".$imagen;
move_uploaded_file($fileImage, $ruta);

$ruta2 = "/imagen_bg";
$ruta2 = $ruta2."/".$imagen_bg;
move_uploaded_file($fileImage_bg, $ruta2);


$sql = "INSERT INTO peliculas (nombre, genero, descripcion, fecha, imagen, imagen_bg) VALUES
		 ('".$nombre_add."','".$genero_add."','".$descripcion_add."','".$fecha."','".$imagen."','".$imagen_bg."')";

$valid = Conexion::ejecutar($sql);

if ($valid) {
	// echo "good";
	header("/add_pelicula.php?m=true");
}else{
	// echo "bad";
	header("/add_pelicula.php?m=false");
}

?>