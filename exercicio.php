<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
    <title>Exercício</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso de PHP</h1>
        <h2>Vizualização do Exercício</h2>
    </header>
    <main class="principal">
        <nav class="navegacao">
            <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php"?> class="verde">Vizualizar Exercício</a>
            <a href="index.php" class="vermelho">Voltar</a>
        </nav>
        <div class="conteudo">
            <?php
                include(__DIR__."/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="rodape">
        CURSO COD3R & ALUNOS &copy; <?= date('Y');?> 
    </footer>
</body>
</html>
