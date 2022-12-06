<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA','');
define('DB','revisao');
class Conexao {
    public $conexao = mysqli_connect (HOST, USUARIO, SENHA, DB);
    public $lastInsertId;
    private function Conectar(){
        return new PDO('mysql:host='.HOST.';dbname='.DB, USUARIO, SENHA);       
    }
     public function consultar($cmdSql) {
        $result = $this->Conectar()->prepare($cmdSql);
        $result->execute();        
        $countRows = $result->rowCount();            
        if ($countRows){ 
            return $result->fetchAll();         
        }
        return FALSE;          
    }   
    public function deletar($cmdSql) {
        return $this->Conectar()->exec($cmdSql);        
    } 
    public function alterar($cmdSql) {   
        return $this->Conectar()->exec($cmdSql);       
    }
    public function inserir($cmdSql) { 
        $cx = $this->Conectar();
        $result = $cx->prepare($cmdSql)->execute();
        if($result){
            $last_id = $cx->prepare('SELECT LAST_INSERT_ID() as id');
            $last_id->execute();
            $this->lastInsertId = $last_id->fetchAll()[0]['id'];
        }          
        return $result;
    }
        
}


