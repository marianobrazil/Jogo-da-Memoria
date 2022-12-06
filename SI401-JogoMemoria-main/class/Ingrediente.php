<?php
    require_once 'Conexao.php';
    class Ingrediente
    {
        private $id;
        private $nome;
        private $estoque_min;
        private $tipo_medida;
        private $quantidade_tipo;
        private $quantidade_total;
        private $valor;

        public function getId()
        {
            return $this->id;
        }
        public function getNome()
        {
            return $this->nome;
        }
        public function getEstoque_min()
        {
            return $this->estoque_min;
        }
        public function getTipoMedida()
        {
            return $this->tipo_medida;
        }
        public function getQuantidadeTipo()
        {
            return $this->quantidade_tipo;
        }
        public function getQuantidadeTotal()
        {
            return $this->quantidade_total;
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
        public function setEstoque_min($estoque_min)
        {
            $this->estoque_min = $estoque_min;
        }
        public function setTipoMedida($tipo_medida)
        {
            $this->tipo_medida = $tipo_medida;
        }
        public function setQuantidadeTipo($quantidade_tipo)
        {
            $this->quantidade_tipo = $quantidade_tipo;
        }
        public function setQuantidadeTotal($quantidade_total)
        {
            $this->quantidade_total = $quantidade_total;
        }
        public function setValor($valor)
        {
            $this->valor = $valor;
        }

        public function cadastrar()
        {
            $cx = new Conexao();
            $cmdSql = "CALL ingrediente_cadastrar('$this->nome','$this->estoque_min','$this->tipo_medida','$this->quantidade_tipo','$this->quantidade_total',
            '$this->valor');";
            return $cx->insert($cmdSql);
        }
        public function consultarTodos()
        {
            $cx = new Conexao();
            $cmdSql = "CALL ingrediente_consultarTodos;";
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