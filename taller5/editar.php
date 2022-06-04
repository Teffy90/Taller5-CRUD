<?php
include("db.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM pelicula WHERE id = $id";
    $result = mysqli_query($conn,$query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $id = $row['id_genero'];
        $nom = $row['nombre_pelicula'];
        $dura = $row['duracion'];
        $sinop = $row['sinopsis'];
        $img = $row['imagen'];
    }
}
if(isset($_POST['edit'])){
    $id = $row['id'];
    $nom = $row['nombre_pelicula'];
    $dura = $row['duracion'];
    $sinop = $row['sinopsis'];
    $img = $row['imagen'];
    $query = "UPDATE pelicula SET id_genero=$id, nombre_pelicula=$nom, duracion=$dura, sinogsis=$sinog, imagen=$img
    WHERE id = $id";
    $result = mysqli_query($conn,$query);
    if(!$result) {
        $_SESSION['mensaje'] = "No se pudo editar la pelicula";
        $_SESSION['tipo_mensaje'] = "danger";
        //die("Fallo consulta");
    }
    else{
        $_SESSION['mensaje'] = "pelicula editada";
        $_SESSION['tipo_mensaje'] = "success";
    }

    header("Location: peliculas.php");
}
?>
<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD con PHP</title>
    <!-----Boostrap --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Catálago</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="navbar-brand" href="index.php">Inico</a>
                </li>
                <li class="nav-item">
                <a class="navbar-brand" href="peliculas.php">Películas</a>
                </li>
            </ul>
            <a class="navbar-brand" href="acceder.php">Acceder</a>
            </div>
        </div>
    </nav>
    <section>
        <div class= "container p-4">
            <h2>Películas</h2>
            <p>A continuación se va a mostrar la información de todas las películas disponibles en el catálogo.</p>
            <!--Agregar un evento que cuando se de click al boton muestre el formulario de agrergar la pelicula -->
            <input type="button" class="btn btn-success btn-block" name="agregar_peli" ide="agregar_peli" value="Agregar Pelicula">
            <br/>
            <br/>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Genero</th>
                <th scope="col">Duración</th>
                <th scope="col">Sinopsis</th>
                <th scope="col">Imagen</th>
				<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editar.php?id=<?php echo $id; ?>" method="POST">
                    <div class="mb-3">
                        <label for="iden" class="form-label">nombre_pelicula:</label>
                        <input type="text" id="nom" name="nom" class="form-control" 
                        value="<?php echo $nom; ?>" require>
                    </div>
                    <div class="mb-3">
                        <label for="nom" class="form-label">Genero:</label>
                        <input type="text" id="id_genero" name="id_genero" class="form-control" 
                        value="<?php echo $id; ?>" require>
                    </div>
                    <div class="mb-3">
                        <label for="duracion" class="form-label">Duración:</label>
                        <input type="duration" id="dura" name="duracion" class="form-control" 
                        value="<?php echo $dura; ?>" require>
                    </div>
                    <div class="mb-3">
                        <label for="sinopsis" class="form-label">Sinopsis:</label>
                        <input type="text" id="sinop" name="sinogsis" class="form-control" 
                        value="<?php echo $sinog; ?>" require>
                    </div>
					<div class="mb-3">
                        <label for="imagen" class="form-label">imagen:</label>
                        <input type="img" id="img" name="imagen" class="form-control" 
                        value="<?php echo $img; ?>" require>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="edit" value="Editar">
                </form>
            </div>
        </div>
    </div>
</div>    
                <!--En la columna de acciones se agregan los iconos de editar y eliminar (cuando se de click a editar este abre una nueva pagina con el formulario para editar la peli) -->
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!--Aquí iria lo que va en la img index_2.php e index_3.php del ejemplo del crud -->
                
            </tbody>
        </table>
        </div>
    </section>
    <footer>
    </footer>
    


    <script src="validar.js"></script>

</body>
</html>
