<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>
        Tablas de multiplicar (Formulario).
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css" title="Color">
</head>

<body>
<h1>Tablas de multiplicar (Formulario)</h1>

<form action="ResultadoTabla.php" method="get">
    <p>Escriba un número (0 &lt; número &le; 20) y mostraré las tablas de multiplicar hasta ese número.</p>

    <p><label>Número: <input type="number" name="numero" min="1" max="20" value="5"></label></p>

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