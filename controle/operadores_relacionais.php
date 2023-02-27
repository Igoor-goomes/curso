<div class="titulo">Operadores Relacionais</div>

<?php
// var_dump(1 == 1); 
// echo '<br>';
// var_dump(1 > 1);
// echo '<br>';
// var_dump(1 >= 1);
// echo '<br>';
// var_dump(4 < 23);
// echo '<br>';
// var_dump(1 <= 7);
// echo '<br>';
// var_dump(1 != 1);
// echo '<br>';
// var_dump(1 <> 1);
// echo '<br>';
// var_dump(111 == '111');
// echo '<br>';
// var_dump(111 === '111');
// echo '<br>';
// var_dump(111 != '111');
// echo '<br>';
// var_dump(111 !== '111');
// echo '<br>';
echo "<p>Relacionais no If/Else</p><hr>";
$idade = 65;

if ($idade < 18)  {
    echo "Menor de idade = $idade anos<br>";
} else if ($idade <= 65) {
    echo "Adulto = $idade anos<br>";
}else {
    echo "Terceira Idade = $idade anos";
}