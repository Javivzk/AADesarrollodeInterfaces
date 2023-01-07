<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>
        Break
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css" title="Color">
</head>
<h1>Break</h1>
<?php
$ciudad = "Zaragoza";
$i = 0;
while (++$i) {
    switch ($i) {
        case "5":
            echo "Con 5 salimos del switch". "<br>";
            break 1;
        case "10":
            echo "Con 10 salimos del while";
            break 2;
        default:
            echo $i . "<br>";
    }
}
?>

<footer>
    <p><a href="index.php">Volver al index.</a></p>
</footer>

