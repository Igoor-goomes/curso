<div class="titulo">Operador Ternário</div>

<?php

$idade = 45;
$status;

if ($idade >= 18) {
    $status = 'Maior de Idade';
} else {
    $status = 'Menor de Idade';
}

echo "$status<br>";

// Operador Ternário

$status = $idade>=18 ? 'Maior de Idade' : 'Menor de Idade';
echo "$status<br>";

// Operador Ternário dentro de outro operador ternário (uso não comum)
$statusFgts = $idade>=18 ? $idade>=65 ? 'Pode entrar com processo para aposentadoria' : 'Não pode entrar com processo' : 'Menor de Idade';
echo "$statusFgts<br>";