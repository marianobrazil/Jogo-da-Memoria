<?php
    session_start();
    include('class/Conexao.php');
    if(empty($_POST['txtLogin']) || empty($_POST['txtSenha'])){
    header('Location: index.php');
    exit();
    }
    $usuario = mysqli_real_escape_string($conexao,$_POST['txtLogin']);
    $senha = mysqli_real_escape_string($conexao,$_POST['txtSenha']);
    $query = "select usuario.login from usuario where usuario.login = '{$usuario}' and usuario.senha = '{$senha}'";
    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);
    if($row == 1){
        $_SESSION['usuario'] = $usuario;
        header('Location: sucesso.php');
    }
    else{
        header('Location: index.php');
        $_SESSION['naoautenticado'] = true;
    }
?>
