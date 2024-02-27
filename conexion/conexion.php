<?php
function conectDb(){

    try {
        $enlase = new PDO('mysql:host=localhost;dbname=zocket', 'root', '');
        return $enlase;
    }
    catch(PDOException $e){
        echo "La conexion ha fallado perro ".$e ->getMessage();
    }
}

?> 