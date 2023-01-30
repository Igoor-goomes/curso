<div class="titulo">Operações Aritméticas</div>

<?php

echo 1 + 1, '<br>';
var_dump(1 + 1);
echo '<br>';
var_dump(1 + 1.0); // prevalece float
echo '<br>';
echo 1 + 2.5, '<br>'; //soma
echo 10 - 2, '<br>'; //subtração 
echo 2 * 5, '<br>'; //multiplicação
echo 7 / 4, '<br>'; // divisão, retorna o valor float
echo intdiv(7, 4), '<br>'; // obrigando o valor retorna inteiro
echo round(7 / 4), '<br>'; // arredonda o valor, sempre par ao mais proximo
echo 7 % 4, '<br>';
echo 7 % 2, '<br>';
echo 8 % 2, '<br>';
// echo 7 / 0, '<br>'; // valor infinito
echo 4 ** 2, '<br>'; 

// Precedência de operadores:
// () => ** => / * % => + -

echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2, '<br>';
