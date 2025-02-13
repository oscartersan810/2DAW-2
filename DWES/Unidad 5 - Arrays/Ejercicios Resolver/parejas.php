<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Parejas</title>
</head>

<body>
    <h1>Generar Parejas Aleatorias</h1>

    <?php
    if (isset($_REQUEST['personas'])) {
        $personas = unserialize(base64_decode($_REQUEST['personas']));
    } else {
        echo "<p>No hay personas registradas. Registra algunas personas primero.</p>";
        exit;
    }

    // Función para generar una pareja heterosexual
    function generarParejaHetero($personas) {
        // Filtrar personas heterosexuales
        $hetero = array_filter($personas, function($p) {
            return $p['orientacion'] == 'het';
        });

        if (count($hetero) < 2) {
            return "No hay suficientes personas para formar una pareja heterosexual.";
        }

        // Elegir una persona aleatoria de cada sexo
        $hombres = array_filter($hetero, function($p) {
            return $p['sexo'] == 'h';
        });
        $mujeres = array_filter($hetero, function($p) {
            return $p['sexo'] == 'm';
        });

        $hombre = $hombres[array_rand($hombres)];
        $mujer = $mujeres[array_rand($mujeres)];

        return $hombre['nombre'] . " (Heterosexual) y " . $mujer['nombre'] . " (Heterosexual)";
    }

    // Función para generar una pareja homosexual
    function generarParejaHomosexual($personas) {
        // Filtrar personas homosexuales
        $homos = array_filter($personas, function($p) {
            return $p['orientacion'] == 'hom';
        });

        if (count($homos) < 2) {
            return "No hay suficientes personas para formar una pareja homosexual.";
        }

        // Elegir dos personas del mismo sexo
        $hombres = array_filter($homos, function($p) {
            return $p['sexo'] == 'h';
        });
        $mujeres = array_filter($homos, function($p) {
            return $p['sexo'] == 'm';
        });

        $hombre = $hombres[array_rand($hombres)];
        $mujer = $mujeres[array_rand($mujeres)];

        return $hombre['nombre'] . " (Homosexual) y " . $mujer['nombre'] . " (Homosexual)";
    }

    // Función para generar una pareja bisexual
    function generarParejaBisexual($personas) {
        // Filtrar personas bisexuales
        $bisexuales = array_filter($personas, function($p) {
            return $p['orientacion'] == 'bis';
        });

        if (count($bisexuales) < 2) {
            return "No hay suficientes personas para formar una pareja bisexual.";
        }

        // Filtrar parejas compatibles
        $compatible = [];
        foreach ($bisexuales as $persona1) {
            foreach ($bisexuales as $persona2) {
                if ($persona1['sexo'] != $persona2['sexo']) {
                    $compatible[] = $persona1['nombre'] . " y " . $persona2['nombre'];
                }
            }
        }

        return empty($compatible) ? "No hay parejas bisexuales compatibles." : $compatible[array_rand($compatible)];
    }

    ?>

    <h2>Generar Parejas</h2>
    <form action="" method="post">
        <input type="hidden" name="personas" value="<?= base64_encode(serialize($personas)) ?>">
        <button type="submit" name="generar" value="hetero">Generar Pareja Heterosexual</button>
        <button type="submit" name="generar" value="homosexual">Generar Pareja Homosexual</button>
        <button type="submit" name="generar" value="bisexual">Generar Pareja Bisexual</button>
    </form>

    <?php
    if (isset($_REQUEST['generar'])) {
        $tipo = $_REQUEST['generar'];

        if ($tipo == 'hetero') {
            echo "<h3>Pareja Heterosexual:</h3>";
            echo generarParejaHetero($personas);
        } elseif ($tipo == 'homosexual') {
            echo "<h3>Pareja Homosexual:</h3>";
            echo generarParejaHomosexual($personas);
        } elseif ($tipo == 'bisexual') {
            echo "<h3>Pareja Bisexual:</h3>";
            echo generarParejaBisexual($personas);
        }
    }
    ?>
</body>

</html>
