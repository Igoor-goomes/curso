<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso de PHP</h1>
        <h2>Indice das Aulas</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Básico</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Atividade 01 | Olá PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=html">Atividade 02 | Integração HTML</a></li>
                        <li><a href="exercicio.php?dir=basico&file=css">Atividade 03 | Integração CSS</a></li>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">Atividade 04 | Comentários PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=desafio">Atividade 05 | Desafio</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Tipos</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">Atividade 06 | Tipo Inteiro</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=float">Atividade 06 | Tipo Float</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=aritmeticas">Atividade 06 | Op. Aritméticas</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        CURSO COD3R & ALUNOS &copy; <?= date('Y');?> 
    </footer>
</body>
</html>
