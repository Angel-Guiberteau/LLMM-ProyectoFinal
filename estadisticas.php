<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="resources/logo.ico" type="image/x-icon" />
        <link rel="stylesheet" href="estilos/style.css">
        <title>Violencia de genero en los jovenes</title>
    </head>
    <body>
        <?php
            include 'nav.php';
        ?>
        <main>
            <section class="intro">
                <article>
                <h1>Estadisticas</h1>
                    <p>
                        En esta sección, nos sumergiremos en datos cuantitativos y cualitativos que ilustran la magnitud y la complejidad de este problema. Desde la incidencia de la violencia física y sexual hasta los impactos psicológicos duraderos, examinaremos las estadísticas que nos ayudan a comprender la dimensión de la violencia de género entre los jóvenes.
                    </p>
                    <p>
                        Nuestro objetivo es arrojar luz sobre una realidad que a menudo se mantiene en las sombras, promoviendo así la conciencia y la acción necesarias para generar un cambio significativo. Acompáñanos en este viaje hacia la comprensión y el compromiso con la creación de un futuro donde todos los jóvenes puedan vivir libres de violencia y discriminación.
                    </p>
                </article>
            </section>
            <section class="estadisticas-container">
                <article class="xml">
                    <iframe src="estadisticas.xml" frameborder="0" class="iframe"></iframe>
                    <iframe src="estadisticas2.xml" frameborder="0" class="iframe"></iframe>
                    <iframe src="estadisticas3.xml" frameborder="0" class="iframe"></iframe>
                </article>
            </section>
        </main>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>