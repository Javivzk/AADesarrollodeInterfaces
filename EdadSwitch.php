<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>
        Uso de Switch
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css" title="Color">
</head>

<body>
<h1>Dime tu edad:</h1>
<form action="#" method="post">
    <p><input type="radio" name="edad" value="Niño" /> Menos de 14 años.</p>
    <p><input type="radio" name="edad" value="Adolescente" /> De 15 a 20 años</p>
    <p><input type="radio" name="edad" value="Joven" /> De 21 a 40 años</p>
    <p><input type="radio" name="edad" value="Maduro" /> De 41 a 60 años</p>
    <p><input type="radio" name="edad" value="Mayor" /> Más de 60 años.</p>
    <p><input type="submit" value="Resultado" />

</form>
</body>


<?php

$tuEdad=$_POST['edad'] ?? null;

switch ($tuEdad) {
    case "Niño":
        echo "Menos de 14 años: todavía eres un niño";
        break;
    case "Adolescente":
        echo "Entre 15 y 20 años: todavía eres muy joven";
        break;
    case "Joven":
        echo "De 21 a 40 años: eres una persona joven";
        break;
    case "Maduro":
        echo "Entre 41 y 60 años: eres una persona madura";
        break;
    case "Mayor":
        echo "Más de 60 años: Ya eres una persona mayor";
        break;
    default:
        echo "Aún no me has dicho tu edad";
}
?>
<footer>
    <p><a href="index.php">Volver al index.</a></p>
</footer>
