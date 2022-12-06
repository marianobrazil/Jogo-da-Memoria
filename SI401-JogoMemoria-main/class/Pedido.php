<?php
    require_once 'Conexao.php';
    class Pedido
    {
        private $id_pedido;
        private $fk_cliente;
        private $data_pedido;
        private $hora_pedido;
        private $valor_total;


        public function getIdPedido()
        {
            return $this->id_pedido;
        }
        public function getFkCliente()
        {
            return $this->fk_cliente;
        }
        public function getDataPedido()
        {
            return $this->data_pedido;
        }
        public function getHoraPedido()
        {
            return $this->hora_pedido;
        }
        public function getValorTotal()
        {
            return $this->valor_total;
        }

        public function setIdPedido($id)
        {
            $this->id_pedido = $id;
        }
        public function setFkCliente($fkCliente)
        {
            $this->fk_cliente = $fkCliente;
        }
        public function setDataPedido($dataPedido)
        {
            $this->data_pedido = $dataPedido;
        }
        public function setHoraPedido($horaPedido)
        {
            $this->hora_pedido = $horaPedido;
        }
        public function setValorTotal($valorTotal)
        {
            $this->valor_total = $valorTotal;
        }

        public function cadastrar()
        {
            $cx = new Conexao();
            $cmdSql = "CALL pedido_cadastrar('$this->fk_cliente','$this->data_pedido','$this->hora_pedido','$this->valor_total');";
            return $cx->insert($cmdSql);
        }
        public function consultarTodos()
        {
            $cx = new Conexao();
            $cmdSql = "CALL pedido_consultarTodos();";
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