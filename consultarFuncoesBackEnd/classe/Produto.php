<?php
require_once 'Conexao.php';
class Produto {
    private $codigo;
    private $nome;
    private $valor;
    private $imagem;
    
    public function getCodigo() {
        return $this->codigo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }
    public function getImagem() {
        return $this->imagem;
    }

    public function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    private function cx() {
        return new Conexao();
    }
    public function Cadastrar()
    {
        
        $cmdSql = 'INSERT INTO `t_produto`(nome, valor, imagem) VALUES(:nome,:valor,:imagem)';
        $dados = array(':nome'=>$this->nome, ':valor'=>$this->valor, ':imagem'=>$this->imagem);
        return $this->cx()->insert($cmdSql, $dados);
    } 
}

