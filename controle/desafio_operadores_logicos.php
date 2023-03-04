<div class="titulo">Desafio Operadores Lógicos</div>
<!-- 
    Dois trabalho -> terça e quinta.
        -se os dois forem executador -> TV 50' e Sorvete com a Familia
        -se apenas um for executado -> TV 32' e sorvete com a Familia
        -se nenhum dos trabalhos forem executados -> não vão gastar com nada
-->

<form action="#" method="post">
    <div>
        <label for="job1">Trabalho BRB (Terça):</label>
        <select name="job1" id="job1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="job2">Trabalho Banco do Brasil (Quinta):</label>
        <select name="job2" id="job2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Enviar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>

<!-- Lógica -->
<?php

if (isset($_POST['job1']) && isset($_POST['job2'])) {
    $job1 = $_POST['job1'] === '1';
    $job2 = !!$_POST['job2'];
    $tv = '';
    $sorvete = false;

    if($job1 and $job2) {
        $tv = '50"';
    } else if ($job1 xor $job2) {
        $tv = '32"';
    } else if($job1 or $job2) {
        $sorvete = true;
    }


    if($tv and !$sorvete) {
        $resultado = "Vamos comprar uma TV de $tv e também tomar um sorvete para comemorar a compra da nova TV \o/";
    } else {
        $resultado = "Não vamos comprar TV, vamos ficar em casa para economizar!";
    }

    // Explicação do professor
    // if(!$sorvete) {
    //     $resultado .= '<br>Não vamos gastar com nada por agora!';
    // } else {
    //     $resultado .= '<br>e também vamos tomar um sorvete para comemorar a compra da nova TV \o/';
    // }

    echo "<p>$resultado</p>";

}
