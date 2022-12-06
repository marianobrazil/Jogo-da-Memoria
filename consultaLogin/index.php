<!DOCTYPE html>
<?php
session_start();
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/index.css">
        <title>Home</title>
    </head>
    <body>
        <form action="login/login.php" method="post">
        <div class="form-group">
            <label for="">Login: </label>
            <input type="text" id="" class="form-control" name="txtLogin"><br><br>
            <label for="">Senha: </label>
            <input type="password"  id="" class="form-control" name="txtSenha"><br><br>
            <input name="" id="" class="btn btn-primary" type="submit" value="ENTRAR">
        </div>
            </form>
        <?php
        if (isset($_SESSION['naoautenticado'])):
            ?>
            <script>
            alert("Usuário ou senha incorreto!");
            </script>
           
            <?php
        endif;
        unset($_SESSION['naoautenticado']);
        ?>
    </body>
</html>