<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>
        Tablas de multiplicar (Resultado).
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css" title="Color">
    <style>
        table { margin-bottom: 20px; }
        td, th { width: 40px; height: 40px; text-align: center; }
    </style>
</head>

<body>
<h1>Tablas de multiplicar (Resultado)</h1>

<?php
function recoge($var, $m = "")
{
    $tmp = is_array($m) ? [] : "";
    if (isset($_REQUEST[$var])) {
        if (!is_array($_REQUEST[$var]) && !is_array($m)) {
            $tmp = trim(htmlspecialchars($_REQUEST[$var]));
        } elseif (is_array($_REQUEST[$var]) && is_array($m)) {
            $tmp = $_REQUEST[$var];
            array_walk_recursive($tmp, function (&$valor) {
                $valor = trim(htmlspecialchars($valor));
            });
        }
    }
    return $tmp;
}

$numero = recoge("numero");

$numeroOk = false;

$numeroMinimo = 1;
$numeroMaximo = 20;

if ($numero == "") {
    print "  <p class=\"aviso\">No ha escrito el número de tablas.</p>\n";
    print "\n";
} elseif (!is_numeric($numero)) {
    print "  <p class=\"aviso\">No ha escrito  el número de tablas número.</p>\n";
    print "\n";
} elseif (!ctype_digit($numero)) {
    print "  <p class=\"aviso\">No ha escrito el número de tablas "
        . "como número entero positivo.</p>\n";
    print "\n";
} elseif ($numero < $numeroMinimo || $numero > $numeroMaximo) {
    print "  <p class=\"aviso\">El número de tablas debe estar entre "
        . "$numeroMinimo y $numeroMaximo.</p>\n";
    print "\n";
} else {
    $numeroOk = true;
}

if ($numeroOk) {
    for ($k = 1; $k <= $numero; $k++) {
        print "  <table class=\"conborde\">\n";
        print "    <caption>Tabla del $k</caption>\n";
        print "    <tr>\n";
        print "      <th>X</th>\n";
        for ($j = 1; $j <= $k; $j++) {
            print "      <th>$j</th>\n";
        }
        print "    </tr>\n";

        for ($i = 1; $i <= $k; $i++) {
            print "    <tr>\n";
            print "      <th>$i</th>\n";
            for ($j = 1; $j <= $k; $j++) {
                print "      <td>" . $i * $j . "</td>\n";
            }
            print "    </tr>\n";
        }
        print "  </table>\n";
        print "\n";
    }
}

?>
<p><a href="TablaMultiplicar(For).php">Volver al formulario.</a></p>

<footer>
    <p class="ultmod">
        Última modificación de esta página:
        <time datetime="2022-12-29">29 de Diciembre de 2022</time>
    </p>

    <p><a href="index.php">Volver al index.</a></p>

</footer>
</body>
</html>
