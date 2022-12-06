<!DOCTYPE html>

<html lang="pt">

<head>
    <title>BigBrain - Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <main class="login">
        <img id="biglogo" src="src/brain.png" alt="BigBrain Logo">
        <h2>BigBrain</h2>
        <p style="margin-top: 0em;">Jogo da Memória</p>

        <form style="display: inline" action="login/login.php" method="post" on>
            <input type="text" class="form" name="usuario" required placeholder="Usuario">
            <input type="password" class="form" name="senha" required placeholder="Senha">
            <button class="botao">Entrar</button>
        </form>


        <p>Não possui uma conta? <a href="cadastro.html"> <b>Cadastre-se</b></a></p>
    </main>
</body>

</html>