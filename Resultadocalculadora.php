<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Calculadora de divisiones (Resultado).
    if ... elseif ... else ... Con formularios.
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilos.css" title="Color">
</head>

<body>
  <h1>Calculadora de divisiones (Resultado)</h1>

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

$dividendo = recoge("dividendo");
$divisor   = recoge("divisor");

$dividendoOk = false;
$divisorOk   = false;

if ($dividendo == "") {
    print "  <p class=\"aviso\">No ha escrito el dividendo.</p>\n";
    print "\n";
} elseif (!is_numeric($dividendo)) {
    print "  <p class=\"aviso\">No ha escrito el dividendo como número.</p>\n";
    print "\n";
} elseif ($dividendo < 0 || $dividendo >= 1000) {
    print "  <p class=\"aviso\">El dividendo no está entre 0 y 1000.</p>\n";
    print "\n";
} else {
    $dividendoOk = true;
}

if ($divisor == "") {
    print "  <p class=\"aviso\">No ha escrito el divisor.</p>\n";
    print "\n";
} elseif (!is_numeric($divisor)) {
    print "  <p class=\"aviso\">No ha escrito el divisor como número.</p>\n";
    print "\n";
} elseif ($divisor == 0) {
    print "  <p class=\"aviso\">En una división el divisor no puede ser cero.</p>\n";
    print "\n";
} elseif ($divisor < 0 || $divisor >= 1000) {
    print "  <p class=\"aviso\">El divisor no está entre 0 y 1000.</p>\n";
    print "\n";
} else {
    $divisorOk = true;
}

if ($dividendoOk && $divisorOk) {
    $cociente = intdiv($dividendo, $divisor);
    $resto    = $dividendo % $divisor;
    print "  <p>Dividendo: <strong>$dividendo</strong></p>\n";
    print "\n";
    print "  <p>Divisor: <strong>$divisor</strong></p>\n";
    print "\n";
    print "  <p>Cociente: <strong>$cociente</strong></p>\n";
    print "\n";
    print "  <p>Resto: <strong>$resto</strong></p>\n";
    print "\n";
    if ($resto) {
        print "  <p>La división <strong>no</strong> es exacta.</p>\n";
    } else {
        print "  <p>La división es exacta.</p>\n";
    }
    print "\n";
}
?>
  <p><a href="Calculadora(Ifelseif).php">Volver al formulario.</a></p>

  <footer>
      <p class="ultmod">
          Última modificación de esta página:
          <time datetime="2022-12-29">29 de Diciembre de 2022</time>
      </p>

      <p><a href="index.php">Volver al index.</a></p>

  </footer>
</body>
</html>
