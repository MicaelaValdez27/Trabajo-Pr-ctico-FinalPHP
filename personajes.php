<?php include('header.php') ?>

    <section>
        <h2>Personajes</h2>
        <div class="botonera_personajes">
            <ul>
                <li> <a href="personajes.php?nombre=hp"> Harry Potter</a></li>
                <li> <a href="personajes.php?nombre=hg"> Hermione Granger</a></li>
                <li> <a href="personajes.php?nombre=rw">Ron Weasley</a></li>
                <li> <a href="personajes.php?nombre=dm"> Draco Malfoy</a></li>
            </ul>
        </div>

        <?php

        if (isset($_GET['nombre'])) {
            $personaje = $_GET['nombre'];

            switch ($personaje) {
                case "hp";
                    $nombre = "Harry Potter";
                    $descripcion = "Protagonista de la serie, conocido como 'El niño que vivió' . ";
                    $img = "./img/harry.jpg";
                    break;
                case "hg";
                    $nombre = "Hermione Granger";
                    $descripcion = "Amiga cercana de Harry y Ron, conocida por su inteligencia y habilidades mágicas.";
                    $img = "./img/hermione.jpg";
                    break;
                case "rw";
                    $nombre = "Ron Weasley";
                    $descripcion = "Mejor amigo de Harry, proviene de una familia de magos.";
                    $img = "./img/ron.png";
                    break;
                case "dm";
                    $nombre = "Draco Malfoy";
                    $descripcion = "Estudiante de Slytherin en Hogwarts, conocido por su actitud arrogante y sus conflictos con...";
                    $img = "./img/draco.jpg";
                    break;
            }

        ?>

            <div class="contenedor_personajes">
                <h3> <?php echo $nombre; ?></h3>
                <p> <?php echo $descripcion; ?></p>
                <div class="box_img">
                    <img src="<?php echo $img; ?>" alt="">
                </div>
            </div>

        <?php } ?>

    </section>

    <?php include('footer.php') ?>