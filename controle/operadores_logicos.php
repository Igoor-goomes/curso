<div class="titulo">Operadores Lógicos</div>

<style>
    p {
        margin-bottom: 0px;
        font-weight: bold;
    }

    hr {
        margin-top: 0px;
    }
</style>

<?php
echo "<p>Negação Lógica</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); 

echo "<p>Tabela Verdade 'AND' (E)</p><hr>";
var_dump(true && true); // && é o mesmo que and, ambos funcionam da mesma forma
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);
// vale lembrar que qualquer espressão falsa, já retorna false. Ou seja sem a necessidade de validar outras expressões.

echo "<p>Tabela Verdade 'OR' (OU)</p><hr>";
var_dump(true || true); // || é o mesmo que or, ambos funcionam da mesma forma
var_dump(true || false); 
var_dump(false || true);
var_dump(false || false); 
// apenas quando as duas expressões forem falsas o retorno será dado como false

echo "<p>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>"; // é comum usamor também no lugar de xor o operador !=, o retorno será o mesmo
var_dump(true xor true); // false
var_dump(true xor false); // true
var_dump(false xor true); // true
var_dump(false xor false); // false
// o operador XOR somente retornara verdadeiro quando houve um ou outro, quando as duas expressões forem do mesmo valor, o retorno é falso

echo "<p>Exemplos</p><hr>";

$idade = 62;
$sexo = 'M';

if ($idade >= 60 && $sexo === 'F') {
    echo "Mulheres com idade superior a 60 anos, podem aposentar!";
} else if ($idade >= 65 && $sexo === 'M') {
    echo "Homens com idade superior a 65 anos, podem aposentar!";
} else {
    echo "Deve-se trabalhar por mais uns anos para poder se aposentar!";
}

?>