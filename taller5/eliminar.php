<?php

include("db.php");
// no estoy seguro si es ud o id_peliculas o id_genero
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM pelicula WHERE id = $id";
    $result = mysqli_query($conn,$query);
    if (!$result) {
        $_SESSION['mensaje'] = "No se pudo eliminar pelicula";
        $_SESSION['tipo_mensaje'] = "danger";
        die("Falló consulta.");
    }
    else{
    $_SESSION['mensaje'] = "pelicula eliminado";
    $_SESSION['tipo_mensaje'] = "info";
    }

header("Location: index.php");
}

?>