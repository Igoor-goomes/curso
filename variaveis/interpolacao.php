<div class="titulo">Interporlação</div>

<?php

// com aspas '' não podemos interporla
// com aspas "" podemos interporla


$numero = 10;
echo $numero;
echo '<br> $numero';


$texto = "A sua nota é: $numero";
echo "<br> $texto";

$objeto = 'caneta';
echo "<br> Eu tenho 5 {$objeto}s.";
echo "<br> Eu tenho 5 {$objeto}s mais perdi 3 {$objeto}s";