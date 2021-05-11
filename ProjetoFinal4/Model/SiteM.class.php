<?php
require_once 'Db/DbConnection.class.php';

class SiteM extends DbConnection{
    private $cod_site;
    private $nome_site;
    private $img_site;
    private $desc_site;
    private $link_site;
    
    public function getCod_site() {
        return $this->cod_site;
    }

    public function getNome_site() {
        return $this->nome_site;
    }

    public function getImg_site() {
        return $this->img_site;
    }

    public function getDesc_site() {
        return $this->desc_site;
    }

    public function getLink_site() {
        return $this->link_site;
    }

    public function setCod_site($cod_site) {
        $this->cod_site = $cod_site;
    }

    public function setNome_site($nome_site) {
        $this->nome_site = $nome_site;
    }

    public function setImg_site($img_site) {
        $this->img_site = $img_site;
    }

    public function setDesc_site($desc_site) {
        $this->desc_site = $desc_site;
    }

    public function setLink_site($link_site) {
        $this->link_site = $link_site;
    }


    
    
}

