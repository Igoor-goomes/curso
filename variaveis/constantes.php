<div class="titulo">Constantes</div>

<?php
// uma constante não pode ter seu valor alterado após sua declaração
define('TAXA_DE_JUROS', 5.9); //comum as constantes seguirem esse padrão de escrita
echo TAXA_DE_JUROS;
echo '<br>';

const NOVA_TAXA = 2.5;
echo NOVA_TAXA;

$valorVariavel = 2.8;
define('NOVISSIMA_TAXA', $valorVariavel);
// const NOVISSIMA_TAXA = $valorVariavel;
// const NOVISSIMA_TAXA = 2.8 + 1.2;
echo '<br>'. NOVISSIMA_TAXA;
echo '<br>'. PHP_VERSION;