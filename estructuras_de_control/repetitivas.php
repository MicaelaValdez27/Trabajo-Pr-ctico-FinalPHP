<?php
//while
/*
$i = 1;

echo "Contar hasta 5 <br>";
while($i <= 5) {
    echo $i . "<br>"; 
    $i++;
}
$estudiantes = [
    ['nombre' => 'Harry', 'apellido' => 'Potter', 'casa' => 'Gryffindor'],
    ['nombre' => 'Hermione', 'apellido' => 'Granger', 'casa' => 'Gryffindor'],
    ['nombre' => 'Ron', 'apellido' => 'Weasley', 'casa' => 'Gryffindor'],
    ['nombre' => 'Neville', 'apellido' => 'Longbottom', 'casa' => 'Gryffindor'],
    ['nombre' => 'Ginny', 'apellido' => 'Weasley', 'casa' => 'Gryffindor'],
    ['nombre' => 'Draco', 'apellido' => 'Malfoy', 'casa' => 'Slytherin'],
];

echo $estudiantes[0] ['apellido'];

echo "<hr>";
$i= 0; 
$total_estudiantes = count($estudiantes);

while ($i < $total_estudiantes) {
    if ($estudiantes[$i] ['casa'] == 'Gryffindor') {
        echo $estudiantes[$i] ['nombre'] . ' ' . $estudiantes[$i]['apellido'] . '<br>';
    }
    $i++;
}

//DO WHILE

//Inicialización del bucle
$i = 1;

do{
    echo "El número es: " . $i . "<br>";
    $i++;
} while($i <= 5);

*/
//For
for($i = 1; $i <=5; $i++){
    echo "El número es: " . $i . "<br>";
}

$personajes = array("Harry", "Hermione", "Ron", "Dumbledore","Snape");

echo "<ul>";
for($i = 0; $i < count($personajes); $i++){
    echo "<li>" . $personajes[$i] . "</li>";
}
echo "/<ul>";



$estudiantes = [
    ['nombre' => 'Harry', 'apellido' => 'Potter', 'casa' => 'Gryffindor'],
    ['nombre' => 'Hermione', 'apellido' => 'PGranger', 'casa' => 'Gryffindor'],
    ['nombre' => 'Ron', 'apellido' => 'Weasly', 'casa' => 'Gryffindor'],
    ['nombre' => 'Neville', 'apellido' => 'Longbottom', 'casa' => 'Gryffindor'],
    ['nombre' => 'Ginny', 'apellido' => 'Weasley', 'casa' => 'Gryffindor'],
    ['nombre' => 'Draco', 'apellido' => 'Malfoy', 'casa' => 'Slytherin'],
];

echo "<h3> Estudiantes de Hogwarts </h3>";

echo "<ul>";

foreach($estudiantes as $estudiante){
    echo "<li>";
    echo "Nombre: " . $estudiante['nombre'] . " " . $estudiante['apellido'] . " - Casa:", $estudiante['casa'];
    echo"</li>";
}

echo "</ul>";

echo "<h2> Tablas de multiplicación </h2>";

for($i = 1; $i <=10; $i++){
    echo "<h3> Tabla del $i </h3> ";
    echo "<ul>";
    for($numero = 1; $numero <=10; $numero++){
        $resultado = $i * $numero;
        echo "<li> $i x $numero = $resultado </li>";
    }
    echo "</ul>";

}