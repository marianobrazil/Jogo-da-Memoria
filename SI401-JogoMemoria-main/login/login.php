<?php
<<<<<<< HEAD
    require_once("../class/Jogador.php");
    session_start();

    $txtUsuario = $_POST['txtUsuario'];
    $senha = $_POST['txtSenha'];
    $usuario = new Jogador();

    if($usuario->login($txtUsuario,$senha)){
        $_SESSION['usuario'] = $usuario;
        header('Location: ../index.php');
    } else {
=======
    session_start();
    include('class/Conexao.php');
    if(empty($_POST['txtUsuario']) || empty($_POST['txtSenha'])){
    header('Location: index.php');
    exit();
    }
    $usuario = mysqli_real_escape_string($conexao,$_POST['txtUsuario']);
    $senha = mysqli_real_escape_string($conexao,$_POST['txtSenha']);
    $query = "select usuario.login from usuario where usuario.login = '{$usuario}' and usuario.senha = '{$senha}'";
    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);
    if($row == 1){
        $_SESSION['usuario'] = $usuario;
        header('Location: index.php');
    }
    else{
>>>>>>> 32455437b75f7db75107a9e5275268d4802672da
        header('Location: ../login.php');
        $_SESSION['naoautenticado'] = true;
    }
?>
