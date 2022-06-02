<?php include("../../controller/administrador_session.php"); ?>
<?php include("../layout/header_sesion.php"); ?>

<br>
<div class="container">
	<h2 class="white-text center">Agregar Peliculas</h2>
	<br>
  <div class="row white">
    <br>
    <form class="col s12" method="post" action="../../controller/guardar_pelicula.php" enctype="multipart/form-data" id="add_pelicula">
      <div class="row">
        <div class="input-field col s12 l6">
          <i class="material-icons prefix">nombre_pelicula</i>
          <input id="nombre_add" name="nombre_add" type="text" class="validate" required="">
          <label for="nombre_add">nombre_pelicula:</label>
        </div>
        <div class="input-field col s12 l6">
          <i class="material-icons prefix">id_genero</i>
          <input id="genero_add" name="genero_add" type="text" class="validate" required="">
          <label for="genero_add">id_genero:</label>
        </div>
		<div class="input-field col s12 l12">
          <i class="material-icons prefix">sinopsis</i>
          <textarea id="descripcion_add" name="descripcion_add" class="materialize-textarea" required=""></textarea>
          <label for="descripcion_add">sinopsis:</label>
        </div>
         <div class="input-field col s12 l12">
          <i class="material-icons prefix">duracion</i>
          <textarea id="link_add" name="link_add" class="materialize-textarea" required=""></textarea>
          <label for="link_add">duracion:</label>
        </div>
        <div class="input-field col s12 l12">
          <i class="material-icons prefix">insert_link</i>
          <textarea id="trailer_add" name="trailer_add" class="materialize-textarea" required=""></textarea>
          <label for="trailer_add">Trailer:</label>
        </div>
        <div class="file-field col s12 l6 input-field">
      		<div class="btn green darken-4">
        		<span>Seleccionar Poster:</span>
        		<input type="file" name="imagen" required="">
      		</div>
      		<div class="file-path-wrapper">
        		<input class="file-path validate" type="text">
      		</div>
    	</div>
      <div class="file-field col s12 l6 input-field">
          <div class="btn orange darken-4">
            <span>Seleccionar Portada:</span>
            <input type="file" name="imagen_bg" required="">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
      </div>
      </div>
      <br>
       	<center><button class="btn waves-effect waves-light blue darken-4 btn-large" type="submit" name="action">Agregar
    		<i class="material-icons right">send</i>
  		</button></center>
		<br><br>
    </form>
  </div>
</div>

<?php 
  if(isset($_GET['m'])){
    if ($_GET['m'] == "true") {
      echo "<script>alert('Guardado Correctamente')</script>";
    }else{
    echo "<script>alert('Error al guardar, esto puede ser debido a alguna imagen.')</script>";
    }
  }
  ?>

<?php
//include("layout/bottom_floating.php");
//include("../layout/footer_sesion.php");
?>