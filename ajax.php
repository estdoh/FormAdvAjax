<?php
    // var_dump($_REQUEST);
    $nombre = $_REQUEST['name']; 
    $apellido = $_REQUEST['surname'];
    $edad = $_REQUEST['age'];
    $genero = $_REQUEST['gender'];
    $pais = $_REQUEST['country'];

    
    echo "Nombre y Apellido: " . $nombre ." ". $apellido . " ". $edad . " Años" . "<br>"; 
    echo $genero ." ". $pais . "<br>";   
    if(isset($_REQUEST['interests'])){
        echo "Intereses: " . implode(", ", $_REQUEST['interests']);
    } else {
        echo "No hay intereses";
    };
 
?>
