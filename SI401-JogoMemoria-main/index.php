<?php
    session_start();
    include 'login/verificarLogin.php';
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>BigBrain - Página Inicial</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/index.css">
    </head>
    <body>
       <nav>
        <img src="src/brain.png" alt="logo">
        <div class="menu">
            <p id="comp1">Bem-Vindo, Fulano!</p>
            <h1 id="comp2">Jogo da Memória</h1>
            <a href="infospessoais.html" id="comp3">Informações Pessoais</a>
            <a href="login/logout.php" id="comp4">Sair</a>
        </div>
       </nav>
       <section>
            <div class="sub-nav">
                <a href="telasClassico/selecaoModoClassico.html">
                    <div class="box1">
                        <img src="src/classico.png" alt="classico">
                        <div class="titulo-box">
                            <h3>Modo Clássico</h3>
                        </div> 
                    </div>
                </a>
                <a href="telasTempo/selecaoModoTempo.html">
                    <div class="box2">
                        <img src="src/relogio.png" alt="contraOtempo">
                        <div class="titulo-box">
                            <h3>Modo Contra o Tempo</h3>
                        </div> 
                    </div>
                </a>
                <a href="../SI401-JogoMemoria-main/ranking.php">                    
                    <div class="box3">
                        <img src="src/ranking.png" alt="ranking">
                        <div class="titulo-box">
                            <h3>Ranking dos Jogadores</h3>
                        </div> 
                    </div>
                </a>
                <a href="tutorial.html">
                    <div class="box4">
                        <img src="src/tutorial.png" alt="tutorial">
                        <div class="titulo-box">
                            <h3>Como Jogar</h3>
                        </div> 
                    </div>
                </a> 
            </div>

            <div class="historico">
                <div class="titulo">
                    <h1>Histórico de Partidas</h1>
                </div> 
                <div class="win">
                    <div class="player-status">
                        <ul>
                            <li>Tempo de Partida</li>
                            <li>Data</li>
                            <li>Hora</li>
                        </ul>
                    </div>
                    <div class="mode-status">
                        <p class="modo">Clássico</p>
                        <p class="dimensao">3x3</p>
                    </div>
                    <div class="win-status">
                        <p>V</p>
                    </div>
                </div>
                <div class="win">
                    <div class="player-status">
                        <ul>
                            <li>Tempo de Partida</li>
                            <li>Data</li>
                            <li>Hora</li>
                        </ul>
                    </div>
                    <div class="mode-status">
                        <p class="modo">Clássico</p>
                        <p class="dimensao">3x3</p>
                    </div>
                    <div class="win-status">
                        <p>V</p>
                    </div>
                </div>
                <div class="win">
                    <div class="player-status">
                        <ul>
                            <li>Tempo de Partida</li>
                            <li>Data</li>
                            <li>Hora</li>
                        </ul>
                    </div>
                    <div class="mode-status">
                        <p class="modo">Clássico</p>
                        <p class="dimensao">3x3</p>
                    </div>
                    <div class="win-status">
                        <p>V</p>
                    </div>
                </div>
                <div class="win">
                    <div class="player-status">
                        <ul>
                            <li>Tempo de Partida</li>
                            <li>Data</li>
                            <li>Hora</li>
                        </ul>
                    </div>
                    <div class="mode-status">
                        <p class="modo">Clássico</p>
                        <p class="dimensao">3x3</p>
                    </div>
                    <div class="win-status">
                        <p>V</p>
                    </div>
                </div>
                <a href="historico.html"><footer>Ver Histórico Completo</footer></a>
            </div>
       </section>
    </body>    
</html>
