<?php
    $tabuleiro = (isset($_POST['tabuleiro'])) ? $_POST['tabuleiro'] : 'tabuleiro vazio';
    $dataJogo = (isset($_POST['dataJogo'])) ? $_POST['dataJogo'] : 'dataJogo vazio';
    $statusVitoria = (isset($_POST['statusVitoria'])) ? $_POST['statusVitoria'] : 'statusVitoria vazio';
    $tempoUsado = (isset($_POST['tempoUsado'])) ? $_POST['tempoUsado'] : 'tempoUsado vazio';
    $modo = (isset($_POST['modo'])) ? $_POST['modo'] : 'modo vazio';

    $computedString = $tabuleiro.' '.$dataJogo.' '.$statusVitoria.' '.$tempoUsado.' '.$modo;
    $array = ['stringModificada' => $computedString];
    echo json_encode($array);
?>