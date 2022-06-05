<?php
    include("db.php");

    $nomPeli = $_POST['nomPeli'];
    $duracion = $_POST['duracion'];
    $sinopsis = $_POST['sinopsis'];
    $imagen = $_POST['imagen'];
    $genero = $_POST['genero'];     
    
    $sql= "UPDATE pelicula SET nombre_pelicula='$nomPeli', duracion='$duracion', sinopsis='$sinopsis', imagen='$imagen', id_genero='$genero'";
    $result = mysqli_query($conn, $sql);
    
    header("Location: peliculas.php");

?>