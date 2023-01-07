<?php
// Se accede a la sesión
session_name("cs-foreach-2-5");
session_start();

// Si el tamaño de la tabla no está guardado en la sesión, vuelve al formulario inicial
if (!isset($_SESSION["numero"])) {
    header("Location: ForeachCasillas.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>
        Tabla cuadrada con casillas de verificación (Resultado).
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css" title="Color">
</head>

<body>
<h1>Tabla cuadrada con casillas de verificación (Resultado)</h1>

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
$c      = recoge("c", []);
$cOk    = false;
$cValor = "on";;

// Comprobación de $c (casillas de verificación)
// Se cuenta el número de elementos en la matriz $c
$casillasMarcadas = count($c);
// Si no se ha recibido ninguna casilla
if ($casillasMarcadas == 0) {
    print "  <p>No ha marcado ninguna casilla.</p>\n";
    print "\n";
// Si se han recibido demasiadas casillas
} elseif ($casillasMarcadas > $_SESSION["numero"] * $_SESSION["numero"]) {
    print "  <p class=\"aviso\">La matriz recibida es demasiado grande.</p>\n";
    print "\n";
} else {
    // Bucle para comprobar si todos los índices y valores son correctos
    $cOk = true;
    foreach ($c as $indice => $valor) {
        // Si el índice es numérico (como es de tipo int hay que convertirlo a string
        if (!ctype_digit((string)$indice)
            // o si el índice está fuera de rango
            || $indice < 1 || $indice > $_SESSION["numero"] * $_SESSION["numero"]
            // o si el valor no es "on"
            || $valor != $cValor) {
            $cOk = false;
        }
    }
    if (!$cOk) {
        print "  <p class=\"aviso\">La matriz recibida no es correcta.</p>\n";
        print "\n";
    }
}

// Si el número recibido y las casillas recibidas con correctos ...
if ($cOk) {
    print "  <p>Ha marcado <strong>$casillasMarcadas</strong> casilla";
    if ($casillasMarcadas > 1) {
        print "s";
    }
    print " de un total de <strong>" . $_SESSION["numero"] * $_SESSION["numero"] . "</strong>: <strong>";
    // Bucle para escribir los índices de las casillas recibidas
    foreach ($c as $indice => $valor) {
        print "$indice ";
    }
    print "</strong></p>\n";
    print "\n";
}
?>
<p><a href="Foreach2.php">Volver a la tabla</a></p>

<p><a href="ForeachCasillas.php">Volver al formulario inicial.</a></p>

<footer>
    <p class="ultmod">
        Última modificación de esta página:
        <time datetime="2022-12-29">29 de Diciembre de 2022</time>
    </p>

    <p><a href="index.php">Volver al index.</a></p>

</footer>
</body>
</html>
