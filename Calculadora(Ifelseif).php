<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>
        Calculadora de divisiones con Formulario.
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css" title="Color">
</head>

<body>
<h1>Calculadora de divisiones con Formulario</h1>

<form action="Resultadocalculadora.php" method="get">
    <p>Escriba el dividendo y el divisor (0 &le; dividendo &lt; 1.000; 0 &lt; divisor &lt; 1.000)
        para calcular el cociente y el resto de la división.
    </p>

    <table>
        <tr>
            <td><label for="dividendo">Dividendo:</label></td>
            <td><input type="number" name="dividendo" min="0" max="1000" step="any" id="dividendo"></td>
        </tr>
        <tr>
            <td><label for="divisor">Divisor:</label></td>
            <td><input type="number" name="divisor" min="0" max="1000" step="any" id="divisor"></td>
        </tr>
    </table>

    <p>
        <input type="submit" value="Calcular">
        <input type="reset" value="Borrar">
    </p>
</form>

<footer>
    <p><a href="index.php">Volver al index.</a></p>
</footer>
</body>
</html>
