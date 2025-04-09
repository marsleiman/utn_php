<?php include("header.php"); ?>
<?php include("funciones.php"); ?>

<?php

$texto = "Hola! Soy";
$name = "Mariam Sleiman";
$desarrollo = "Una página web para tu negocio";
$disenio = "Un diseño personalizado único, que nadie más tenga";
$aplicacion = "Una aplicación que te ayude a gestionar tu negocio";
$aplicacion_especial = "O una aplicación especial para cierta ocasión o evento";

?>

<div class="contenido">
    <div clasee="curso1">

        <h2 class="center">
            <?php
            echo $texto;
            ?>
        </h2>
        <h1 class="center">
            <?php
            echo $name;
            ?> 
        </h1>

        <div class="section-photo">
        <ul class="description">
            <li>Desarrolladora de software con una formación integral en diseño y tecnología</li>
            <li>Estudié Diseño Gráfico en la UBA, lo que me permitió desarrollar una visión creativa y estética para la comunicación visual</li>
            <li>Luego, profundicé en el mundo de la tecnología y me recibí de Técnica Analista en Sistemas en ORT</li>
            <li>Si estás buscando
                <?php
                    echo $desarrollo . "<br/>";
                    echo $disenio . "<br/>";
                    echo $aplicacion . "<br/>";
                    echo $aplicacion_especial . "<br/>";
                ?> 
            </li>
        </ul>
        <img src="./assets/mariam.png" alt="Mariam Sleiman" class="foto">
        </div>
    </div>

    <?php servicios(); ?>
    <?php memotest(); ?>
</div>

<?php include("footer.php"); ?>