<div class="titulo">Desafio do PI</div>

<?php

echo pi();
$pi = 3.14;

if ($pi === pi()) {
    echo "<br>Igual!";
} else {
    echo "<br>Diferente!";
}

// Operador Relacional
$piErrado = 2.8;

// Resposta
echo '<br>' . ($pi - pi());
echo '<br>' . ($pi - $piErrado);
echo '<br>';

if( $pi - pi() <= 0.01) {
    echo "Pracicamente iguais<br>";
} 

if( $pi - $piErrado <= 0.01) {
    echo "Pracicamente iguais<br>";
} else {
    echo "Valor incorreto!<br>";
}
