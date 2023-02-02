<div class="titulo">Tipo String</div>

<?php

echo 'Olá! isso é uma string usando a função echo do php';
echo '<br>';

var_dump("Varificando quantos caracteres temos na nossa string");
echo '<br>';
echo '<br>';


// Concatenação
echo "Istó é uma nova string fazendo uma" . " concatenação";
echo '<br>', "Usando uma virgula para fazer a", " concatenação";
echo '<br>';
echo " 'Teste' " . ' "Teste" ' . ' \'Teste\'';

print ("<br>Também usamos a função print para escrever uma string");

// Algumas funções
echo '<br>' . strtoupper('um texto maximizado');
echo '<br>' . strtolower('UM TEXTO MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . mb_strlen("Eu também","utf-8");
echo '<br>' . substr("Só uma parte mesmo", 7, 6);
echo '<br>' . str_replace('aquilo','isso', 'Troca aquilo aquilo');