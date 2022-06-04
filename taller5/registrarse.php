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
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand"> Catalogo de peliculas </a>
        </div>
    </nav>
    <div class= "container p-4">
        <div class="row">
            <div class="col-md-4">
            <?php if(isset($_SESSION['mensaje'])) {?>
                <div class="alert alert-<?= $_SESSION['tipo_mensaje'];?> alert-dismissible fade show" role="alert">
                    <?php echo $_SESSION['mensaje'];?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset();}?>
            <div class="card card-body">
                <form action="guardarUsuario.php" method="POST">
                    <div class="mb-3">
                        <label for="iden" class="form-label">Usuario:</label>
                        <input type="text" id="iden" name="iden" class="form-control" require>
                        </div>
                        <div class="mb-3">
                        <label for="nom" class="form-label">Nombre:</label>
                        <input type="text" id="nom" name="nom" class="form-control" require>
                        </div>
                        <div class="mb-3">
                        <label for="" class="formulario__label">Contraseña</label>
                        <br>
                        <input type="password" class="form-control"  id="password1"
                        pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[#?!@$%^&*-]).{8,11}$" 
                        title="Debe contener al menos 8 o más carácteres entre ellos: mayúsculas, minúsculas, múmeros y carácteres especiales" required>    
                        <label for=""class="formulario__label">Confirmar contraseña</label>
                        <input type="password" class="form-control"   id="password2" 
                        pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[#?!@$%^&*-]).{8,11}$" 
                        title="Debe contener al menos 8 o más carácteres entre ellos: mayúsculas, minúsculas, múmeros y carácteres especiales" required>
                        
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="save" value="Guardar">
                    </form>
                </div>
            </div>    
        </div>
    </div>
    <script src="prueba.js"></script>

</body>
</html>