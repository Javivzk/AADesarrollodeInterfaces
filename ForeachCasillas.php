<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>
        Tabla cuadrada con casillas de verificación (Formulario 1).
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css" title="Color">
</head>

<body>
<h1>Tabla cuadrada con casillas de verificación (Formulario 1)</h1>

<form action="Foreach2.php" method="get">
    <p>Escriba un número (0 &lt; número &le; 20) y dibujaré una tabla cuadrada de
        ese tamaño con casillas de verificación en cada celda.</p>

    <p><strong>Tamaño de la tabla:</strong> <input type="number" name="numero" min="1" max="20" value="7"></p>

    <p>
        <input type="submit" value="Mostrar">
        <input type="reset" value="Borrar">
    </p>
</form>

<footer>
    <p><a href="index.php">Volver al index.</a></p>
</footer>
</body>
</html>
