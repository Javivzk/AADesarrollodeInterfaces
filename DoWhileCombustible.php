<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>
        Do While Combustible
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css" title="Color">
</head>
<h1>Do While Combustible</h1>

<?php
$combustible = 0;
do
{
    echo "Sigue conduciendo <br>";
}
while ($combustible-- > 0);

echo "Se acabó el combustible";
echo $combustible;
?>

<footer>
    <p><a href="index.php">Volver al index.</a></p>
</footer>

