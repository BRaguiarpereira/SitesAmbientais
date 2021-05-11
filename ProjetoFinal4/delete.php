<section>

<?php
require_once 'Core/Site.class.php';
session_start();
try{
 $codigo = isset($_REQUEST['codigo'])?$_REQUEST['codigo']:NULL;
    
    $site = new Site();
    $site->setCod_site($codigo);
    $site->delete("and cod_site='$codigo'");
   
   $_SESSION['msgSiteDel'] = "<div class='alert alert-success'>Site excluido com sucesso!</div>"; 
   
    echo '<script>';
         echo "location.href='indexAdm.php?p=adm_lista_site'";
    echo '</script>';

}catch (Exception $exc) {
     $codigoerro = $exc->getMessage();
     $json[] = array('result'=>$codigoerro);
     echo json_encode($json);    
 }finally{
     $site->closeConnection();
 } 

?>
</section>

