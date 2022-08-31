<?php
    // var_dump($_REQUEST);
    $name = $_REQUEST['name']; 
    $surname = $_REQUEST['surname'];
    $age = $_REQUEST['age'];
    $gender = $_REQUEST['gender'];
    $country = $_REQUEST['country'];

    
    echo "Nombre y Apellido: " . $name ." ". $surname . " ". $age . " Años" . "<br>"; 
    echo $gender ." ". $country . "<br>";   
    if(isset($_REQUEST['interests'])){
        echo "Intereses: " . implode(", ", $_REQUEST['interests']);
    } else {
        echo "No hay intereses";
    };
 
?>
