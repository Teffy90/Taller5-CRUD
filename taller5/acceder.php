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
            <div class="row">
                <div class="col-md-4">
                <div class="card card-body">
                    <h2>!Hola Admin!</h2>
                    <p>Ingresa tus datos para poder agregar, modificar, o eliminar alguna película del catálogo: </p>
                    <form action="peliculas.php" method="POST">
                        <div class="mb-3">
                            <label for="acc_usuario" class="form-label">Usuario</label>
                            <input type="text" id="acc_usuario" name="acc_usuario" class="form-control" require>
                            </div>
                            <div class="mb-3">
                            <label for="acc_contraseña" class="form-label">Contraseña</label>
                            <input type="text" id="acc_contraseña" name="acc_contraseña" class="form-control" require>
                            </div>
                            <br/>
                            <br/>
                            <input type="submit" class="btn btn-success btn-block" name="acceder" value="Acceder">
                            <a href="registrarse.php" class="btn btn-success" tabindex="-1" role="button" aria-disabled="true" name="registrarse" id="registrarse">Registrarse</a>
                        </div>    
                    </form>
                    </div>
                </div>   
                   
            </div>
        </div>
    </section>
    


    <script src="prueba.js"></script>

</body>
</html>