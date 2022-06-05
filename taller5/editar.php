<?php
include("db.php");

$id=$_GET['id'];

$sql="SELECT * FROM pelicula WHERE id_pelicula='$id'";
$query = mysqli_query($conn,$sql);

$row=mysqli_fetch_array($query);
?>
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
            <h2>Editar peliculas</h2>
            <p>A continuación puede editar el cátalogo de las peliculas.</p>
            <!--Agregar un evento que cuando se de click al boton muestre el formulario de agrergar la pelicula -->
            <br/>
            <br/>
			<div class="container p-4">
                <div class="row">
                    <div class="col-md-4 mx-auto">
                        <div class="card card-body">
                            <form action="modificar.php?id=<?php echo $id; ?>" method="POST">
                                <div class="mb-3">
                                    <label for="update_nomPeli" class="form-label">Nombre Pelicula</label>
                                    <input type="text" id="update_nomPeli" name="update_nomPeli" class="form-control" value="<?php echo $row['nombre_pelicula']?>" require>
                                </div>
                                <select class="form-select" aria-label="Default select example" id="update_genero" name="update_genero" value="<?php echo $row['id_genero']?>" require>
                                    <?php
                                        $query = $conn -> query ("SELECT * FROM genero");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="'.$valores['id_genero'].'">'.$valores['genero'].'</option>';
                                        }
                                    ?>                                  
                                </select>
                                <div class="mb-3">
                                    <label for="update_duracion" class="form-label" >Duración</label>
                                    <input type="text" class="form-control" id="update_duracion" name="update_duracion" value="<?php echo $row['duracion']?>" require>
                                </div>
                                <div class="mb-3">
                                    <label for="update_sinopsis" class="form-label" >Sinopsis</label>
                                    <input type="text" class="form-control" id="update_sinopsis"  name="update_sinopsis" value="<?php echo $row['sinopsis']?>" require>
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="update_imagen" class="form-label" >Imagen</label>
                                    <input type="file" class="form-control" id="update_imagen" name="update_imagen" value="<?php echo $row['imagen']?>" require>
                                </div>
                                    
                                <input type="submit" class="btn btn-success btn-block" name="save"  value="Actualizar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
    </footer>
    


    <script src="validar.js"></script>

</body>
</html>
