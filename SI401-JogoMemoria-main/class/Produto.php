<?php
    require_once 'Conexao.php';
    class Produto
    {
        private $id;
        private $nome;
        private $valor;

        public function getId()
        {
            return $this->id;
        }
        public function getNome()
        {
            return $this->nome;
        }
        public function getValor()
        {
            return $this->valor;
        }
        public function setId($id)
        {
            $this->id = $id;
        }
        public function setNome($nome)
        {
            $this->nome = $nome;
        }
        public function setValor($valor)
        {
            $this->valor = $valor;
        }
        public function cadastrar()
        {
            $cx = new Conexao();
            $cmdSql = "CALL produto_cadastrar('$this->nome',$this->valor);";
            return $cx->insert($cmdSql);
        }
        public function consultarTodos()
        {
            $cx = new Conexao();
            $cmdSql = "CALL produto_consultarTodos();";
            return $cx->select($cmdSql);
        }
       /* public function excluir($id)
        {
            $cx = new Conexao();
            $cmdSql = "CALL produto_excluir($id);";
            return $cx->select($cmdSql);
        }
        public function consultarindiv($id)
        {
            $cx = new Conexao();
            $cmdSql = "CALL produto_consultarindiv($id);";
            return $cx->select($cmdSql);
        }*/
    }
?>