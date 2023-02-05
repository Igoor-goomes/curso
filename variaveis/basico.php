<div class="titulo">Variáveis</div>

<?php
// variáveis em PHP são case sensitive

$nome = "Igor";
$idade = 26;

echo $nome, '<br>';
var_dump($nome);
echo '<br>';

$a = 3;
$b = 16;
$resultadoDaSomaDosNumeros = $a + $b;
echo $resultadoDaSomaDosNumeros;
echo '<br>';
// o isset verifica se uma variável foi definida
// retorna "true" se a variável existe e não é "null", senão retorna "false"
echo isset($resultadoDaSomaDosNumeros);

// o unset faz o inverso do isset
// retorno = none
unset($resultadoDaSomaDosNumeros);
echo '<br>';
var_dump($resultadoDaSomaDosNumeros);

$variavel = 10;
echo '<br>'. $variavel;

$variavel = "Agora sou uma string!";
echo '<br>'. $variavel;


// Nomes de Variáveis
$var = 'forma valida';
$var2 = 'com número também é valida';
$VAR3 = 'com letras maiusculas valida';
$_var_4 = 'começar dessa forma também é valido';
$vâr5 = 'com acentos também é valido'; // evitar esse tipo de declaração
// $6var = 'forma invalida';
// $%var7 = 'forma também invalida';
// $var8% = 'forma invalida';

// Também existem variáveis pré-definidas, podemos verificar essas variáveis na documentação oficial do PHP
