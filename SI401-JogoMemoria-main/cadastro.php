<!DOCTYPE html>

<html lang="pt">
    <head>
        <title>BigBrain - Cadastro</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script defer src="js/cadastro.js"></script>
    </head>
    <body>
        <main class = "cadastro">
            <img id="biglogo" src="src/brain.png" alt="BigBrain Logo">
            <h2>BigBrain</h2>
            <p style="margin-top: 0em;">Jogo da Memória</p>
            
            <form id="formCadastro" method="POST" style="display: inline">
                <input type="text" id="nome" name="nome" class="form" required placeholder="Nome completo">
                <input type="text" id="dtNasc" name="dtNasc" class="form"  onfocus="(this.type='date')" required placeholder="Data de nascimento">
                <input type="text" id ="cpf" name ="cpf" pattern="\d{11}" maxlength="11" class="form" required placeholder="CPF:  11 digitos">
                <input type="tel" id="tel" name="tel" class="form" required placeholder="Telefone: (XX) XXXXX-XXXX">
                <input type="email" id="email" name="email" class="form" required placeholder="E-mail: seuemail@dominio.com">
                <input type="text" id="usuario" name="usuario" class="form" required placeholder="Usúario">
                <input type="password" id="senha" name="senha" class="form" required placeholder="Senha">
                <input type="password" id="senha2" class="form" required placeholder="Confirme sua senha">
                <input type="submit" name="btnCadastrar" value="cadastrar" id="btnSubmit" class="botao">
            </form>

            <?php
                if(isset($_POST['btnCadastrar'])){
                    require_once 'class/Jogador.php';
                    $usuario = new Jogador();
                    $nome = $_POST['nome'];
                    var_dump($nome);
                    $cpf = $_POST['cpf'];
                    var_dump($cpf);
                    $telefone = $_POST['tel'];
                    var_dump($telefone);
                    $email = $_POST['email'];
                    var_dump($email);
                    $usuario = $_POST['usuario'];
                    var_dump($usuario);
                    $dataNasc = $_POST['dtNasc'];
                    var_dump($dataNasc);
                    $senha = $_POST['senha'];
                    var_dump($senha);
                    if($usuario->cadastrar($nome,$cpf,$telefone,$email,$usuario)){
                        echo '<br>Cadastrado com sucesso !!!';
                    } else {
                        echo 'Erro: Verifique se usuario já está cadastrado.';
                    }
                    debug_print_backtrace();
                }
            ?>
	    <p>Já possui uma conta? <a href="login.php"> <b>Entre</b></a></p>
        </main>
    </body>    
</html>
