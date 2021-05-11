<?php
require_once 'Db/DbConnection.class.php';


class UsuarioM extends DbConnection{
    private $cod_usuario;
    private $email_usuario;
    private $senha_usuario;
    private $nome_usuario;
    private $nivel_acesso;

            
    

    function getCod_usuario() {
        return $this->cod_usuario;
    }

    function getEmail_usuario() {
        return $this->email_usuario;
    }

    function getSenha_usuario() {
        return $this->senha_usuario;
    }

    function getNome_usuario() {
        return $this->nome_usuario;
    }

    function getNivel_acesso() {
        return $this->nivel_acesso;
    }

    function setCod_usuario($cod_usuario) {
        $this->cod_usuario = $cod_usuario;
    }

    function setEmail_usuario($email_usuario) {
        $this->email_usuario = $email_usuario;
    }

    function setSenha_usuario($senha_usuario) {
        $this->senha_usuario = $senha_usuario;
    }

    function setNome_usuario($nome_usuario) {
        $this->nome_usuario = $nome_usuario;
    }


    function setNivel_acesso($nivel_acesso) {
        $this->nivel_acesso = $nivel_acesso;
    }





 
}
