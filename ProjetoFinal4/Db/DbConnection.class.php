<?php
require_once 'Config/Cflogin.class.php';

class DbConnection extends Cflogin {
    

    
    private $conn;
    private $user = 'root';
    private $pass = '';
    private $host = 'localhost';
    private $port = '';
    private $dataBase = 'ambiental';
//    
//    private $conn;
//    private $user = 'root';
//    private $pass = '04121199';
//    private $host = 'localhost';
//    private $port = '3306';
//    private $dataBase = 'form';
    
    
//    $conn = mysqli_connect($servidor);
    // Metodo responsavel em estabelecer a conexao com o banco
    private function connect(){
       try {
            $this->conn = new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->dataBase", $this->user, $this->pass);
            if($this-> conn){
                return $this->conn;
            }
        } catch (PDOException $exc) {
            throw new Exception($exc->getCode());
        }
        }
        
//        // Metodo responsavel em inserir, atualizar e excluir
        public function runQuery($sql){
            $this->connect();
            $this->conn->beginTransaction();
            $stm = $this->conn->prepare($sql);
            $stm->execute();
            if($stm){
                $this->conn->commit();
            }else{
                $this->conn->rollBack();
            }
            return $stm;
        }



//        // Metodo responsavel pelas consultas sql
        public function runSelect($sql) {
            $this->conn = $this->connect();
            $stm = $this->conn->prepare($sql);
            $stm->execute();
           return $stm->fetchALL(PDO::FETCH_ASSOC);
           
      }
        
       
        // Metodo responsavel em encerrar a conexao
        public function    closeConnection(){
            $this->conn = null;
}

        }