<?php
    require_once 'Conexao.php';
    class Receita
    {
        private $produto;
        private $ingrediente;
        private $quantidade_ingrediente;

        public function getProduto()
        {
            return $this->produto;
        }
        public function getIngrediente()
        {
            return $this->ingrediente;
        }
        public function getQuantidade_ingrediente()
        {
            return $this->quantidade_ingrediente;
        }
        public function setProduto($id_produto)
        {
            $this->produto = $id_produto;
        }
        public function setIngrediente($id_ingrediente)
        {
            $this->ingrediente = $id_ingrediente;
        }
        public function setQuantidade_ingrediente($quantidade)
        {
            $this->quantidade_ingrediente = $quantidade;
        }
        public function cadastrar()
        {
            $cx = new Conexao();
            $cmdSql = "CALL receita_cadastrar('$this->produto','$this->ingrediente',$this->quantidade_ingrediente);";
            return $cx->insert($cmdSql);
        }
        public function consultar_porProduto($id_produto)
        {
            $cx = new Conexao();
            $cmdSql = "CALL receita_consultar_porProduto($id_produto);";
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