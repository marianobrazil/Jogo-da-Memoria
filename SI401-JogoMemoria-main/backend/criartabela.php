<?php
$dimensao = (isset($_POST['minhadimensao'])) ? $_POST['minhadimensao'] : 'minhadimensao vazia';
$computedString = "Olá, " . $dimensao . "!";
$array = ['userName' => $dimensao, 'stringModificada' => $computedString];
require_once '../class/Partida.php';
$partida = new Partida();
$listaPartida = $partida->listarRanking($dimensao);
if($listaPartida){
    echo json_encode($listaPartida);
}
else{
}
?>