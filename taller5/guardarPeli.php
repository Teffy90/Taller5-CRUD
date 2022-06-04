<?php

include("db.php");

if(isset($_POST['save'])){
    $nomPeli = $_POST['nomPeli'];
    $duracion = $_POST['duracion'];
    $sinopsis = $_POST['sinopsis'];
    $imagen = $_POST['imagen'];    
    $genero = $_POST['genero'];

    $query = "INSERT INTO pelicula(nombre_pelicula, duracion, sinopsis, imagen, id_genero)";
    VALUES ($nomPeli, '$duracion', '$sinopsis', $imagen, $genero)";
    $result = mysqli_query($conn,$query);
    if (!$resutl){
        $_SESSION['mensaje'] = "No se pudo guardar";
        $_SESSION['tipo_mensaje'] = "success";
        //die("Falló consulta.");
    }
    else{
        $_SESSION['mensaje'] = "Estudiante Guardado";
        $_SESSION['tipo_mensaje'] = "danger";
    }
    header("Location: peliculas.php");
    
}

?>