<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>
        Clases
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css" title="Color">
</head>
<h1>Uso de Clases</h1>

<?php

class Clases {

    private $nombre;
    private $apellidos;
    private $edad;

    function __construct($nombre, $apellidos, $edad)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    function __get($propiedad)
    {
        if(property_exists($this, $propiedad)){
            return $this->$propiedad;
        }
    }

    function __set($propiedad, $valor){
        if(property_exists($this, $propiedad)){
            $this->$propiedad = $valor;
        }
    }

    function mayorEdad(){
        return $this->edad >= 18;
    }

    function nombreCompleto(){
        return $this->nombre . " " . $this->apellidos;
    }

}

$persona = new Clases("Javier", "Vizcaino Olivares", 29);

if($persona->mayorEdad()){
    echo $persona->nombreCompleto(). " es mayor de edad";
}else{
    echo $persona->nombreCompleto(). " no es mayor de edad";
}

echo $persona->nombr2;
?>

<footer>
    <p><a href="index.php">Volver al index.</a></p>
</footer>


