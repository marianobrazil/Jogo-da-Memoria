<!DOCTYPE html>

<html lang="pt">
    <head>
        <title>BigBrain - Ranking</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/ranking.css">
    </head>
    <body>
       <nav>
        <img src="src/brain.png" alt="logo">
        <div class="menu">
            <p id="comp1">Bem-Vindo, Fulano!</p>
            <h1 id="comp2">Jogo da Memória</h1>
            <a href="index.php" id="comp3">Página Inicial</a>
            <a href="infospessoais.php" id="comp4">Informações Pessoais</a>
            <a href="login.php" id="comp5">Sair</a>
        </div>
       </nav>
       <section>
            <div class="logo">
                <img src="src/ranking.png" alt="ranking">
            </div>
            <div class="filter">
                <span id="span2x2">2 x 2</span>
                <span id="span3x3">3 x 3</span>
                <span id="span4x4">4 x 4</span>
                <span id="span5x5">5 x 5</span>
                <span id="span6x6">6 x 6</span>
                <span id="span7x7">7 x 7</span>
                <span id="span8x8">8 x 8</span>
            </div>
            <div id="content">
                <table id="indice">
                    <tr>
                        <th id="posicao">Posição</th>
                        <th id="nome">Nome</th>
                        <th id="modo">Dimensão</th>
                        <th id="tempo">Tempo</th>
                    </tr>
                </table>
                <table>
                    <?php 
                        require_once '../SI401-JogoMemoria-main/class/Conexao.php';
                        function selecionaTop10($filter)
                        {
                            $count = 0;
                            $cx = new Conexao();
                            $cmdSql = "SELECT * FROM partida p INNER JOIN jogador j ON j.codigo = p.codigoJogador where tempoJogo IS NOT NULL ORDER BY tempoJogo LIMIT 10";
                            $result = $cx->select($cmdSql);
                            if ($result) {
                                foreach ($result as $valor) {
                                    $count++;
                                    echo("<tr> \n <br> \n 
                                            <td>".$count."</td> \n <br> \n
                                            <td>".$valor['nome']."</td> \n <br> \n
                                            <td>".$valor['dimensao']."</td> \n <br> \n
                                            <td>".$valor['tempoJogo']."</td> \n <br> \n");
                                }
                            }
                        }
                    selecionaTop10(null);
                    ?>
                </table>
            </div>
       </section>
       <a href="../SI401-JogoMemoria-main/index.php">
            <footer id="voltar">
                    <img src="src/voltar.png" alt="btnvoltar">
                    <h4>Voltar</h4>
            </footer>
        </a>       
    </body>    
</html>