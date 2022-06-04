<?php

session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'catalogopeliculas'
);

/* if($conn){
    echo 'si';
}    
else {
    echo 'no';
}

$query = $conn -> query ("SELECT * FROM pelicula");
                    
while ($valores = mysqli_fetch_array($query)) {
                        
  echo '<option value="'.$valores['nombre_pelicula'].'">'.$valores['id_pelicula'].'</option>';
} */

?>