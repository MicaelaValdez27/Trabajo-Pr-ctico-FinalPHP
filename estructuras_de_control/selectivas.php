<?php

$edad = 15;

if ($edad >= 18) {
    echo "Sos mayor de edad <br>";
} else {
    echo "Sos menor de edad <br>";
}

echo "<hr>";
$calificación = 85;

if($calificación >= 90){
    echo "Excelente <br>";
} elseif($calificación >= 80){
    echo "Muy bien";
} elseif($calificación >= 70){
    echo "Bien";
}
else {
    echo "Podés mejorar <br>";
}

echo "<hr>";
$personaje = "Harry Potter";

switch($personaje) {
    case "Harry Potter":
        echo "Hola, soy Harry Potter <br>";
    break;
    case "Hermione Granger":
        echo "Hola, soy Hermione Granger <br>";
    break; 
    case "Ron Wasley":
        echo "Hola, soy Ron Wasley <br>";
    break;   
    default:
    echo "No seleccionaste ningún personaje <br>";
}

echo "<hr>";

$nro_personaje = 1;

switch($nro_personaje) {
    case 1: 
        echo "Hola, soy Harry Potter <br>";
        break;
    case 2: 
        echo "Hola, soy Hermione Granger <br>";
        break; 
    case 3: 
        echo "Hola, soy Ron Weasley <br>";
        break;   
    case 4: 
        echo "Hola, soy Draco Malfoy! <br>";
        break; 
    default:
    echo "No seleccionaste ningún personaje <br>";
}


echo "Continua con la ejecución del programa";