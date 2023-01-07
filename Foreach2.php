<?php
// Se accede a la sesión
session_name("cs-foreach-2-5");
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>
        Tabla cuadrada con casillas de verificación (Formulario 2).
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css" title="Color">
</head>

<body>
<h1>Tabla cuadrada con casillas de verificación (Formulario 2)</h1>

<?php
// Funciones auxiliares
function recoge($var, $m = "")
{
    if (!isset($_REQUEST[$var])) {
        $tmp = is_array($m) ? [] : "";
    } elseif (!is_array($_REQUEST[$var])) {
        $tmp = trim(htmlspecialchars($_REQUEST[$var]));
    } else {
        $tmp = $_REQUEST[$var];
        array_walk_recursive($tmp, function (&$valor) {
            $valor = trim(htmlspecialchars($valor));
        });
    }
    return $tmp;
}

// Recogida de datos
$numero       = recoge("numero");
// Si no se ha recogido número pero hay número en la sesión
// (es decir, si se viene de la tercera página)
// coge el número de la sesión
if (isset($_SESSION["numero"]) and $numero == "") {
    $numero = $_SESSION["numero"];
}
$numeroOk     = false;
$numeroMinimo = 1;
$numeroMaximo = 20;

// Comprobación de $numero (entero entre 1 y 20)
if ($numero == "") {
    print "  <p class=\"aviso\">No ha escrito el tamaño de la tabla.</p>\n";
} elseif (!ctype_digit($numero)) {
    print "  <p class=\"aviso\">No ha escrito el tamaño de la tabla "
        . "como número entero positivo.</p>\n";
} elseif ($numero < $numeroMinimo || $numero > $numeroMaximo) {
    print "  <p class=\"aviso\">El tamaño de la tabla debe estar entre "
        . "$numeroMinimo y $numeroMaximo.</p>\n";
} else {
    $numeroOk = true;
}

// Si el número recibido es correcto ...
if ($numeroOk) {
    // Guarda en la sesión el número de casillas
    $_SESSION["numero"] = $numero;

    print "  <p>Marque las casillas de verificación que quiera y contaré cuántas ha marcado.</p>\n";
    print "\n";

    // Formulario que envía los datos a la página 3
    print "  <form action=\"ResultadoCasillas.php\" method=\"get\">\n";
    print "    <table class=\"conborde\">\n";
    // Bucle anidado para generar la tabla cuadrada con casillas de verificación
    // Creamos un contador para generar el número de casilla
    $contador = 1;
    for ($i = 0; $i < $numero; $i++) {
        print "      <tr>\n";
        for ($j = 1; $j <= $numero; $j++) {
            // El nombre del control es una matriz (c[])
            print "        <td><label><input type=\"checkbox\" name=\"c[$contador]\"> $contador</label></td>\n";
            $contador++;
        }
        print "      </tr>\n";
    }
    print "    </table>\n";
    print "\n";
    print "    <p>\n";
    print "      <input type=\"submit\" value=\"Contar\">\n";
    print "      <input type=\"reset\" value=\"Borrar\">\n";
    print "    </p>\n";
    print "  </form>\n";
}

?>

<p><a href="ForeachCasillas.php">Volver al formulario.</a></p>

<footer>
    <p class="ultmod">
        Última modificación de esta página:
        <time datetime="2022-12-29">29 de Diciembre de 2022</time>
    </p>

    <p><a href="index.php">Volver al index.</a></p>

</footer>
</footer>
</body>
</html>
