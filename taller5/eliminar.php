<?php
include("db.php");

$id_pelicula=$_GET['id'];

$sql="DELETE FROM pelicula WHERE id_pelicula ='$id_pelicula'";
$query = mysqli_query($conn,$sql);

header("Location: peliculas.php");

?>