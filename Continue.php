<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>
        Continue
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css" title="Color">
</head>
<h1>Continue</h1>

<?php
$i = 0;

while ($i++ < 20) {
    if ($i % 3 != 0){
        continue;
    }
    echo "El valor de i es: " . $i. "<br>";
}
?>

<footer>
    <p><a href="index.php">Volver al index.</a></p>
</footer>

