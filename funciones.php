<?php

function servicios()
{
    $aplicacion = 30.50;
    $valor_hora_app = 20;
    $valor_hora_web = 20;
    $valor_hora_disenio = 20;
    $valor_hora_disenio_web = 20;

    $arancel_aplicacion = round($aplicacion * $valor_hora_app);
    $arancel_web = 40 * $valor_hora_web;
    $arancel_disenio_web = 50 * $valor_hora_disenio_web;
    $arancel_disenio = 30 * $valor_hora_disenio;

    echo "
    <section class='totales'>
        <h2 class='center margin-title'>Valores de Desarrollo</h2>
        <ul class='center'>
            <li>Desarrollo de una app: $arancel_aplicacion USD</li>
            <li>Desarrollo de una web: $arancel_web USD</li>
            <li>Desarrollo de una web diseñada: $arancel_disenio_web USD</li>
            <li>Desarrollo un diseñado web: $arancel_disenio USD</li>
        </ul>
    </section>";
}

function memotest()
{
    // Definir las imágenes (o números) para el memotest
    $cards = ['🐱', '🐶', '🐰', '🐼', '🦊', '🐻', '🐯', '🐷'];
    $cards = array_merge($cards, $cards); // Duplicar para tener pares
    shuffle($cards); // Mezclar

    echo "<h2 class='center margin-title'>Nuestros proyectos</h2>";
    define('APP', 'Juego de memotest');
    echo "<p class='center margin-title'>" . APP . "</p>";
    echo "<section class='memotest'>";

    foreach ($cards as $index => $card):
        echo "<div class='card' data-id='$index' data-symbol='$card'>
            <div class='front'></div>
            <div class='back'>$card</div>
        </div>";
    endforeach;

    echo"</section>";
}
