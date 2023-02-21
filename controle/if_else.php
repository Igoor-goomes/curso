<div class="titulo">if | else</div>

<?php

if(true) {
    echo "Texto validado!";
    echo "<br>";
    echo "Texto validado novamente!";
    echo "<br>";
}

if (false) {
    echo "Verdadeiro<br>";
} else {
    echo "Falso<br>";
}

echo "<br>";

if (false) {
    echo "Passo A<br>";
} else if(true){
    echo "Passo B<br>";
} else {
    echo "Ultimo Passo<br>";
}
