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
    <link rel="stylesheet"  href="estilo.css">
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
                <button type="button" class="btn btn-success" name="btnAgregar" id="btnAgregar" onclick="mostrar();">Agregar Pelicula</button>
                <br/>
                <br/>
                <div class="col-md-4" id="content">
                    <?php if(isset($_SESSION['mensaje'])) {?>
                        <div class="alert alert-<?= $_SESSION['tipo_mensaje'];?> alert-dismissible fade show" role="alert">
                            <?php echo $_SESSION['mensaje'];?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php session_unset();}?>

                    <div class="card card-body">
                        <form action="guardarPeli.php" method="POST">
                            <div class="mb-3">
                                <label for="nomPeli" class="form-label">Nombre Pelicula</label>
                                <input type="text" id="nomPeli" name="nomPeli" class="form-control" require>
                                </div>
                                <div class="mb-3">
                                <label for="genero" class="form-label" >Genero</label>
                                <select class="form-select" aria-label="Default select example" id="genero" name="genero" require>
                                <?php
                                    $query = $conn -> query ("SELECT * FROM genero");
                                    while ($valores = mysqli_fetch_array($query)) {
                                        echo '<option value="'.$valores['id_genero'].'">'.$valores['genero'].'</option>';
                                    }
                                ?>                                  
                                </select>
                                </div>
                                <div class="mb-3">
                                <label for="duracion" class="form-label" >Duración</label>
                                <input type="text" id="nom" name="nom" class="form-control" id="duracion" name="duracion" require>
                                </div>
                                <div class="mb-3">
                                <label for="sinopsis" class="form-label" >Sinopsis</label>
                                <textarea class="form-control" placeholder="Sinopsis" id="floatingTextarea2" style="height: 100px" id="sinopsis" name="sinopsis"></textarea>
                                </div>
                                <div class="mb-3">
                                <label for="imagen" class="form-label" >Imagen</label>
                                <input type="file" id="nom" name="nom" class="form-control" id="imagen" name="imagen" require>
                                </div>
                                
                                <input type="submit" class="btn btn-success btn-block" name="save" onclick="ocultar();" value="Guardar">
                            </form>
                        </div>
                    </div> 
                </div>    
                


                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Duración</th>
                        <th scope="col">Sinopsis</th>
                        <th scope="col">Imagen</th>
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
        
        
    </body>
    <script src="prueba.js"></script>
</html>