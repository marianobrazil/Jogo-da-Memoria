<?php
    require_once 'Conexao.php';
    class Produto_em_pedido
    {
        private $fk_produto;
        private $fk_pedido;
        private $quantidade_produto;

        public function getFkProduto()
        {
            return $this->fk_produto;
        }
        public function getFkPedido()
        {
            return $this->fk_pedido;
        }
        public function getQuantidade_produto()
        {
            return $this->quantidade_produto;
        }
        public function setFkProduto($id_produto)
        {
            $this->fk_produto = $id_produto;
        }
        public function setFkPedido($id_pedido)
        {
            $this->fk_pedido = $id_pedido;
        }
        public function setQuantidade_produto($quantidade)
        {
            $this->quantidade_produto = $quantidade;
        }
        public function cadastrar()
        {
            $cx = new Conexao();
            $cmdSql = "CALL produto_em_pedido_cadastrar('$this->fk_produto','$this->fk_pedido',$this->quantidade_produto);";
            return $cx->insert($cmdSql);
        }
        public function consultar_porPedido($id_pedido)
        {
            $cx = new Conexao();
            $cmdSql = "CALL consultar_produtoEmPedido($id_pedido);";
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