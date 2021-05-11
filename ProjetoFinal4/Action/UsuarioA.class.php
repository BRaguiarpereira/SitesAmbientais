<?php
require_once 'Model/UsuarioM.class.php';



class UsuarioA  extends UsuarioM{

    protected $sqlSelect = "select * from usuario where 1=1 %s %s";


    
    public function select($where='',$order=''){
        $sql = sprintf($this->sqlSelect,$where,$order);
        return $this->runSelect($sql);
    }
   
}