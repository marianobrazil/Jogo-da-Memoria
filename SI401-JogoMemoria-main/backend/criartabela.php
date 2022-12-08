<?php
    $dimensao = (isset($_POST['dimensao'])) ? $_POST['dimensao'] : 'tabuleiro vazio';
    var_dump($dimensao);
    require_once '../class/Partida.php';
    $partida = new Partida();
    $listPartida = $partida->listarRanking('3x3');
    if($listPartida){
        echo json_encode('sucesso');
    }

?>