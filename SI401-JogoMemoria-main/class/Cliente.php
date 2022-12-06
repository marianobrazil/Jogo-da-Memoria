<?php
    require_once 'Conexao.php';
    class Cliente
    {
        private $id;
        private $cpf;
        private $nome;
        private $telefone;


        public function getId()
        {
            return $this->id;
        }
        public function getCpf()
        {
            return $this->cpf;
        }
        public function getNome()
        {
            return $this->nome;
        }
        public function getTelefone()
        {
            return $this->telefone;
        }

        //set
        public function setId($id)
        {
            $this->id = $id;
        }
        public function setCpf($cpf)
        {
            $this->cpf = $cpf;
        }
        public function setNome($nome)
        {
            $this->nome = $nome;
        }
        public function setTelefone($telefone)
        {
            $this->telefone = $telefone;
        }
        
        public function cadastrar()
        {
            $cx = new Conexao();
            $cmdSql = "CALL cliente_cadastrar('$this->cpf','$this->nome','$this->telefone');";
            return $cx->insert($cmdSql);
        }
        public function consultarTodos()
        {
            $cx = new Conexao();
            $cmdSql = "CALL cliente_consultarTodos();";
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