<?php include('header.php') ?>

    <section class="personajes">
        <h2>Personajes de Harry Potter</h2>
        <ul>
            <?php

            // Definir personajes como array

            //Ejemplo de un array indexado
            /* $personajes = array("harry, 3 true);
            echo $personajes[0] . "<br>";
            echo $personajes[1] . "<br>";
            echo $personajes[2] . "<br>"; */

            //Ejemplo de un array asociativos
            /*
            $personajes_datos = array(
            "nombre" => "harry",
            "edad" => 13,
            "hechizo" => false
            );

            echo "Nombre: " . $personajes_datos["nombre"] . "<br>";
            echo "Edad: " . $personajes_datos["edad"] . "<br>";
            echo "Hechizo: " . $personajes_datos["hechizo"] ? "Sí" : "No") . "<br>";
            

            $lista_personajes = array(
                "Harry Potter" => "Protagonista de la serie, conocido como 'El niño que vivió'.", 
                "Hermione" => "Amiga cercana de Harry y Ron, conocida por su inteligencia y habilidades mágicas.",
                "Ron" => "Mejor amigo de Harry, proviene de una familia de magos.",
                "Albus Dumbledore" => "Director de Hogwarts, considerado uno de los magos más poderosos de todos los tiempos."
            );


            //Iterar este array
        foreach($lista_personajes as $nombre => $descripcion){
            echo "<li> <span class ='items'> $nombre:</span>$descripcion </li>";
        }*/

            //Array multidimencional
            $array_multidimencional = array(
                array(1, 2, 3),
                array(4, 5, 6),
                array(7, 8, 9)
            );
            $array_multidimencional = [
                [1, 2, 3],
                [4, 5, 6],
                [6, 7, 8],
            ];

            $personajes = [
                [
                    "nombre" => "Harry Potter",
                    "casa" => "Gryffindor",
                    "anio_nacimiento" => 1980,
                    "hechizos" => ["Expelliarmus", "Expecto Patronum", "Stupefy"]
                ],
                [
                    "nombre" => "Hermione Granger",
                    "casa" => "Gryffindor",
                    "anio_nacimiento" => 1981,
                    "hechizos" => ["Alohomora", "Expecto Patronum", "Stupefy"]
                ],
            ];

            foreach ($personajes as $personaje) {
                echo "Nombre: " . $personaje["nombre"] . "\n";
                echo "Casa: " . $personaje["casa"] . "\n";
                echo "Año de Nacimiento: " . $personaje["anio_nacimiento"] . "\n";
                echo "Hechizos: " . "\n";
                foreach ($personaje["hechizos"] as $hechizo) {
                    echo " - $hechizo\n";
                }
                echo "\n";
            }


            ?>
        </ul>
    </section>

    <?php include('footer.php') ?>

    
 