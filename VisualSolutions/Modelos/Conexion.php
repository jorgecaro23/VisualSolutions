<?php

try {
    $conexion_db = new PDO('mysql:host=localhost; dbname=visualsolutiondb', 'root', '');
    $conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion_db->exec("SET CHARACTER SET utf8");
    
} catch (Exception $e) {
    echo "la linea del error es" . $e->getLine() . "<br>";
    echo $e->getMessage() . "<br>";
}
    