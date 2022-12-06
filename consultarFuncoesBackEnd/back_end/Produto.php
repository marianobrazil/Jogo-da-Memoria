<?php
require_once '../classe/Produto.php';
function produto(){
    return new Produto();
}
function cadastrar($nome,$valor,$imagem){
    $retorno = array(
        $result => true,
        $msg_erro => '',
        $msg_sucesso => ''
    );
    $produto = produto();
    $produto->setNome($nome);
    $produto->setImagem($imagem);
    $produto->setValor($valor);
    if($produto->Cadastrar()){
        $retorno['msg_sucesso'] = 'Cadastrado com sucesso';
    }
    else{
        $retorno['msg_erro'] = 'Erro: produto não cadastrado';
        $retorno['result'] = false;
    }
    echo json_encode($retorno);
}
$dadosJson = file_get_contents('php://input');
$arrayDados = json_decode($dadosJson, true);
$cmd = $arrayDados['cmd'];
if($cmd == 'cadastrarProduto'){
    $nome = $arrayDados['nome'];
    $valor = $arrayDados['valor'];
    $imagem = $arrayDados['imagem'];
    cadastrar($nome, $valor, $imagem);
}
?>