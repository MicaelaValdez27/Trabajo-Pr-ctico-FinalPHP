<?php include('header.php') ?>

    <section class="contacto">
        <h2> Contacto </h2>
        <div>
            <form action="enviar_consulta.php" method="post">
                <label for="nombre"> Nombre </label>
                <input type="nombre" name="nombre">

                <label for="email"> Correo electrónico </label>
                <input type="email" name="email">

                <label for="mensaje"> Mensaje </label>
                <textarea name="mensaje" id="mensaje"></textarea>

                <input type="submit" value="Enviar consulta">
            </form>
            <?php

            if (isset($_GET['ok'])) {
                echo "<h3> Mensaje enviado con éxito </h3>";
            }

            ?>

        </div>
    </section>

    <?php include('footer.php') ?>