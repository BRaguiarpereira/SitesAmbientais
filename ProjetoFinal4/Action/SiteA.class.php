<?php

require_once 'Model/SiteM.class.php';



class SiteA  extends SiteM{
    protected $sqlInsert = "insert into site(nome_site,img_site,desc_site,link_site)
                            values('%s','%s','%s','%s')";

    
    protected $sqlDelete = "delete from site where cod_site='%s'";
    protected $sqlSelect = "select * from site where 1=1 %s %s";

    public function insert(){             
        $sql = sprintf($this->sqlInsert,       
        $this->getNome_site(),
        $this->getImg_site(),
        $this->getDesc_site(),
        $this->getLink_site());  
        return $this->runQuery($sql);
    }
    
    public function delete() {
        $sql = sprintf($this->sqlDelete,
        $this->getCod_site());
        return $this->runQuery($sql);
        
    }
    
    public function select($where='',$order=''){
        $sql = sprintf($this->sqlSelect,$where,$order);
        return $this->runSelect($sql);
    }
  
}
