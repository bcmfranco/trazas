<?php 

$hora=date('H');
$horaLocal=($hora-3);
if ($horaLocal>12 && $horaLocal<20){
    $saludo = "Es una hermosa tarde ";
} elseif ($horaLocal>19) {
    $saludo = "Queda noche ";
} elseif ($horaLocal<6) {
    $saludo = "La madrugada siempre esconde cosas ";
} elseif ($horaLocal>5 && $horaLocal<13) {
    $saludo = "La agregía llega de mañana ";
} else {
    $saludo = "Rompiste el reloj ";
}



?>

<div class="tarjeta27">
    <div class="tarjeta271">
    </div>
    <div class="tarjeta271">
        {{$saludo.Auth()->user()->name}} ¿Cómo estás hoy?
    </div>
</div>