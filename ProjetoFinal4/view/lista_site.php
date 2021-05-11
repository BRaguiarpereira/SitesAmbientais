<section>
    <h1>Proteger o meio ambiente é responsabilidade de todos</h1>
    <div class="filtro_busca">
        <form action="index.php?p=buscasite1" method="post" autocomplete="off" id="" class="frm fl busca">
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
        <a href="'.$arrayArq[$i]['link_site'].'" class="mini_button bg-azul"><span>Ver</span></a>
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