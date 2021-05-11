<?php
session_start();
require_once 'Db/db2.php';
require_once 'Core/Site.class.php';
       
	
        
  try{
  
     if (isset($_REQUEST['btnCadastro'])){
    $arq = "imagens/add/" .basename($_FILES['img_site']['name']);
    $img_site = $_FILES['img_site']['name'];
    if(move_uploaded_file($_FILES['img_site']['tmp_name'], $arq)){
        $msg = "Sucesso";
    }else{
        $msg = "Deu merda";
    }
}
     
  $nome_site = $_REQUEST['nome_site'];
  $desc_site = $_REQUEST['desc_site'];
  $link_site = $_REQUEST['link_site'];
             
     $site = new Site();
     $site->setNome_site($nome_site);
     $site->setImg_site($img_site);
     $site->setDesc_site($desc_site);
     $site->setLink_site($link_site);
     

 

        
     if($site->insert()){
         $_SESSION['msgSiteIn'] = "<div class='alert alert-success'>Site cadastro com sucesso!</div>";      
          echo '<script>';
         echo "location.href='indexAdm.php?p=home'";
         echo '</script>';
     }
     
 } catch (Exception $exc) {
     $codigoerro = $exc->getMessage();
     $json[] = array('result'=>$codigoerro);
     echo json_encode($json);    
 }finally{
     $site->closeConnection();
 } 
 

