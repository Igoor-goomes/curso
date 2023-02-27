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
                        <li><a href="exercicio.php?dir=tipos&file=float">Atividade 07 | Tipo Float</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=aritmeticas">Atividade 08 | Op. Aritméticas</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=string">Atividade 09 | Tipo String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_string">Atividade 10 | Desafio String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=booleano">Atividade 11 | Tipo Booleano</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Variáveis</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=basico">Atividade 12 | Básico</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio_equacao">Atividade 13 | Desafio Equação</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=atribuicoes">Atividade 14 | Atribuições</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=interpolacao">Atividade 15 | Interpolação</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">Atividade 16 | Variáveis Variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio_variaveis">Atividade 17 | Dasafio Variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=valor_referencia">Atividade 18 | Valor vs Referência</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=constantes">Atividade 19 | Constantes</a></li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>Controle</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=controle&file=if_else">Atividade 20| if else</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operadores_relacionais">Atividade 21 | Operadores Relacionais</a></li>
                        <li><a href="exercicio.php?dir=controle&file=desafio_pi">Atividade 22 | Desafio Operadores Relacionais</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operadores_logicos">Atividade 23 | Operadores Lógicos</a></li>
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
