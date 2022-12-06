<?php
    require_once 'Conexao.php';
    class Jogador
    {
        private $codigo;
        private $nome;
        private $cpf;
        private $telefone;
        private $email;
        private $usuario;
        private $senha;

        public function getCodigo()
        {
                return $this->codigo;
        }

        public function setCodigo($codigo)
        {
                $this->codigo = $codigo;

                return $this;
        }


        public function getNome()
        {
                return $this->nome;
        }


        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        public function getCpf()
        {
                return $this->cpf;
        }

        public function setCpf($cpf)
        {
                $this->cpf = $cpf;

                return $this;
        }


        public function getTelefone()
        {
                return $this->telefone;
        }

        public function setTelefone($telefone)
        {
                $this->telefone = $telefone;

                return $this;
        }

        public function getEmail()
        {
                return $this->email;
        }

        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        public function getUsuario()
        {
                return $this->usuario;
        }

        public function setUsuario($usuario)
        {
                $this->usuario = $usuario;

                return $this;
        }
        public function getSenha()
        {
                return $this->senha;
        }
 
        public function setSenha($senha)
        {
                $this->senha = $senha;

                return $this;
        }

        public function cadastrar()
        {
            $cx = new Conexao();
            $cmdSql = "CALL cadastrarJogador('$this->nome','$this->cpf',$this->telefone,$this->email,$this->usuario,$this->senha);";
            return $cx->insert($cmdSql);
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