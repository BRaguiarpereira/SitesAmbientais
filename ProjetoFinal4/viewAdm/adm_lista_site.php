<section class="eric">
    <h1>Escolha o Site que deseja excluir</h1>
    <?php
			if(isset($_SESSION['msgSiteDel'])){
				echo $_SESSION['msgSiteDel'];
				unset($_SESSION['msgSiteDel']);
			}
                        
                       ?>
    <div class="filtro_busca">
        <form action="indexAdm.php?p=buscasite2" method="post" autocomplete="off" id="" class="frm fl busca">
            <label class="">Pesquisar por SITE</label><br>
            <input class="campo" type="search" name="busca" placeholder="Pesquisar..." tabindex="1" required><button class="buscar" type="submit" name="buscar" value=""></button>
        </form>
     
      
    
 
    <?php
require_once 'Core/Site.class.php';
//
try{
    $site = new Site();
    $arraySites = array();
    $arrayArq = $site->select();
    $i = 0;
    while($i < count($arrayArq)){

        

      
        echo '<div class="mini_card shadow">
        <img src="imagens/add/'.$arrayArq[$i]['img_site'].'" alt="250x150">
        <div class="mini_caixa">
             <span class="bloquear_texto">'.$arrayArq[$i]['nome_site'].'</span>
             <span class="bloquear_texto">'.$arrayArq[$i]['desc_site'].'</span>
        </div>
        <a href="delete.php?codigo='.$arrayArq[$i]['cod_site'].'"   class="mini_button bg-vermelho"><span>Excluir</span></a> 
    </div>'; 
  

   $i++;
    }
   
 
}catch (Exception $exc) {
     $codigoerro = $exc->getMessage();
     $json[] = array('result'=>$codigoerro);
     echo json_encode($json);    
 }finally{
     $site->closeConnection();
 } 
    ?>




</section>