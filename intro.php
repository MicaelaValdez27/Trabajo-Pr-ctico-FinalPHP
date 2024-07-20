<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi sitio web</title>
    <link rel="stylesheet" href="./estilos.css">
</head>

<body>
    <h1>Hola Mundo</h1>
    <?php
    echo "<h2> Hola mundo con PHP</H2>";

    //Variables en PHP
    $nombre = "PHP Y MYSQL nivel Inicial";
    $unidades_curso = 8;
    $arancel = 56000.26;
    $fecha = "12/07/2024";

    $nombre2 = "PHP Y MYSQL Intermedio";
    $unidades_curso2 = 8;
    $arancel2 = 65000.26;
    $fecha2 = "17/09/2024";

    $nombre3 = "PHP Y MYSQL nivel Avanzado";
    $unidades_curso3 = 7;
    $arancel3 = 45000.26;
    $fecha3 = "22/10/2024";
    ?>

    <section class= "cursos">
        <div class= "curso1">
            <ul>
                <li>Curso: <?php echo $nombre; ?></li>
                <li>Unidades: <?php echo $unidades_curso; ?></li>
                <li>Arancel: <?php echo $arancel; ?></li>
                <li>Fecha de Inicio: <?php echo $fecha; ?></li>
            </ul>
        </div>
        <div class= "curso2">
            <ul>
                <li>Curso: <?php echo $nombre2; ?></li>
                <li>Unidades: <?php echo $unidades_curso2; ?></li>
                <li>Arancel: <?php echo $arancel2; ?></li>
                <li>Fecha de Inicio: <?php echo $fecha2; ?></li>
            </ul>
        </div>
        <div class= "curso3">
            <ul>
                <li>Curso: <?php echo $nombre3; ?></li>
                <li>Unidades: <?php echo $unidades_curso3; ?></li>
                <li>Arancel: <?php echo $arancel3; ?></li>
                <li>Fecha de Inicio: <?php echo $fecha3; ?></li>
            </ul>
        </div>
    </section>

    <?php
    $dolar = 1200;
    $unidades_totales = $unidades_curso + $unidades_curso2 + $unidades_curso3;
    $aranceles_totales = $arancel + $arancel2 + $arancel3;
    $arancel_dolar = $aranceles_totales / $dolar;
    ?> 

    <section class="cursos_totales">
        <h3> Totales </h3>
        <ul>
            <li> Unidades totales: <?php echo $unidades_totales; ?></li>
            <li> Aranceles totales: <?php echo $aranceles_totales ?></li>
            <li> Arancel en dolares: <?php echo round ($arancel_dolar); ?></li>
        </ul>
    </section>

    <?php

//Constantes
    //DEFINE
    define("NOMBRE", "Harry");
    echo NOMBRE;
    echo "<br>";

    define("EDAD", 30);
    echo EDAD;
    echo "<br>";

    define("MAYOR_DE_EDAD", true);
    echo MAYOR_DE_EDAD;
